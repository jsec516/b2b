<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::dropIfExists('post_types');
    	Schema::dropIfExists('posts');
    	
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
        	$t->text('description');
        	$t->decimal('cost', 13, 2);
        	$t->decimal('qty', 13, 2)->nullable();
        	$t->json('options')->nullable();
        	$t->foreign('post_type_id')->references('id')->on('post_types')->onDelete('cascade');
        	$t->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
        	$t->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
        
        	$t->unsignedInteger('public_id')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::dropIfExists('post_types');
    	Schema::dropIfExists('posts');
    }
}
