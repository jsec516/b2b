@extends('layout.master')

@section('body')
<div class="container-fluid bdrb">
	<div class="container">
		<section class="row">
			<div class="col-md-8 pdt10">
						<a href="{{ URL::to(APP_WEB_URL) }}" class="logo">
							Exporters Hub
						</a>
					</div>
				<div class="col-md-4 pdt10 text-right">
					<label class="hig nb">{{ trans('texts.call_us') }}</label> : {{ DIAL_NUMBER }}
					<p>{{ trans('texts.already_member_q') }} <a href="{{ $target_auth_url }}" class="btn bdr quick-btn" role="button"><i class="fa fa-user"></i> {{ $target_auth_text }}</a>
				</div>
				
		</section>
	</div>
</div>
@yield('content')
@stop