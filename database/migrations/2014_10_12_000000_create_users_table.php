<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::dropIfExists('countries');
    	Schema::dropIfExists('timezones');
    	Schema::dropIfExists('date_formats');
    	Schema::dropIfExists('datetime_formats');
    	Schema::dropIfExists('currencies');
    	Schema::dropIfExists('users');
    	
    	Schema::create('countries', function($table)
    	{
    		$table->increments('id');
    		$table->string('capital', 255)->nullable();
    		$table->string('citizenship', 255)->nullable();
    		$table->string('country_code', 3)->default('');
    		$table->string('currency', 255)->nullable();
    		$table->string('currency_code', 255)->nullable();
    		$table->string('currency_sub_unit', 255)->nullable();
    		$table->string('full_name', 255)->nullable();
    		$table->string('iso_3166_2', 2)->default('');
    		$table->string('iso_3166_3', 3)->default('');
    		$table->string('name', 255)->default('');
    		$table->string('region_code', 3)->default('');
    		$table->string('sub_region_code', 3)->default('');
    		$table->boolean('eea')->default(0);
    	});
    	
    	Schema::create('timezones', function($t)
    	{
    		$t->increments('id');
    		$t->string('name');
    		$t->string('location');
    	});
    	
    	Schema::create('date_formats', function($t)
    	{
    		$t->increments('id');
    		$t->string('format');
    		$t->string('picker_format');
    		$t->string('label');
    	});
    	
    	Schema::create('datetime_formats', function($t)
    	{
    		$t->increments('id');
    		$t->string('format');
    		$t->string('label');
    	});
    	
    	Schema::create('currencies', function($t)
    	{
    		$t->increments('id');
    	
    		$t->string('name');
    		$t->string('symbol');
    		$t->string('precision');
    		$t->string('thousand_separator');
    		$t->string('decimal_separator');
    		$t->string('code');
    	});
    	
    	Schema::create('accounts', function($t)
    	{
    		$t->increments('id');
    		$t->unsignedInteger('timezone_id')->nullable();
    		$t->unsignedInteger('date_format_id')->nullable();
    		$t->unsignedInteger('datetime_format_id')->nullable();
    		$t->unsignedInteger('currency_id')->nullable();
    	
    		$t->timestamps();
    		$t->softDeletes();
    	
    		$t->string('name')->nullable();
    		$t->string('ip');
    		$t->string('account_key')->unique();
    		$t->timestamp('last_login')->nullable();
    	
    		$t->string('address1')->nullable();
    		$t->string('address2')->nullable();
    		$t->string('city')->nullable();
    		$t->string('state')->nullable();
    		$t->string('postal_code')->nullable();
    		$t->unsignedInteger('country_id')->nullable();
    		$t->text('invoice_terms')->nullable();
    		$t->text('email_footer')->nullable();
    		$t->unsignedInteger('industry_id')->nullable();
    		$t->unsignedInteger('size_id')->nullable();
    	
    		$t->boolean('invoice_taxes')->default(true);
    		$t->boolean('invoice_item_taxes')->default(false);
    	
    		$t->foreign('timezone_id')->references('id')->on('timezones');
    		$t->foreign('date_format_id')->references('id')->on('date_formats');
    		$t->foreign('datetime_format_id')->references('id')->on('datetime_formats');
    		$t->foreign('country_id')->references('id')->on('countries');
    		$t->foreign('currency_id')->references('id')->on('currencies');
    		$t->foreign('industry_id')->references('id')->on('industries');
    		$t->foreign('size_id')->references('id')->on('sizes');
    	});
    	
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('confirmation_code')->nullable();
            $table->boolean('registered')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->integer('theme_id')->nullable();
            $table->rememberToken();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
