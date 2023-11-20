<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('employees', function (Blueprint $table) {
        $table->dropUnique('employees_persontocontact_unique'); 
        $table->string('persontocontact')->unique()->change();  
        $table->dropUnique('employees_personalemail_unique'); 
        $table->string('personalemail')->unique()->change();
    });
}

public function down()
{
    Schema::table('employees', function (Blueprint $table) {
        $table->dropUnique('employees_persontocontact_unique');
        $table->string('persontocontact')->unique(false)->change();
        $table->dropUnique('employees_personalemail_unique');
        $table->string('personalemail')->unique(false)->change();
    });
}
};
