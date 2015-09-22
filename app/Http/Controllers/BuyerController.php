<?php 

namespace App\Http\Controllers;


class BuyerController extends Controller
{
	public function getNew()
	{
		return view('buy.new');
	}	

	public function getIndex(){
		return view('buy.index');
	}
}