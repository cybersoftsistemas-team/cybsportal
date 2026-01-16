<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private string $tableName = 'general.categories';
    
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            // Columns...
            $table->uuid('Id')->default(DB::raw('NEWID()'));
            $table->string('Name', 255);
            $table->boolean('Reserved')->default(false);
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
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists($this->tableName);
    }
};
