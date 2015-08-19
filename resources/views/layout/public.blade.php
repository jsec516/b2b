@extends('layout.master')

@section('body')
<div class="container">
	<header class="row header-container">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-5">
					<ul class="list-inline">
						<li>{{ trans('texts.top_greetings', ['user_role' => 'User!']) }}</li>
						<li><a href="{{ url('login') }}"><i class="fa fa-download"></i>&nbsp;{!! trans('texts.login') !!}</a></li>
						<li><a href="{{ url('register') }}"><i class="fa fa-user"></i>&nbsp;{!! trans('texts.register') !!}</a>
					</ul>
				</div>
				<div class="col-md-2">
					<label>{{ trans('texts.call_us') }}</label> : +91-11-45679604
				</div>
				<div class="col-md-5">
					<ul class="list-inline pull-right">
						<li><a href="">{{ trans('texts.buy_menu_text') }} <i class="fa fa-caret-down"></i></a></li>
						<li><a href="">{{ trans('texts.sell_menu_text') }} <i class="fa fa-caret-down"></i></a></li>
						<li><a href="">{{ trans('texts.advertise_menu_text') }} </a></li>
						<li><a href="">{{ trans('texts.help_menu_text') }} </a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 logo">
					<a href="{{ URL::to(AUCTIONZOO_WEB_URL) }}">
				    	<img src="{{ asset('images/logo.png') }}" style="height:18px;width:auto"/>
					</a>
				</div>
				<div class="col-md-8">
					{!! Former::horizontal_open()
  						->id('searchForm')
  						->secure()
  						->rules(['term' => 'required'])
  						->method('GET'); !!}
					<ul class="list-inline">
						<li><i class="fa fa-search"></i></li>
						<li><input required="true" class="form-control" placeholder="{!! trans('texts.search_form.term_placeholder') !!}" id="term" type="text" name="term"></li>
						<li><input class="btn-large btn-primary btn" type="submit" value="{!! trans('texts.search_form.btn_text') !!}"></li>
					</ul>
					{!! Former::close() !!}
				</div>
				<div class="col-md-2 post-buy-lead">
					<a href="" class="btn-large btn-primary btn">{!! trans('texts.buy_lead_btn') !!}</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 large">
					{!! Navbar::withContent(Navigation::links([
						[
			       			'link' => URL::to(AUCTIONZOO_WEB_URL),
			          		'title' => '<i class="fa fa-home"></i> '.trans('texts.nav.home')
			       		],
			       		[
			                'link' => route('products'),
			                'title' => trans('texts.nav.pr_or_ser')
			            ],
			            [
			                'link' => route('companies'),
			                'title' => trans('texts.nav.companies')
			            ],
			            [
			                'link' => route('buyers'),
			                'title' => trans('texts.nav.buy_lead')
			            ]
					]))->withContent('<ul class="nav navbar-nav navbar-right"><li><a href="">'. trans("texts.hot_regions"). '</a></li></ul>') !!}
				</div>
			</div>
		</div>
	</header>
	@yield('content')	
	<footer class="row footer">
	
	</footer>
</div>
@stop