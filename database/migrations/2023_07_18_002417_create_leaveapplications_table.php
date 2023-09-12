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
        Schema::create('leaveapplications', function (Blueprint $table) {
            $table->id();
            $table->string('employeename');
            $table->date('dateoffiling');
            $table->integer('positionid');
            $table->integer('leavenameid');
            $table->string('reason');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaveapplications');
    }
};
