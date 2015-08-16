<!DOCTYPE html>
<html lang="en">
<head>
    <title>AuctionZoo | {{ isset($title) ? $title : ' ' . trans('texts.app_title') }}</title> 
    <meta name="description" content="{{ isset($description) ? $description : trans('texts.app_description') }}" />

    <!-- Source: https://github.com/jsec516/b2b -->
    <!-- Version: {{ AUCTIONZOO_VERSION }} -->

    <meta charset="utf-8">
    <meta property="og:site_name" content="AuctionZoo B2B" />
    <meta property="og:url" content="{{ SITE_URL }}" />
    <meta property="og:title" content="AuctionZoo B2B" />
    <meta property="og:image" content="{{ SITE_URL }}/images/social.jpg" />
    <meta property="og:description" content="Simple, Intuitive B2B." />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('favicon.png?test') }}" rel="shortcut icon">
	<link href="{{ asset('css/bootstrap.css') }}?no_cache={{ AUCTIONZOO_VERSION }}" rel="stylesheet" />
	<link href="{{ asset('css/jquery.dataTables.css') }}?no_cache={{ AUCTIONZOO_VERSION }}" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700,900|Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	<link href="{{ asset('css/app.css') }}?no_cache={{ AUCTIONZOO_VERSION }}" rel="stylesheet" />
	<script type="text/javascript" src="{{ asset('js/jquery-1.11.3.js') }}?no_cache={{ AUCTIONZOO_VERSION }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}?no_cache={{ AUCTIONZOO_VERSION }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}?no_cache={{ AUCTIONZOO_VERSION }}"></script>
	<script type="text/javascript">
		/* Set the defaults for DataTables initialisation */
	    $.extend( true, $.fn.dataTable.defaults, {
	        "bSortClasses": false,
	        "sDom": "t<'row'<'col-md-6'i><'col-md-6'p>>l",
	        "sPaginationType": "bootstrap",
	        "bInfo": true,
	        "oLanguage": {
	            'sEmptyTable': "{{ trans('texts.empty_table') }}",
	            'sLengthMenu': '_MENU_ {{ trans('texts.rows') }}',
	            'sSearch': ''
	        }
	    } );
	</script>	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	@yield('head')
</head>
<body>
@yield('body')
@yield('footer')
</body>
</html>