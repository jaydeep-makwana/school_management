<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('id');
            $table->string('Full_Name');
            $table->text('Address');
            $table->bigInteger('Contact_No');
            $table->date('DOB');
            $table->enum('gender',['M','F']);
            $table->string('Qualification');
            $table->string('Occupation');
            $table->string('Counselling_By');
            $table->foreignId('course_id')->references('id')->on('courses');
            $table->string('Authorisation');
            $table->integer('Fees');
            $table->date('start');
            $table->date('end');
            $table->integer('Discount')->nullable();
            $table->string('Discount_Offer')->nullable();
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('Net_Fees');
            $table->date('Join_Date');
            $table->string('parent_Name');
            $table->bigInteger('parent_Contact');
            $table->string('parent_Occupation');
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
        Schema::dropIfExists('students');
    }
}
