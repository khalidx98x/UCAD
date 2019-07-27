<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentpersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentpersonals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned()->default(21);
            $table->string('first_name_en',20);
            $table->string('second_name_en',20);
            $table->string('third_name_en',20);
            $table->string('fourth_name_en',20);
            $table->char('gender',1);
            $table->integer('ssn');
            $table->integer('mobile');
            $table->string('guardian',100);
            $table->string('guardian_type',20);
            $table->integer('guardian_mobile');
            $table->integer('home_phone');
            $table->integer('country_id')->unsigned();
            $table->date('dob');
            $table->integer('city_id')->unsigned();
            $table->integer('region_id')->unsigned();
            $table->string('street',250);
            $table->integer('healthstatus_id')->unsigned();
            $table->integer('socialstatus_id')->unsigned();
            $table->integer('religion_id')->unsigned();
            $table->integer('nationality')->unsigned();
            $table->string('image',150);
            $table->integer('specialneed_id')->unsigned();
            $table->integer('knowabout_id')->unsigned();
            $table->timestamps();

//            $table->foreign('student_id')->references('id')->on('back-end');
//            $table->foreign('country_id')->references('id')->on('countries');
//            $table->foreign('nationality')->references('id')->on('countries');
//            $table->foreign('city_id')->references('id')->on('cities');
//            $table->foreign('region_id')->references('id')->on('regions');
//            $table->foreign('healthstatus_id')->references('id')->on('healthstatuses');
//            $table->foreign('socialstatus_id')->references('id')->on('socialstatuses');
//            $table->foreign('religion_id')->references('id')->on('religions');
//            $table->foreign('specialneed_id')->references('id')->on('specialneeds');
//            $table->foreign('knowabout_id')->references('id')->on('knowabouts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentpersonals');
    }
}
