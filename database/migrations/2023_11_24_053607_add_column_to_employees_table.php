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
        Schema::table('employees', function (Blueprint $table) {
            $table->string('secondhighestlevel')->nullable()->after('secondaryschool');
            $table->string('vocationalhighestlevel')->nullable()->after('secondhighestlevel');
            $table->string('elemhighestlevel')->nullable()->after('vocationalhighestlevel');
            $table->string('elementarybasiceducation')->nullable()->after('elemhighestlevel');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            //
        });
    }
};
