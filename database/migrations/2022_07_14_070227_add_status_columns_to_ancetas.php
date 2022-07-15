<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusColumnsToAncetas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('specialist_visas', function (Blueprint $table) {
            $table->integer('status')->default(1);
            $table->string('reject_reason')->nullable();
        });
        Schema::table('investors', function (Blueprint $table) {
            $table->integer('status')->default(1);
            $table->string('reject_reason')->nullable();
        });
        Schema::table('founders', function (Blueprint $table) {
            $table->integer('status')->default(1);
            $table->string('reject_reason')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specialist_visas', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->string('reject_reason')->nullable();

        });
        Schema::table('investors', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->string('reject_reason')->nullable();

        });
        Schema::table('founders', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->string('reject_reason')->nullable();

        });
    }
}
