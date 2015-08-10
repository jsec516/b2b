<?php namespace App\Http\Controllers;

class AuctionController extends ItemController
{
	
	public function getNew(){
		$this->renderView = 'auction.new';
		$this->renderItemView();
	}
	
	public function postNew(){
	
	}
}