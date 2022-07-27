<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsShowedColumnsToInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('investors', function (Blueprint $table) {
            $table->boolean('is_showed')->default(false);
        });
        Schema::table('founders', function (Blueprint $table) {
            $table->boolean('is_showed')->default(false);
        });
        Schema::table('specialist_visas', function (Blueprint $table) {
            $table->boolean('is_showed')->default(false);
        });
        Schema::table('companies', function (Blueprint $table) {
            $table->boolean('is_showed')->default(false);
        });
        Schema::table('specialist_relocations', function (Blueprint $table) {
            $table->boolean('is_showed')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('investors', function (Blueprint $table) {
            $table->dropColumn('is_showed');
        });
        Schema::table('founders', function (Blueprint $table) {
            $table->dropColumn('is_showed');
        });
        Schema::table('specialist_visas', function (Blueprint $table) {
            $table->dropColumn('is_showed');
        });
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('is_showed');
        });
        Schema::table('specialist_relocations', function (Blueprint $table) {
            $table->dropColumn('is_showed');
        });
    }
}
