<?php 

namespace App\Http\Controllers;


class BuyController extends Controller
{
	public function getNew()
	{
		return view('buy.new');
	}	
}