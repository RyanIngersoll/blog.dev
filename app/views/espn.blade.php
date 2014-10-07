@extends('layouts.master')

@section('title')
@stop

@section('top-script')

@stop


@section('bottom-script')
@stop

@section('content')

<h1>ESPN.com</h1>
<h2>the 24 HOUR sports network</h2>

@for ($i = 1; $i < 11; $i++)
	
	<h3> game: {{{ $i }}} </h3>
	<h2> home {{{ mt_rand(0, 48) }}} vs visitor {{{ mt_rand(0, 48) }}}.</h3>

@endfor



			
	


@stop