<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private string $tableName = 'identity.users';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            // Columns...
            $table->uuid('Id')->default(DB::raw('NEWID()'));
            $table->string('Name', 255); // Nome de usuário
            $table->longText('Description'); // Descrição
            $table->boolean('AccountBlockedOut')->default(DB::raw(0)); // Conta Bloqueada
            $table->dateTime('AccountExpiresDate')->nullable(); // Data de Expiração da Conta
            $table->boolean('Reserved')->default(DB::raw(0)); // Reservado
            $table->string('Password', 255); // Senha
            $table->uuid('PersonId')->nullable(); // Pessoa

            // Primary Key...
            $table->primary('Id');

            // Foreign Keys...
            $table->foreign('PersonId')->references('Id')->on('person.naturals');

            // Indexes...
            $table->index('PersonId');

            // Unique Indexes...
            $table->unique('Name');
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
