<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description'); 
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('pet_type_id')->unsigned();
            $table->bigInteger('pet_size_id')->unsigned();
            $table->timestamps();
            

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->foreign('pet_type_id')->references('id')->on('pet_types')->onDelete('cascade');;
            $table->foreign('pet_size_id')->references('id')->on('pet_sizes')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_records');
    }
}
