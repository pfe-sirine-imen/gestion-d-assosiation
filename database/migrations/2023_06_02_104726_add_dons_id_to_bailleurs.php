<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDonsIdToBailleurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bailleurs', function (Blueprint $table) {
            $table->string('dons_id');
            $table->foreign('dons_id')->references('id')->on('dons');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bailleurs', function (Blueprint $table) {
            //
        });
    }
}
