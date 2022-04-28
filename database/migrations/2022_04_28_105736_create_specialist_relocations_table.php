<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialistRelocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialist_relocations', function (Blueprint $table) {
            $table->id();
            $table->string('fio');
            $table->string('specialization');
            $table->string('skills');
            $table->string('prof_level');
            $table->string('link_portfolio')->nullable();
            $table->string('contact_number');
            $table->string('city');
            $table->string('employment');
            $table->string('file');
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
        Schema::dropIfExists('specialist_relocations');
    }
}
