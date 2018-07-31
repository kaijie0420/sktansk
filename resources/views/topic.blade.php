{{-- resources/views/admin/topic.blade.php --}}
@extends('master')

@section('title', '宽恒效应')

@section('content_header')
    <h1></h1>
	
@stop

@section('content')
    <div class="container">
		<div class="book-list by-line read-more">

			@foreach ($topics as $topic)
				
				<h3><a href="{{ url($topic->url) }}">{{ $topic->name }}</a></h3>
				<p>{{ $topic->content }} <span class="read-more"><a href="{{ url($topic->url) }}">更多</a></span></p>
				
				@if (!$loop->last)
					<hr>
				@endif
				
			@endforeach

		</div>
	</div>
@stop

@section('css')
    <!--link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('js')
    <script></script>
@stop