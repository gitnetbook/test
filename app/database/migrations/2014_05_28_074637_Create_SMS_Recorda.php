<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSMSRecorda extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sms_records', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('customer_sms_id');
			$table->integer('package_id');
			$table->string('phone_number');
			$table->text('text');
			$table->string('line');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sms_records');
	}

}
