<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SimpleHeaderComposer
{
    protected $request;

    /**
     * Create a new header composer.
     *
     * @param  Request  $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
    	//Log::info($this->request->path());
    	$target_auth_url = 'login';
    	$target_auth_label = trans('texts.login'); 
    	if(strtolower($this->request->path())==='login'){
			$target_auth_url = 'register';
			$target_auth_label = trans('texts.register');    			
    	}
    	$view->with('target_auth_url', $target_auth_url);
    	$view->with('target_auth_text', $target_auth_label);
    }
}