<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private string $tableName = 'registration.customer';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            // Columns...
            $table->integer('Id')->default(DB::raw(1));
            $table->uuid('CustomerId');
            $table->uuid('ClientId');
            $table->dateTime('CreatedAt')->default(DB::raw('GETDATE()'));

            // Primary Key...
            $table->primary('Id');

            // Foreign Keys...
            $table->foreign('CustomerId')->references('Id')->on('person.persons');

            // Indexes...
            $table->index('ClientId');
            $table->index('CustomerId');
        });

        // Constraints...
        DB::statement("
            ALTER TABLE {$this->tableName}
            ADD CONSTRAINT chk_registration_customer_singleton
            CHECK (Id = 1)
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
