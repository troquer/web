<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeInfosNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->integer('area_id')->nullable()->change();
          $table->integer('area_id_2')->nullable()->change();
          $table->integer('area_id_3')->nullable()->change();
          $table->integer('skill_1')->nullable()->change();
          $table->integer('skill_2')->nullable()->change();
          $table->integer('skill_3')->nullable()->change();
          $table->integer('skill_4')->nullable()->change();
          $table->integer('skill_5')->nullable()->change();
          $table->integer('skill_6')->nullable()->change();
          $table->integer('skill_7')->nullable()->change();
          $table->integer('skill_8')->nullable()->change();
          $table->integer('want_skill')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
