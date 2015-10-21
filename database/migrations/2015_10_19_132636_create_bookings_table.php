<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_firstname');
            $table->string('customer_lastname');
            $table->string('email');
            $table->string('phone');
            $table->integer('guests')->unsigned()->default(1);
            $table->boolean('status')->default(0);
            $table->dateTime('booked_time');
            $table->integer('timeslots')->unsigned();
            $table->integer('treatment_id')->unsigned();
            $table->integer('total')->unsigned()->default(0);
            $table->string('transaction_id')->nullable()->default(null);
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
		Schema::drop('bookings');
	}

}
