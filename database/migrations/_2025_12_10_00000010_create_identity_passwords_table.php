<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private string $tableName = 'identity.passwords';
    
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            // Columns...
            $table->uuid('Id')->default(DB::raw('NEWID()'));
            $table->string('Password', 255); // Hashed password
            $table->uuid('UserId'); // Usuário
            // Primary Key...
            $table->primary('Id');
            // Foreign Keys...
            $table->foreign('UserId')->references('Id')->on('identity.users');
            // Indexes...
            $table->index('UserId');
            // Unique Indexes...
            $table->unique(['UserId', 'Password']);
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