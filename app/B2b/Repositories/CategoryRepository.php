<?php namespace App\B2b\Repositories;

class CategoryRepository
{
	public function __construct()
	{
		
	}
	
	public function getCategories($limit=0){
		$limit = (int)$limit;
		return range(1,$limit);
	}
}