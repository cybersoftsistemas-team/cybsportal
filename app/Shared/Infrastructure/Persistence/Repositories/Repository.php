<?php

namespace App\Shared\Infrastructure\Persistence\Repositories;

use App\Shared\Domain\Entities\Entity;
use App\Shared\Domain\Repositories\IRepository;
use App\Shared\Infrastructure\Persistence\DbContexts\DbContext;
use App\Shared\Infrastructure\Persistence\DbContexts\SaveResult;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use InvalidArgumentException;

class Repository implements IRepository
{
    /**
     * The DbContext (Eloquent Model) concrete class type.
     *
     * @var string
     */
    protected string $contextType;

    /**
     * Stores the last persisted model instance.
     *
     * @var Model|null
     */
    private ?Model $lastModel = null;

    /**
     * Repository constructor.
     *
     * @param Entity $entity
     * @param string $method
     * @throws InvalidArgumentException
     */
    protected function __construct(Entity $entity, string $method)
    {
        $modelClass = $this->validateContextType();

        /** @var DbContext $context */
        $context = app($modelClass);

        $data = $entity->toData();

        $pks = $context->getKeyNames();

        if (is_array($pks) && count($pks) > 0) {
            $this->assertKeysPresent($pks, $data);

            $attributes = Arr::only($data, $pks);
            $values = Arr::except($data, $pks);

            $this->lastModel = $modelClass::query()->{$method}($attributes, $values);
            return;
        }

        $pk = $context->getKeyName();

        if (!is_string($pk) || trim($pk) === '') {
            throw new InvalidArgumentException("DbContext {$modelClass} does not define a valid primary key.");
        }

        $this->assertKeysPresent([$pk], $data);

        $attributes = [$pk => $data[$pk]];
        $values = Arr::except($data, [$pk]);

        $this->lastModel = $modelClass::query()->{$method}($attributes, $values);
    }

    /**
     * Save an entity to the database (updateOrCreate) and return the persistence result.
     */
    public static function save(Entity $entity): SaveResult
    {
        $repo = new static($entity, 'updateOrCreate');
        return $repo->getPersistenceResult();
    }

    /**
     * Save an entity if it does not exist (firstOrCreate) and return the persistence result.
     */
    public static function saveIfNotExists(Entity $entity): SaveResult
    {
        $repo = new static($entity, 'firstOrCreate');
        return $repo->getPersistenceResult();
    }

    /**
     * Compute the persistence result based on wasRecentlyCreated and wasChanged().
     *
     * @throws InvalidArgumentException
     */
    protected function getPersistenceResult(): SaveResult
    {
        if ($this->lastModel === null) {
            throw new InvalidArgumentException('No persistence operation has been executed yet.');
        }

        if ((bool) $this->lastModel->wasRecentlyCreated) {
            return SaveResult::CREATED;
        }

        if ($this->lastModel->wasChanged()) {
            return SaveResult::UPDATED;
        }

        return SaveResult::UNCHANGED;
    }

    private function validateContextType(): string
    {
        if (empty($this->contextType)) {
            throw new InvalidArgumentException("The DbContext type has not been defined (contextType).");
        }

        if (!is_subclass_of($this->contextType, DbContext::class)) {
            throw new InvalidArgumentException("Invalid DbContext: {$this->contextType}.");
        }

        return $this->contextType;
    }

    private function assertKeysPresent(array $keys, array $data): void
    {
        foreach ($keys as $key) {
            if (!is_string($key) || trim($key) === '') {
                throw new InvalidArgumentException("Invalid primary key definition (empty key name).");
            }

            if (!array_key_exists($key, $data) || $data[$key] === null || $data[$key] === '') {
                throw new InvalidArgumentException(
                    "Entity must provide primary key '{$key}' in toData() to use persistence methods."
                );
            }
        }
    }
}