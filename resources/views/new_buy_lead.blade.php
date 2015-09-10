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
				{!! Former::text('title')->paceholder(trans('texts.buy_lead.title_label_ph')->label(trans('texts.buy_lead.title_label')) !!}
				{!! Former::textarea('description')->rows(10)->columns(20)->paceholder(trans('texts.buy_lead.description_label_ph')->label(trans('texts.buy_lead.description_label')) !!}
				{!! Former::email('email')->label(trans('texts.buy_lead.email_label')) !!}
				{!! Former::text('contact')->label(trans('texts.buy_lead.contact_label')) !!}
				{!! Former::text('company_name')->label(trans('texts.company_name_label')) !!}
				{!! Former::select('country')->label(trans('texts.country_label')) !!}
				{!! Former::text('city')->label(trans('texts.city_label')) !!}
				{!! Former::text('mobile')->label(trans('texts.mobile_label')) !!}
				{!! Former::actions()->large_primary_submit('Submit') !!}
			{!! Former::close() !!}
			</article>
			<aside class="col-md-3">
				<h1>{{ trans('texts.buy_lead.adv.heading') }}</h1>
				<ul>
					<li>
						<i class="fa fa-comments"></i>
						<div>
							<p>{{ trans('texts.buy_lead.adv.imd_resp_h') }}</p>
							<p>{{ trans('texts.buy_lead.adv.imd_resp_d') }}</p>
						</div>
					</li>
					<li>
						<i class="fa fa-users"></i>
						<div>
							<p>{{ trans('texts.buy_lead.adv.gs_h') }}</p>
							<p>{{ trans('texts.buy_lead.adv.gs_d') }}</p>
						</div>
					</li>
					<li>
						<i class="fa fa-clone"></i>
						<div>
							<p>{{ trans('texts.buy_lead.adv.mc_h') }}</p>
							<p>{{ trans('texts.buy_lead.adv.mc_d') }}</p>
						</div>
					</li>
				</ul>
			</aside>
		</div>
	</div>
</div>
@stop
