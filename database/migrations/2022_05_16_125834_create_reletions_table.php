<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReletionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('reletions', function (Blueprint $table) {
            $table->id();
            $table->string('reletion_level');
            $table->string('reletion_fio');
            $table->string('reletion_birth');
            $table->string('reletion_citizen');
            $table->string('file6');
            $table->integer('investor_id');
            $table->integer('founder_id');
            $table->integer('specialist_id');
            $table->integer('application_id');
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
        Schema::dropIfExists('reletions');
    }
}
