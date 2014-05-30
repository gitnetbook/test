<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSMSPackages extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sms_packages', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('provider_id');
			$table->bigInteger('customer_package_id');
			$table->text('text');
			$table->string('line');
			$table->text('options');
			$table->tinyInteger('package_type');
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
		Schema::drop('sms_packages');
	}

}
