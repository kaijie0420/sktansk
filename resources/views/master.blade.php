<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title_prefix', config('adminlte.title_prefix', ''))
@yield('title', config('adminlte.title', 'AdminLTE 2'))
@yield('title_postfix', config('adminlte.title_postfix', ''))</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/themes/black-tie/jquery-ui.css">
	<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition @yield('body_class')">

	
	<!--header class="main-header">

    </header-->
	<header>
		<div class="main-header">
		
		
		
		<div class="container">
			<div class="top-banner">
			<img src="{{ URL::asset('image/logo-rsized.png') }}" class="img-fluid banner-img" alt="logo">
      </div>
	  <!--
        <ul class="list-inline list-social" style="float: right">
          <li class="list-inline-item social-facebook" style="background-color: white">
            <a href="https://www.facebook.com/SKsksci/">
              <i class="fa fa-facebook-square" style="font-size: 30px;"></i>
            </a>
          </li>
          <li class="list-inline-item social-youtube">
            <a href="https://www.youtube.com/channel/UCeej8hwdLKZMVcKDtavOiUg?view_as=subscriber">
              <i class="fa fa-youtube"></i>
            </a>
          </li>
          <li class="list-inline-item social-instagram">
            <a href="https://www.instagram.com/skscience92/?hl=en">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
	  -->
	  
		<div style="float: right">
			<span class="helper"></span>
			<a href="https://www.facebook.com/SKsksci/" style="font-size: 30px; vertical-align: middle; margin: 3px"><i class="fa fa-facebook-square" style="color: white"></i></a>
			<a href="https://www.youtube.com/channel/UCeej8hwdLKZMVcKDtavOiUg?view_as=subscriber" style="font-size: 27px; vertical-align: middle; margin: 3px"><i class="fa fa-youtube" style="color: white"></i></a>
			<a href="https://www.instagram.com/skscience92/?hl=en" style="font-size: 30px; vertical-align: middle; margin: 3px"><i class="fa fa-instagram" style="color: white"></i></a>
			<a style="font-size: 30px; vertical-align: middle; margin: 3px" title="skscience@yahoo.com"><i class="fa fa-yc-square" style="color: white"></i></a>			
		</div>
		
		</div>
		
		
		
		</div>

		
		
		
	</header>
	
	<div class="sticky-top secon-navbar">
		<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
					  <li class="{{ Request::url() == url('/') ? 'active' : '' }}" style="">
						<a class="nav-link" href="/">主页 <span class="sr-only">(current)</span></a>
					  </li>
					  <li class="{{ strpos(Request::url(), 'book') ? 'active' : '' }}" style="">
						<a class="nav-link" href="/book">《存在的意义》</a>
					  </li>
					  <li class="{{ strpos(Request::url(), 'topic') ? 'active' : '' }}" style="">
						<a class="nav-link" href="/topic">宽恒效应</a>
					  </li>
					  <li class="{{ strpos(Request::url(), 'news') ? 'active' : '' }}" style="">
					    <a class="nav-link" href="/news">新闻</a>
					  </li>
					  <li class="{{ strpos(Request::url(), 'video') ? 'active' : '' }}" style="">
				        <a class="nav-link" href="/video">影片</a>
			          </li>
			        </ul>
		          </div>
		</nav>		
		</div>
	</div>
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
		<div class="container">

			

			<!-- Main content -->
			<section class="">
<!-- Content Header (Page header) -->
			
			
				<!--nav class="navbar">
				  <div class="container-fluid">
					<ul class="nav navbar-nav">
					  <li class="active"><a href="{{ url('/') }}">主页</a></li>
					  <li><a href="{{ url('about') }}">关于我</a></li>					
					  <li><a href="#">新闻</a></li>
					  <li><a href="{{ url('video') }}">影片</a></li>
					  <li><a href="#">《存在的意义》</a></li>
					</ul>
				  </div>
				</nav-->
				
				<!--nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="color: BDC3C6"-->
				
				

			</section>

			<section>
				<div class="main-content container-fuild" style="padding: 2%">
				<!--header style="background-color: white; padding: 3%; border-radius: 10px" class="bg-light"-->
				<div class="">
					@yield('content_header')
					@yield('content')</div>
				</header>
				</div>
			</section>
			
			<!-- /.content -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->	
	
	    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    <footer>


<!--script src="{{ asset('vendor/adminlte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte/bootstrap/js/bootstrap.min.js') }}"></script-->
@yield('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<script>function refreshTable() {
  $('div.table-container').fadeOut();
  $('div.table-container').load(url, function() {
      $('div.table-container').fadeIn();
  });
}</script>

<script>
$(function () {
			
    $(document).tooltip({
        content: function () {
            return $(this).prop('title');
        },
        show: null, 

    });
});
</script>
	
</body>
</html>
