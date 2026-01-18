<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private string $tableName = 'domain.accesses';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            // Columns...
            $table->uuid('DomainId'); // Domínio
            $table->uuid('UserId'); // Usuário
            $table->boolean('Reserved')->default(false); // Reservado

            // Primary Key...
            $table->primary(['DomainId', 'UserId']);

            // Foreign Keys...
            $table->foreign('DomainId')->references('Id')->on('domain.domains');
            $table->foreign('UserId')->references('Id')->on('identity.users');

            // Indexes...
            $table->index('DomainId');
            $table->index('UserId');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists($this->tableName);
    }
};
