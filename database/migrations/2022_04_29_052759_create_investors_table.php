<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fio');
            $table->date('date_birth');
            $table->string('sex');
            $table->string('citizen');
            $table->string('passport_number');
            $table->string('passport_date');
            $table->string('passport_expire');
            $table->string('file4');
            $table->string('adress');
            $table->string('phone');
            $table->string('additional_phone');
            $table->string('file5');
            $table->string('project');
            $table->longText('activity');
            $table->string('file');
            $table->string('file2');
            $table->string('file3');
            $table->string('applicant_fio');
            $table->string('applicant_position');
            $table->string('applicant_phone_number');
            $table->string('visa_date');
            $table->string('conditions')->nullable();
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
        Schema::dropIfExists('investors');
    }
}
