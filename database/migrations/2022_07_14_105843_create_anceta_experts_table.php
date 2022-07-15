<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAncetaExpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anceta_experts', function (Blueprint $table) {
            $table->id();
            $table->integer('anceta_id');
            $table->integer('user_id');
            $table->integer('status')->default(2);
            $table->string('reject_reason')->nullable();
            $table->string('type');
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
        Schema::dropIfExists('anceta_experts');
    }
}
