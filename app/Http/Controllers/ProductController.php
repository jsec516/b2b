<?php namespace App\Http\Controllers;

class ProductController extends ItemController
{
	
	public function getNew(){
		$this->renderView = 'product.new';
		return $this->renderItemView();
	}
	
	public function postNew(){
	
	}
}