@extends('layout.simple_header')
@section('content')
<div class="container pdt10">
	<div class="row">
		<div class="col-md-10">
			{!! Former::horizontal_open('register')->addClass('registerForm') !!}
			    {!! csrf_field() !!}
				{!! Former::populateField('email', old('email')) !!}
				<h1 class="page-heading hig">{{ trans('texts.login_info_heading') }}</h1>			
				{!! Former::email('email')->label(trans('texts.email_label')) !!}
				{!! Former::password('password')->label(trans('texts.password_label')) !!}
				{!! Former::password('c_password')->label(trans('texts.c_password_label')) !!}
				<h1 class="page-heading hig">{{ trans('texts.contact_info_heading') }}</h1>	
				{!! Former::text('name')->label(trans('texts.name_label')) !!}
				{!! Former::select('country')->label(trans('texts.country_label')) !!}
				{!! Former::text('mobile')->label(trans('texts.mobile_label')) !!}
				{!! Former::text('phone')->label(trans('texts.phone_label')) !!}
				<h1 class="page-heading hig">{{ trans('texts.business_info_heading') }}</h1>	
				{!! Former::text('company[name]')->label(trans('texts.company_name_label')) !!}
				{!! Former::textarea('address')->rows(10)->columns(20)->label(trans('texts.address_label')) !!}
				{!! Former::text('company[website]')->label(trans('texts.website_label')) !!}
				{!! Former::actions()->large_primary_submit('Submit') !!}
			{!! Former::close() !!}
		</div>
	</div>
</div>
@stop
