<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    private string $tableName = 'general.categories';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $qualifiedTableName = Str::of($this->tableName)->replace('.', '_');

        Schema::create($this->tableName, function (Blueprint $table) {
            // Columns...
            $table->uuid('Id')->default(DB::raw('NEWID()'));
            $table->string('Name', 255);
            $table->boolean('Reserved')->default(DB::raw(0));
            $table->uuid('ParentId')->nullable();

            // Primary Key...
            $table->primary('Id');

            // Foreign Keys...
            $table->foreign('ParentId')->references('Id')->on($this->tableName);

            // Indexes...
            $table->index('ParentId');
            $table->index(['ParentId', 'Id']);

            // Unique Indexes...
            $table->unique(['ParentId', 'Name']);
        });

        // CHECK constraint: prevents a category from referencing itself (ParentId = Id)
        DB::statement("
            ALTER TABLE {$this->tableName}
            ADD CONSTRAINT chk_{$qualifiedTableName}_no_self_parent
            CHECK (ParentId IS NULL OR ParentId <> Id)
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists($this->tableName);
    }
};
