<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accountsettings', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2023_07_18_064213_create_attendances_table.php
            $table->string('personnel');
            $table->date('date');
            $table->time('am_in');
            $table->time('am_out');
            $table->time('pm_in');
            $table->time('pm_out');
=======
            $table->string('copyright');
            $table->string('email');
            $table->string('address');
            $table->string('contactnumber');
>>>>>>> origin/master:database/migrations/2023_11_14_013225_create_accountsettings_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accountsettings');
    }
};
