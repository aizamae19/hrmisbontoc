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
            $table->string('umid')->nullable()->after('tin');
            $table->string('spousesurname')->after('umid');
            $table->string('spousefirstname')->after('spousesurname');
            $table->string('spousemiddlename')->nullable()->after('spousefirstname');
            $table->string('occupation')->after('spousemiddlename');
            $table->string('businessname')->nullable()->after('occupation');
            $table->string('businessaddress')->nullable()->after('businessname');
            $table->string('telephone')->nullable()->after('businessaddress');
            $table->string('extension')->nullable()->after('telephone');
            $table->string('fathersurname')->after('extension');
            $table->string('fatherfirstname')->after('fathersurname');
            $table->string('fathermiddlename')->nullable()->after('fatherfirstname');
            $table->string('nameextension')->nullable()->after('fathermiddlename');
            $table->string('maidenname')->after('nameextension');
            $table->string('mothersurname')->after('maidenname');
            $table->string('motherfirstname')->after('mothersurname');
            $table->string('mothermiddlename')->nullable()->after('motherfirstname');
            $table->string('elementaryschool')->after('mothermiddlename');
            $table->string('secondaryschool')->after('elementaryschool');
            $table->string('vocationalschool')->nullable()->after('secondaryschool');
            $table->string('graduatestudies')->nullable()->after('vocationalschool');
            $table->string('secondarybasiceducation')->nullable()->after('graduatestudies');
            $table->string('vocationalbasiceducation')->nullable()->after('secondarybasiceducation');
            $table->string('collegebasiceducation')->nullable()->after('vocationalbasiceducation');
            $table->string('graduatestudiesbasiceducation')->nullable()->after('collegebasiceducation');
            $table->string('highestlevel')->nullable()->after('graduatestudiesbasiceducation');
            $table->string('yeargradelementary')->after('highestlevel');
            $table->string('yeargradsecondary')->after('yeargradelementary');
            $table->string('yeargradvocational')->nullable()->after('yeargradsecondary');
            $table->string('yeargradcollege')->nullable()->after('yeargradvocational');
            $table->string('yeargradstudies')->nullable()->after('yeargradcollege');
            $table->text('rating')->nullable()->after('yeargradstudies');
            $table->text('dateofexamination')->nullable()->after('rating');
            $table->text('placeofexamination')->nullable()->after('dateofexamination');
            $table->integer('licensenumber')->nullable()->after('placeofexamination');
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
