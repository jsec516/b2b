<?php namespace App\Http\Controllers;

use App\Http\Requests\AuctionFormRequest;
class AuctionController extends ItemController
{
	
	public function getNew(){
		$this->renderView = 'auction.new';
		$this->renderItemView();
	}
	
	public function postNew(AuctionFormRequest $request){
		// do the stuff here
	}
}