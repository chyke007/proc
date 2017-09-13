<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('subscription_id')->key();
            $table->uuid('iuc_no');
            $table->integer('package_id')->unsigned()->index();
            
            $table->string('subscription_amount');
            $table->string('start_time');
            $table->string('end_time');
            $table->foreign('package_id')->references('package_id')->on('packages')->onUpdate('cascade')->onDelete('cascade');
            
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
