<?php namespace App\Http\Controllers;

use App\Http\Requests\ProductFormRequest;
class ProductController extends ItemController
{
	
	public function getNew(){
		$this->renderView = 'product.new';
		return $this->renderItemView();
	}
	
	public function postNew(ProductFormRequest $request){
	
	}
}