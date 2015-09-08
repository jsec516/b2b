@extends('layout.simple_header')
@section('content')
<div class="container-fluid bgf7f7f7">
	<div class="container pdt10">
		<div class="row">
			<div class="col-md-7 siginin-info">
				<h1 class="hig page-heading">{{ trans('texts.signin_heading') }}</h1>
				<p class="xlarge dac">The premier B2B marketplace, exploring more business opportunities online :</p>
				<ul class="large mt30">
					<li><i class="fa fa-arrow-circle-right hig"></i> Get your <strong>Company listed</strong> in our Yellow Pages.</li>
					<li><i class="fa fa-arrow-circle-right hig"></i> Your <strong>business classified</strong> will be shown in the Search results.</li>
					<li><i class="fa fa-arrow-circle-right hig"></i> Receive <strong>business queries</strong> from prospective customers.</li>
					<li><i class="fa fa-arrow-circle-right hig"></i> <strong>Send queries</strong> to business houses listed with ExportersIndia.com</li>
				</ul>
			</div>
			<div class="col-md-5">
				<div class="signin-form">
					<h1 class="hig page-heading mb20"><i class="fa fa-lock"></i> {{ trans('texts.login') }}</h1>
					{!! Former::vertical_open('login')->addClass('loginForm') !!}
					    {!! csrf_field() !!}
						{!! Former::populateField('email', old('email')) !!}
						{!! Former::email('email')->label(trans('texts.email_field')) !!}
						{!! Former::password('password')->label(trans('texts.password_field')) !!}
						{!! Former::checkbox('remember')->label(false)->text(trans('texts.remember_me_field')) !!}
						{!! Former::actions()->large_primary_submit( trans('texts.sign_in') ) !!}
					{!! Former::close() !!}
					<a class="hig b phelp" href="{{ url('password/email') }}">Password help?</a>
					<p class="pdt10 large b">{{ trans('texts.not_member_q') }}</p>
					<a class="btn btn-large btn-primary join-free-btn" href="{{ url('register') }}">{{ trans('texts.register') }}</a>
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center pdb20">
				<img src="{{ asset('uploads/ad/login.gif') }}" />
			</div>
		</div>
	</div>
</div>
@stop