{{-- resources/views/admin/topic_details.blade.php --}}
@extends('master')

@section('title', '宽恒效应')

@section('content_header')
    <h1></h1>
	
@stop

@section('content')
    <div class="container">
		<div class="book-list by-line read-more">
			<h1>{{ $topic->name }}</h1>
			<br>
			<p>{!! $topic->content !!}</p>
		</div>
	</div>
@stop

@section('css')
    <!--link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('js')
    <script></script>
@stop