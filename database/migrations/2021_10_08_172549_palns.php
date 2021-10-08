<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Palns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans',function (Blueprint $table){
           $table->increments('plan_id');
           $table->string('plan_title');
           $table->integer('plan_lmit_download_count');
           $table->integer('plan_price');
           $table->integer('plan_days_count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
