@extends('layout.simple_header')
@section('content')
<div class="container-fluid bgf7f7f7">
	<div class="container pdt10">
		<div class="row">
			<article class="col-md-9">
				<hgroup>
					<h1>{{ trans('texts.buy_lead.heading') }}</h1>
					<h2>{{ trans('texts.buy_lead.sub_heading') }}</h2>
				</hgroup>
				<br/>
				<h3><i class="fa fa-pencil"></i>&nbsp;{{ trans('texts.buy_lead.form_heading') }}</h3>
				{!! Former::horizontal_open('buy_lead')->addClass('new-buy-lead-form') !!}
			    {!! csrf_field() !!}
				{!! Former::populateField('email', old('email')) !!}
				{!! Former::text('title')->label(trans('texts.buy_lead.title_label')) !!}
				{!! Former::textarea('address')->rows(10)->columns(20)->label(trans('texts.address_label')) !!}
				{!! Former::email('email')->label(trans('texts.buy_lead.title_label')) !!}
				{!! Former::text('name')->label(trans('texts.name_label')) !!}
				{!! Former::text('company[name]')->label(trans('texts.company_name_label')) !!}
				{!! Former::select('country')->label(trans('texts.country_label')) !!}
				{!! Former::text('mobile')->label(trans('texts.mobile_label')) !!}
				{!! Former::actions()->large_primary_submit('Submit') !!}
			{!! Former::close() !!}
			</article>
			<aside class="col-md-3">
			
			</aside>
		</div>
	</div>
</div>
@stop
