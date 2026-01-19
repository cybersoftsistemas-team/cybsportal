<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private string $tableName = 'identity.settings';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            // Columns...
            $table->uuid('UserId');
            $table->uuid('OptionId');
            $table->boolean('Checked')->default(DB::raw(0));

            // Primary Key...
            $table->primary(['UserId', 'OptionId']);

            // Foreign Keys...
            $table->foreign('OptionId')->references('Id')->on('identity.options');
            $table->foreign('UserId')->references('Id')->on('identity.users');

            // Indexes...
            $table->index('OptionId');
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
