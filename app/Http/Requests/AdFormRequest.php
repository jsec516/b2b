<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Response;

class AdFormRequest extends FormRequest
{
	
	public function rules()
	{
		return [
			'title' => 'required'
		];
	}	
	
	public function authorize()
	{
		// Only allow logged in users
		// return \Auth::check();
		// Allows all users in
		return true;
	}
	
	// OPTIONAL OVERRIDE
	public function forbiddenResponse()
	{
		// Optionally, send a custom response on authorize failure
		// (default is to just redirect to initial page with errors)
		//
		// Can return a response, a view, a redirect, or whatever else
		Response::make('Permission denied foo!', 403);
	}
}
