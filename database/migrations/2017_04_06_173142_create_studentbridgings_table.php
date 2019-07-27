<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentbridgingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentbridgings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned()->default(21);
            $table->string('university_name',100);
            $table->integer('graduate_year');
            $table->string('college',100);
            $table->string('department',100);
            $table->float('gpa',4,2);
            $table->string('com_exam',50);
            $table->timestamps();

//            $table->foreign('student_id')->references('id')->on('back-end');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentbridgings');
    }
}
