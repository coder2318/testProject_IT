<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoundersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('founders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fio')->nullable();
            $table->date('date_birth')->nullable();
            $table->string('sex')->nullable();
            $table->string('citizen')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('passport_date')->nullable();
            $table->string('passport_expire')->nullable();
            $table->string('file4')->nullable();
            $table->string('adress')->nullable();
            $table->string('phone')->nullable();
            $table->string('company_name')->nullable();
            $table->string('additional_phone')->nullable();
            $table->string('file5')->nullable();
            $table->string('file2')->nullable();
            $table->string('visa_date')->nullable();
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
        Schema::dropIfExists('founders');
    }
}
