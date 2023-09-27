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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('suffix')->nullable();
            $table->string('address');
            $table->string('maritalstatus');
            $table->date('dateofbirth');
            $table->string('gender');
            $table->string('bloodtype');
            $table->string('contactnumber')->unique();
            $table->string('persontocontact')->unique();
            $table->string('personalemail')->unique();
            $table->string('corporateemail')->unique();
            $table->string('course');
            $table->string('graduate');
            $table->string('csc');
            $table->date('dateofissuance');
            $table->date('dateofvalidity');
            $table->string('personnel');
            $table->string('status');
            $table->string('position');
            $table->date('dateofjoining');
            $table->date('dateofleaving');
            $table->date('dateofretirement');
            $table->string('salary');
            $table->string('step');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
