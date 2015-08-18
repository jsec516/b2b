@extends('master')

@section('body')
<div class="container">
	<header class="row header-container">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-5">
					<ul class="list-inline">
						<li>{{ trans('texts.top_greetings', ['user_role' => 'User!']) }}</li>
						<li><a href="{ url('login') }"><i class="fa fa-download"></i>&nbsp;{!! trans('texts.login') !!}</a></li>
						<li><a href="{ url('register') }"><i class="fa fa-user"></i>&nbsp;{!! trans('texts.register') !!}</a>
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
				
				</div>
				<div class="col-md-2 post-buy-lead">
				</div>
			</div>
		</div>
	</header>
	@yield('content')	
	<footer class="row footer">
	
	</footer>
</div>
@stop