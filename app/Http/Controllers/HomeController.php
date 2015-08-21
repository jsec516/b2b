<?php namespace App\Http\Controllers;

use App\Auctionzoo\Repositories\CategoryRepository;
class HomeController extends Controller
{
	public function showIndex(CategoryRepository $categories)
	{
		return view('welcome', ['categories'=>$categories->getCategories()]);
	}	
}
