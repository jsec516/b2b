@extends('layout.public')
@section('content')
<div class="container-fluid pdb20">
	<div class="container">
		<h1>{{ trans('texts.buyers.heading') }}</h1>
		<p>{{ trans('texts.buyers.heading_desc') }}</p>
		<h1>{{ trans('texts.buyers.industry_heading') }}</h1>
		<ul class="row">
			<li class="col-md-3">
				<a href="">Agriculture</a>
			</li>
			<li class="col-md-3">
				<a href="">Agriculture</a>
			</li>
			<li class="col-md-3">
				<a href="">Agriculture</a>
			</li>
			<li class="col-md-3">
				<a href="">Agriculture</a>
			</li>
			<li class="col-md-3">
				<a href="">Agriculture</a>
			</li>
			<li class="col-md-3">
				<a href="">Agriculture</a>
			</li>
		</ul>
		<div class="row">
			<div class="col-md-12">
				<a href=""><img src="{{ asset('uploads/ad/choose-your-buyer.gif') }}" /></a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h1>{{ trans('texts.buyers.bo_heading') }}</h1>
			</div>
			<div class="col-md-12">
				<ul class="row f16">
					<li class="col-md-6">
						<p>
							<a href="">3d bedsheets</a>
							<a href=""><span class="badge"><i class="fa fa-check-circle-o"></i>Verified</span></a>
						</p>
						<p>
							Quantity: 300 Tons
							We have requirement for Coconut Shell.we need this product for reselling purpose with in week monthly Supplier can contact....
						</p>
						<p>
							<b>{{ trans('texts.buyers.location') }} </b> : Dhaka, Bangladesh <span class="flag bd"></span>
						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection