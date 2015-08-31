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
    	Schema::dropIfExists('payment_types');
    	Schema::dropIfExists('payment_terms');
    	Schema::dropIfExists('sizes');
    	Schema::dropIfExists('industries');
    	Schema::dropIfExists('themes');
    	Schema::dropIfExists('accounts');
    	Schema::dropIfExists('users');
    	Schema::dropIfExists('password_resets');
    	Schema::dropIfExists('post_types');
    	Schema::dropIfExists('posts');
    	
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
    	
    	Schema::create('payment_types', function($t)
    	{
    		$t->increments('id');
    		$t->string('name');
    	});
    	
    	Schema::create('payment_terms', function($t)
    	{
    		$t->increments('id');
    		$t->integer('num_days');
    		$t->string('name');
    	});
    	
    	Schema::create('sizes', function($t)
    	{
    		$t->increments('id');
    		$t->string('name');
    	});
    	
    	Schema::create('industries', function($t)
    	{
    		$t->increments('id');
    		$t->string('name');
    	});
    	
    	Schema::create('themes', function($t)
    	{
    		$t->increments('id');
    		$t->string('name');
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
    		$t->unsignedInteger('industry_id')->nullable();
    		$t->unsignedInteger('size_id')->nullable();
    	
    		$t->foreign('timezone_id')->references('id')->on('timezones');
    		$t->foreign('date_format_id')->references('id')->on('date_formats');
    		$t->foreign('datetime_format_id')->references('id')->on('datetime_formats');
    		$t->foreign('country_id')->references('id')->on('countries');
    		$t->foreign('currency_id')->references('id')->on('currencies');
    		$t->foreign('industry_id')->references('id')->on('industries');
    		$t->foreign('size_id')->references('id')->on('sizes');
    	});
    	
        Schema::create('users', function($t)
        {
            $t->increments('id');
            $t->unsignedInteger('account_id')->index();
            $t->timestamps();
            $t->softDeletes();

            $t->string('first_name')->nullable();
            $t->string('last_name')->nullable();
            $t->string('phone')->nullable();
            $t->string('email')->nullable();
            $t->string('password');
            $t->string('confirmation_code')->nullable();
            $t->boolean('registered')->default(false);
            $t->boolean('confirmed')->default(false);
            $t->integer('theme_id')->nullable();
            $table->string('remember_token', 100)->nullable();
            $t->boolean('notify_sent')->default(true);

            $t->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');

            $t->unsignedInteger('public_id')->nullable();
            $t->unique( array('account_id','public_id') );
        });
        
        Schema::create('password_resets', function($t)
        {
        	$t->string('email')->index();
        	$t->timestamps('created_at');
        
        	$t->string('token')->index();
        });
        
        Schema::create('post_types', function($t)
        {
        	$t->increments('id');
        	$t->timestamps();
        	$t->softDeletes();
        
        	$t->string('name');
        });
        
        Schema::create('posts', function($t)
        {
        	$t->increments('id');
        	$t->unsignedInteger('post_type_id')->index();
        	$t->unsignedInteger('account_id')->index();
        	$t->unsignedInteger('user_id');
        	$t->timestamps();
        	$t->softDeletes();
        
        	$t->string('title');
        	$t->text('notes');
        	$t->decimal('cost', 13, 2);
        	$t->decimal('qty', 13, 2)->nullable();
        
        	$t->foreign('post_type_id')->references('id')->on('post_types')->onDelete('cascade');
        	$t->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
        	$t->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
        
        	$t->unsignedInteger('public_id');
        	$t->unique( array('account_id','public_id') );
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
