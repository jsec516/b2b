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
	{{ HTML::style('css/bootstrap.css') }}
	@yield('head')
</head>
<body>
@yield('body')
<h1>Hello</h1>
{{ HTML::script('js/jquery-1.11.3.js') }}
{{ HTML::script('js/bootstrap.js') }}
</body>
