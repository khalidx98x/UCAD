<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudenthighschoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studenthighschools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned()->default(21);
            $table->integer('high_school_number');
            $table->integer('highschoolbranch_id')->unsigned();
            $table->integer('highschoolsource_id')->unsigned()->default(20);//dafualt(2);
            $table->string('high_school_name',100);
            $table->integer('high_school_year');
            $table->timestamps();
//
//            $table->foreign('student_id')->references('id')->on('back-end');
//            $table->foreign('highschoolbranch_id')->references('id')->on('highschoolbranches');
//            $table->foreign('highschoolsource_id')->references('id')->on('highschoolsources');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studenthighschools');
    }
}
