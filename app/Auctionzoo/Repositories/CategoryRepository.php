<?php namespace App\Auctionzoo\Repositories;

class CategoryRepository
{
	public function __construct()
	{
		
	}
	
	public function getCategories(){
		return range(1,12);
	}
}