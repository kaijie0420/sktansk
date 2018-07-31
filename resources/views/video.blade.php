{{-- resources/views/admin/video.blade.php --}}
@extends('master')

@section('title', 'Video')

@section('content_header')
    <h1 style="margin-top: ; margin-bottom: ; margin-left: ; color: #333333; ">影片</h1>
	
@stop

@section('content')

    <!--header class="bg-light" -->
		<div class="d-flex  flex-wrap" style="width: 100%">
			<div class="p-2 video-grid" >
				<iframe src="https://www.youtube.com/embed/qgCObST5_ho"
    frameborder="0"  allowfullscreen></iframe>
			</div>
			<div class="p-2 video-grid" >
				<iframe src="https://www.youtube.com/embed/e3nsefG7S1c"
   frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="p-2 video-grid" >
				<iframe src="https://www.youtube.com/embed/8Rgh5bH1hko"
   frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="p-2 video-grid" >
				<iframe src="https://www.youtube.com/embed/yj4UW9oqeso"
   frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="p-2 video-grid" >
				<iframe src="https://www.youtube.com/embed/BsHdAg5eR00"
   frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="p-2 video-grid" >
				<iframe src="https://www.youtube.com/embed/-H0RfemoVw8"
   frameborder="0" allowfullscreen></iframe>
			</div>

			<!--div class="p-2" style="max-width: 70%">
				<iframe src="http://www.youtube.com/embed/W7qWa52k-nE"
   width="130%" height="" frameborder="0" allowfullscreen></iframe>
			</div-->
		</div>
		
		
    <!--/header-->
@stop

@section('css')
    <!--link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('js')
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<script src="{{ asset('js/jquery.tubber.js') }}"></script>

    <script>
	
	$('#example1-container').tubber({
	apiKey: 'AIzaSyC6mFq9O7HoxiKlOefhnBqWHi03of94wFA',
	username: 'youtube',
	itemsPerPage: 10,
	showVideoTitle: true,
});

	$('#example4-container').tubber({
	apiKey: 'AIzaSyC6mFq9O7HoxiKlOefhnBqWHi03of94wFA',
	playlistId: 'LLeej8hwdLKZMVcKDtavOiUg',
	itemsPerPage: 10,
	embedVideo: false,
	showVideoTitle: true,
	loadingControl: $('#example4-loading'),
	prevPageControl: $('#example4-prev-page'),
	nextPageControl: $('#example4-next-page'),
	mediaViewer: function (videoId) {
		$.fancybox.open({
			type: 'html',
			content: '<iframe width="720" height="405" src="https://www.youtube.com/embed/' + 'W7qWa52k-nE' + '?autoplay=1" frameborder="0" allowfullscreen></iframe>',
			padding: 0,
			helpers : {
		        overlay : {
		            css : {
		                'background' : 'rgba(0, 0, 0, .85)'
		            }
		        }
		    }
		});
	},

});

</script>
@stop