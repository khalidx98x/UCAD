<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semesters', function (Blueprint $table) {
            $table->increments('id');
			$table->char('semester_id',1);
            $table->string('year',9);
			$table->date('start_date');
			$table->date('end_add_date');
			$table->date('end_remove_date');
			$table->date('end_withdrawal_date');
            $table->date('final_date');
            $table->integer('minimumcharge')->default('6');
            $table->char('active',1)->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semesters');
    }
}
