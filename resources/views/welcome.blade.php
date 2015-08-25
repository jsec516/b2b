@extends('layout.public')
@section('content')
<section class="row content">
	<article class="col-md-9">
		<h1 class="hig page-heading">{{ trans('texts.browse_categories_heading') }}</h1>
		<div class="row pdt10 categories">
			@each('partials.category', $categories, 'category')
			<div class="col-md-12">
				<a href="">{{ trans('texts.more_categories_link') }}</a>
			</div>
		</div>
	</article>
	<aside class="col-md-3">
		<section class="row bdr">
			<div class="col-md-12 b bdr intro-acc">
				<div class="row">
					<div class="col-md-3">
						<i class="fa fa-user"></i>
					</div>
					<div class="col-md-9">
						<h3 class="large  up">{{ trans('texts.user_greetings', ['user_role' => 'Guest!']) }}</h3>
						<p><a class="no-u" href="{{ url('register') }}">{{ trans('texts.join_us') }}</a> <b class="yellow">{{ trans('texts.free') }}</b> {{ trans('texts.or') }} <a class="no-u" href="{{ url('login') }}">{{ trans('texts.sign_in') }}</a> </p>
					</div>
				</div>
			</div>
			<!-- Nav tabs -->
		   <ul class="col-md-12 nav nav-tabs bsnav" role="tablist">
		     <li role="presentation" class="active"><a href="#forSupplier" aria-controls="forSupplier" role="tab" data-toggle="tab">{{ trans('texts.for_supplier') }}</a></li>
		     <li role="presentation"><a href="#forBuyer" aria-controls="forBuyer" role="tab" data-toggle="tab">{{ trans('texts.for_buyer') }}</a></li>
		   </ul>
			
		   <!-- Tab panes -->
		   <div class="col-md-12 tab-content bsnav-content">
		     <div role="tabpanel" class="tab-pane active" id="forSupplier">
		     	<ul>
		     		<li>
		     			<i class="fa fa-check-circle green"></i>
		     			<a class="dif" href="">Create your catalog FREE</a>
		     			<p>Join and Get your Free Catalog with ExportersIndia.com, advertise your products / sell offers and much more!</p>
		     		</li>
		     		<li>
		     			<i class="fa fa-check-circle green"></i>
		     			<a class="dif" href="">Advertise FREE</a>
		     			<p>Subscribe to our premium services, Get more Buyers Inquiries from all over the World.</p>
		     		</li>
		     	</ul>
		     </div>
		     <div role="tabpanel" class="tab-pane" id="forBuyer">
		    	<ul>
		     		<li>
		     			<i class="fa fa-check-circle green"></i>
		     			<a class="dif" href="">Post your Buy Requirement</a>
		     			<p>Get responses from pre-verified suppliers and manufacturers.</p>
		     		</li>
		     		<li>
		     			<i class="fa fa-check-circle green"></i>
		     			<a class="dif" href="">Search Products / Suppliers</a>
		     			<p>Search products and contact directly to the suppliers of your choice.</p>
		     		</li>
		     	</ul>
		     </div>
		   </div>
		</section>
		<section class="row">
			<h4>{{ trans('texts.paid_membership') }} <i class="fa fa-users"></i></h4>
			<ul class="col-md-12">
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</section>
		<section class="row">
			<div class="col-md-12">
				<h4>{{ trans('texts.advertise_area') }}</h4>
				<a href="">{{ trans('texts.book_banner') }}</a>
			</div>
			<div class="col-md-12 adv">
				<img src="{{ asset('uploads/ad/1.gif') }}" />
			</div>
		</section>
	</aside>
</section>
<section class="row">
	<div class="col-md-6">
		<h1>{{ trans('texts.featured_companies') }}</h1>
		<ul>
			<li>
				<i class="fa fa-angle-double-right" ></i><a href=""></a>
				<p></p>
			</li>
		</ul>
	</div>
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-8">{{ trans('texts.latest_buy_leads') }}</div>
			<div class="col-md-4">{{ trans('texts.view_more') }} <i class="fa fa-angle-double-right" ></i></div>
		</div>
		<ul>
			<li>
				<i class="fa fa-angle-double-right" ></i><a href=""></a>
				<p></p>
			</li>
		</ul>
	</div>
</section>
<section class="row">
	<h1>{{ trans('texts.featured_products') }}</h1>
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-1">
				<a href=""><i class="fa fa-angle-left"></i></a>
			</div>
			<ul class="col-md-10 list-inline">
				<li>
					<img src="" />
					<p><a href=""></a></p>
				</li>
				<li>
					<img src="" />
					<p><a href=""></a></p>
				</li>
				<li>
					<img src="" />
					<p><a href=""></a></p>
				</li>
			</ul>
			<div class="col-md-1">
				<a href=""><i class="fa fa-angle-right"></i></a>
			</div>
		</div>
	</div>
</section>
<section class="row">
	<div class="col-md-6">
		<div class="row">
			<mark> {{ trans('texts.general_links_header') }}</mark>
			<ul class="col-md-12">
			
			</ul>
		</div>
	</div>
	<div class="col-md-6">
		<div class="row">
			<mark> {{ trans('texts.business_links_header') }}</mark>
			<ul class="col-md-12">
			
			</ul>
		</div>
	</div>
</section>
@stop

