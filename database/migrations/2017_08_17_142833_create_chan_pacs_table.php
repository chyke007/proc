<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChanPacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chan_pacs', function (Blueprint $table) {
            $table->increments('link_id')->key();
            $table->integer('package_id')->unsigned()->index();
            $table->integer('channel_id')->unsigned()->index();
             $table->foreign('package_id')->references('package_id')->on('packages')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('channel_id')->references('channel_id')->on('channels')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('chan_pacs');
    }
}
