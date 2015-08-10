<?php namespace App\Http\Controllers;

class AdController extends ItemController
{
	
	public function getNew(){
		$this->renderView = 'ad.new';
		$this->renderItemView();
	}
	
	public function postNew(){
	
	}
}