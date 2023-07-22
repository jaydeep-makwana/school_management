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
            $table->text('full_name');
            $table->text('address');
            $table->bigInteger('contact_no');
            $table->date('dob');
            $table->enum('gender',['M','F']);
            $table->text('qualification');
            $table->text('occupation');
            $table->text('counselling_by');
            $table->text('cast');
            $table->foreignId('course_id')->references('id')->on('courses');
            $table->text('authorization');
            $table->double('fees');
            $table->date('start_date');
            $table->date('end_date');
            $table->double('discount')->nullable();
            $table->text('discount_offer')->nullable();
            $table->time('start_batch_time');
            $table->time('end_batch_time');
            $table->double('net_fees');
            $table->date('join_date');
            $table->text('parent_name');
            $table->bigInteger('parent_contact');
            $table->text('parent_occupation');
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
