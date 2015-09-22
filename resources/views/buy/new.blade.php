@extends('layout.simple_header')
@section('content')
<div class="container-fluid bgf7f7f7">
	<div class="container pdt10">
		<div class="row">
			<article class="col-md-9">
				<hgroup>
					<h1 class="hig tsd">{{ trans('texts.buy_lead.heading') }}</h1>
					<h2 class="b tsd">{{ trans('texts.buy_lead.sub_heading') }}</h2>
				</hgroup>
				<br/>
				<h3 class="bgee hig tsd pd10 xxlarge mb20"><i class="fa fa-pencil"></i>&nbsp; {{ trans('texts.buy_lead.form_heading') }}</h3>
				{!! Former::horizontal_open('buy_lead')->addClass('new-buy-lead-form dul') !!}
			    {!! csrf_field() !!}
				{!! Former::populateField('email', old('email')) !!}
				{!! Former::text('title')->placeholder(trans('texts.buy_lead.title_label_ph'))->label(trans('texts.buy_lead.title_label')) !!}
				{!! Former::textarea('description')->rows(3)->columns(20)->placeholder(trans('texts.buy_lead.description_label_ph'))->label(trans('texts.buy_lead.description_label')) !!}
				{!! Former::email('email')->label(trans('texts.buy_lead.email_label')) !!}
				{!! Former::text('contact')->label(trans('texts.buy_lead.contact_label')) !!}
				{!! Former::text('company.name')->name('company[name]')->id('companyName')->label(trans('texts.company_name_label')) !!}
				{!! Former::select('country')->label(trans('texts.country_label')) !!}
				{!! Former::text('city')->label(trans('texts.city_label')) !!}
				{!! Former::text('mobile')->label(trans('texts.mobile_label')) !!}
				
				{!! Former::actions( Button::primary('Submit')->withAttributes(['class' => 'bdr bgdark2 white no-hover'])->submit() ) !!}
			{!! Former::close() !!}
			</article>
			<aside class="col-md-3 bdr br5 bgfff xlarge pd20">
				<h1 class="bdrb pdb7">{{ trans('texts.buy_lead.adv.heading') }}</h1>
				<br/>
				<ul class="adv ac-mt20  cclear fc-mt0 ac-bdrt fc-btw0 dashed ac-pdt20 fc-pdt0">
					<li>
						<i class="fa fa-comments bgsilver xxxlarge"></i>
						<div class="desc">
							<p class="hig large b mb5">{{ trans('texts.buy_lead.adv.imd_resp_h') }}</p>
							<p>{{ trans('texts.buy_lead.adv.imd_resp_d') }}</p>
						</div>
					</li>
					<li>
						<i class="fa fa-users  bgsilver xxxlarge"></i>
						<div class="desc">
							<p  class="hig large b mb5">{{ trans('texts.buy_lead.adv.gs_h') }}</p>
							<p>{{ trans('texts.buy_lead.adv.gs_d') }}</p>
						</div>
					</li>
					<li>
						<i class="fa fa-clone  bgsilver xxxlarge"></i>
						<div class="desc">
							<p class="hig large b mb5">{{ trans('texts.buy_lead.adv.mc_h') }}</p>
							<p>{{ trans('texts.buy_lead.adv.mc_d') }}</p>
						</div>
					</li>
				</ul>
			</aside>
		</div>
	</div>
</div>
@endsection
