@extends('layout.master')

@section('body')
<div class="container-fluid bdrb">
	<div class="container">
		<section class="row">
			<div class="col-md-5 pdt10">
					<ul class="list-inline auth-menu">
						<li>{{ trans('texts.user_greetings', ['user_role' => 'User!']) }}</li>
						<li><a class="no-u" href="{{ url('login') }}"><i class="fa fa-download"></i>&nbsp;{!! trans('texts.login') !!}</a></li>
						<li><a class="no-u" href="{{ url('register') }}"><i class="fa fa-user"></i>&nbsp;{!! trans('texts.register') !!}</a>
					</ul>
				</div>
				<div class="col-md-2 pdt10">
					<label class="hig nb">{{ trans('texts.call_us') }}</label> : +91-11-45679604
				</div>
				<div class="col-md-5">
					<ul class="nav nav-pills pull-right">
						<li><a href="">{{ trans('texts.buy_menu_text') }} <i class="fa fa-caret-down"></i></a></li>
						<li><a href="">{{ trans('texts.sell_menu_text') }} <i class="fa fa-caret-down"></i></a></li>
						<li><a href="">{{ trans('texts.advertise_menu_text') }} </a></li>
						<li><a href="">{{ trans('texts.help_menu_text') }} </a></li>
					</ul>
				</div>
		</section>
	</div>
</div>
<div class="container">
	<header class="row header-container">
		<div class="col-md-12">
			<div class="row pdt10">
				<div class="col-md-2">
					<a href="{{ URL::to(APP_WEB_URL) }}" class="logo">
						Exporters Hub
					</a>
				</div>
				<div class="col-md-8">
					{!! Former::horizontal_open()
  						->id('searchForm')
  						->secure()
  						->rules(['term' => 'required'])
  						->method('GET'); !!}
					<div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-search"></i></span>
					  <input type="text" class="form-control search-term" id="term" name="term" aria-label="seach term" placeholder="{!! trans('texts.search_form.term_placeholder') !!}" >
					  <span class="input-group-addon search-option">
					  	<output id="search-select-value">{{ trans('texts.nav.pr_or_ser') }}</output>
					  	<i class="fa fa-caret-down"></i>
					  </span>
					  <span class="input-group-addon search-btn">
					  	<input class="btn-large btn-primary btn" type="submit" value="{!! trans('texts.search_form.btn_text') !!}">
					  </span>
					</div>
					{!! Former::close() !!}
				</div>
				<div class="col-md-2 post-buy-lead">
					<a href="" class="btn-large btn-primary btn">{!! trans('texts.buy_lead_btn') !!}</a>
				</div>
			</div>
			<div class="row pdt10">
				<div class="col-md-12 large main-nav">
					{!! Navbar::withContent(Navigation::links([
						[
			       			'link' => URL::to(APP_WEB_URL),
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