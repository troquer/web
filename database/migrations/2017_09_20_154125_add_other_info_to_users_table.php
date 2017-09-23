<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOtherInfoToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('area_id');
            $table->integer('area_id_2');
            $table->integer('area_id_3');
            $table->integer('skill_1');
            $table->integer('skill_2');
            $table->integer('skill_3');
            $table->integer('skill_4');
            $table->integer('skill_5');
            $table->integer('skill_6');
            $table->integer('skill_7');
            $table->integer('skill_8');
            $table->integer('want_skill');
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
