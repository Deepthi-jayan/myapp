<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_last_name');
             $table->string('student_gender');
             $table->string('student_dob');
             $table->string('student_email');
             $table->string('student_mobile');
             $table->string('student_password');
             $table->string('student_address');
             $table->string('student_city');
             $table->string('student_state');
             $table->unsignedBigInteger('student_class_id');
             $table->foreign('student_class_id')->references('id')->on('class');
            $table->unsignedBigInteger('student_division_id');
            $table->foreign('student_division_id')->references('id')->on('division');

            





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
        Schema::dropIfExists('student');
    }
}
