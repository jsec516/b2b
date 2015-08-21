@extends('layout.public')
@section('content')
<div class="row content">
	<div class="col-md-12">
		<h1 class="hig page-heading">{{ trans('texts.browse_categories_heading') }}</h1>
		<div class="row">
			<div class="col-md-9">
				@each('partials.category', $categories, 'category')
			</div>
			<div class="col-md-3">
			
			</div>
		</div>
	</div>
</div>
@stop