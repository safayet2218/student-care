<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCounsellingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counselling', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_name');
            $table->string('student_roll');
            $table->string('semester');
            $table->string('reason');
            $table->string('action');
            $table->date('date');
            $table->text('subject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('counselling', function (Blueprint $table) {
            //
        });
    }
}
