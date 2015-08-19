@extends('layout.master')
@section('body')
<div class="row">
	<div class="col-md-offset-4 col-md-4">
		{!! Former::open('login')->addClass('loginForm') !!}
		    {!! csrf_field() !!}
			{!! Former::populateField('email', old('email')) !!}
			{!! Former::email('email')->label(trans('texts.email_field')) !!}
			{!! Former::password('password')->label(trans('texts.password_field')) !!}
			{!! Former::checkbox('remember')->label(' ')->text(trans('texts.remember_me_field')) !!}
			{!! Former::actions()->large_primary_submit('Login') !!}
		{!! Former::close() !!}
	</div>
</div>
@stop