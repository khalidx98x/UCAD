<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('department_name',50);
            $table->string('department_name_en',50);
            $table->float('department_key_gpa',4,2);
            $table->integer('department_credit_normal');
            $table->integer('department_credit_tr');
            $table->integer('grade_id')->unsigned();
            $table->integer('department_fail');
            $table->integer('department_zero_limit');
			$table->integer('department_volunteer');
			$table->integer('employee_id')->unsigned();
			$table->char('active',1)->default('1');
            $table->integer('department_code')->unique();
            $table->timestamps();

//            $table->foreign('employee_id')->references('id')->on('employees');
//            $table->foreign('grade_id')->references('id')->on('grades');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
