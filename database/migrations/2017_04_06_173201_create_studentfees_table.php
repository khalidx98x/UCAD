<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentfeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentfees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('semester_id')->unsigned();
            $table->integer('type');//toHim or fromHim
            $table->integer('feetype_id')->unsigned();
            $table->float('value', 4, 1);
            $table->integer('receipt_number')->nullable();//unique()
            $table->timestamps();

//            $table->foreign('student_id')->references('id')->on('back-end');
//            $table->foreign('semester_id')->references('id')->on('semesters');
//            $table->foreign('feetype_id')->references('id')->on('feetypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentfees');
    }
}
