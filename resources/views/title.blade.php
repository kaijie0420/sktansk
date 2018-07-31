{{-- resources/views/admin/title.blade.php --}}
@extends('master')

@section('title', 'News')

@section('content_header')
    <h1></h1>
	
@stop

@section('content')
    <div class="container">
		<div class="book-list by-line read-more">

			<h1><span class="badge badge-secondary">{{ $title->badge }}</span> {{ $title->name }}</h1>
			<h5>{{ $title->author }}</h5>
			<hr>
			<p>{!! $title->content !!}</p>
			
		</div>
	</div>
@stop

@section('css')
    <!--link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('js')
    <script></script>
@stop