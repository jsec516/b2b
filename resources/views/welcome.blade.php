@extends('layout.public')
@section('content')
<div class="container-fluid pdb20">
	<div class="container">
		<section class="row content">
			<article class="col-md-9">
				<h1 class="hig page-heading">{{ trans('texts.browse_categories_heading') }}</h1>
				<div class="row pdt10 categories">
					@each('partials.category', $categories, 'category')
					<div class="col-md-12 mt30 more-cat">
						<a class="xlarge b" href="">{{ trans('texts.more_categories_link') }}</a>
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
				<section class="row pdt10 adv-container">
					<div class="col-md-12">
						<label class="dac">{{ trans('texts.advertise_area') }}</label>
						<a class="pull-right" href="">{{ trans('texts.book_banner') }}</a>
					</div>
					@for ($i = 1; $i < 5; $i++)
					<div class="col-md-12 pdt10 adv">
						<img src='{{ asset("uploads/ad/default.jpg") }}' />
					</div>
					@endfor
				</section>
				<section class="row bdr mt10 ms-pnl">
					<div class="col-md-12 xlarge">
						<label>{{ trans('texts.paid_membership') }} </label>&nbsp;<i class="fa fa-users"></i>
					</div>
					<ul class="col-md-12 large b bdrb banner">
						<li><i class="fa fa-arrow-circle-right"></i>&nbsp;Display Unlimited Products</li>
						<li><i class="fa fa-arrow-circle-right"></i>&nbsp;Post Your Buy Lead/Sell Lead</li>
						<li><i class="fa fa-arrow-circle-right"></i>&nbsp;Send Business Promotional Messages</li>
						<li><i class="fa fa-arrow-circle-right"></i>&nbsp;Boost Your Sale Inquiries 4 times</li>
					</ul>
					<a class="pull-right dac no-u pdr5" href="">Become paid Member <i class="fa fa-angle-double-right"></i></a>
				</section>
			</aside>
		</section>
	</div>
</div>

<div class="container-fluid bgf7f7f7 pdt20 pdb20">
	<div class="container">
		<section class="row">
			<div class="col-md-6 featured">
				<div class="inner">
					<h1 class="page-heading">{{ trans('texts.featured_companies') }}</h1>
					<ul>
						@for($i=0; $i<4; $i++)
						<li>
							<i class="fa fa-angle-double-right" ></i>&nbsp;<a href="">Basudev Stones</a>
							<p>(Sandstone Elephant Statues, Sandstone Apsara Statue 05, Sandstone Buddha Statue)</p>
						</li>
						@endfor
					</ul>
				</div>
			</div>
			<div class="col-md-6 featured">
				<div class="inner">
					<a class="dac pdt10 pdr5 pull-right">{{ trans('texts.view_more') }} <i class="fa fa-angle-double-right" ></i></a>
					<h1 class="page-heading">{{ trans('texts.latest_buy_leads') }}</h1>
					<ul class="f16">
						@for($i=0; $i<4; $i++)
						<li>
							<i class="fa fa-angle-double-right" ></i>&nbsp;<a href="">Basudev Stones <b>- dhaka </b><figure class="flag bd"></figure></a>
							<p>(Sandstone Elephant Statues, Sandstone Apsara Statue 05, Sandstone Buddha Statue)</p>
						</li>
						@endfor
					</ul>
				</div>
			</div>
		</section>
	</div>
</div>
<div class="container-fluid pdt20 pdb20">
	<div class="container">
		<section class="row">
			<div class="col-md-12 featured products">
				<h1 class="page-heading">{{ trans('texts.featured_products') }}</h1>
				<div class="row">
					<div class="col-md-1 left-nav">
						<i class="fa fa-angle-left"></i>
					</div>
					<ul class="col-md-10 list-inline">
						@for($i=1;$i<6;$i++)
						<li>
							<img src='{{ asset("uploads/product/$i.jpg") }}' />
							<p><a href="">Stack Emission Monitoring</a></p>
						</li>
						@endfor
					</ul>
					<div class="col-md-1 right-nav">
						<i class="fa fa-angle-right"></i>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<div class="container-fluid bgee bdrt">
	<div class="container">
		<section class="row pdt10 pdb20 top-footer">
			<div class="col-md-6">
				<div class="row bdrd">
					<mark class="col-md-12 b hig large"> {{ trans('texts.general_links_header') }}</mark>
					<ul class="col-md-6">
						<li><i class="fa fa-angle-right"></i>&nbsp;<a href="">Home</a></li>
						<li><i class="fa fa-angle-right"></i>&nbsp;<a href="">About Us</a></li>
						<li><i class="fa fa-angle-right"></i>&nbsp;<a href="">Advertise with Us</a></li>
					</ul>
					<ul class="col-md-6">
						<li><i class="fa fa-angle-right"></i>&nbsp;<a href="">Contact Us</a></li>
						<li><i class="fa fa-angle-right"></i>&nbsp;<a href="">Feedback</a></li>
						<li><i class="fa fa-angle-right"></i>&nbsp;<a href="">Terms of Use</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row bdrd">
					<mark class="col-md-12 b hig large"> {{ trans('texts.trade_links_header') }}</mark>
					<ul class="col-md-12">
						<li><i class="fa fa-angle-right"></i>&nbsp;<a href="">Buy Offers</a></li>
						<li><i class="fa fa-angle-right"></i>&nbsp;<a href="">Post Buy Requirement</a></li>
						<li><i class="fa fa-angle-right"></i>&nbsp;<a href="">Post Products - FREE</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">
					<mark class="col-md-12 b hig large"> {{ trans('texts.business_links_header') }}</mark>
					<ul class="col-md-12">
						<li><i class="fa fa-angle-right"></i>&nbsp;<a href="">Manufacturers</a></li>
						<li><i class="fa fa-angle-right"></i>&nbsp;<a href="">Exporters</a></li>
						<li><i class="fa fa-angle-right"></i>&nbsp;<a href="">Service Providers</a></li>
					</ul>
				</div>
			</div>
		</section>
	</div>
</div>
@stop

