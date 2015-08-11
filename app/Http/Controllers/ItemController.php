<?php namespace App\Http\Controllers;

class ItemController extends Controller
{
	protected $renderView;
	
	/*protected function getNew()
	{
		
	}
	
	protected function postNew()
	{
	
	}*/
	
	protected function renderItemView(){
		return $this->renderView;
	}
}
