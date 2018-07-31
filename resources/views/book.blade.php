{{-- resources/views/admin/book.blade.php --}}
@extends('master')

@section('title', 'News')

@section('content_header')
    <h1>《存在的意义》</h1>
	
@stop

@section('content')
    <div class="container">
	
		<div class="row book-intro" style=" font-size: 1.1rem">
		  <div class="col-md-3 book-image">
				<img src="{{ URL::asset('image/book-cover.jpg') }}">
		  </div>
		  <div class="col-md-6">
			<p>本书将用科学解释『为何我们存在于这世上』，用科学解开生命和存在的真相。 
			所谓的科学解释生命，是通过宇宙学、心理学等，来让世人知道我们的存在不过是宇宙间的小意外。
			我们因存在，而存在，并没有特别的意义。 诶，那你就觉得奇怪了吧！作者又说这是本激励书；
			结果又告诉我，活着是没有特定的意义？！ 重点来了，我们活着虽没有特定的
			 <span class="read-more"><a href="{{ url('/book/《存在的意义》') }}">更多</a></span></p>			
		  </div>
		</div>
		
		<div class="book-list by-line read-more">
		
		@foreach ($titles as $title)
				
			<h3><span class="badge badge-secondary">{{ $title->badge }}</span> <a href="{{ url($title->url) }}">{{ $title->name }}</a></h3>
			<h5>{{ $title->author }}</h5>
			<p>{{ $title->content }} <span class="read-more"><a href="{{ url($title->url) }}">更多</a></span></p>
			
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