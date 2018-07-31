{{-- resources/views/admin/landing.blade.php --}}
@extends('master')

@section('title', 'Dashboard')

@section('content_header')
    <!--h1>主页 | 陈顺宽</h1-->

@stop

@section('content')

<!--https://shopee.com.my/%E3%80%8A%E5%AD%98%E5%9C%A8%E7%9A%84%E6%84%8F%E4%B9%89%E3%80%8BThe-Meaning-of-Existence-i.51235122.811666456-->
<div class="book-land">
<div id="demo" class="carousel slide" data-ride="carousel" style="background-color: white">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>

  
  <!-- The slideshow -->
  <div class="carousel-inner" style="height: 600px" >
    <div class="carousel-item active">
        <div class="flex-container" style="padding: 100px">
        <div class="book-image" style="margin-right: 30px">
          <img style="height: 390px; margin-right: 80px;" src="{{ URL::asset('image/book-cover.jpg') }}">
        </div>
        <div style="margin-top: 50px">
          <h4 style="margin-left: -15px">《存在的意义》+ 作者亲笔签名</h4>
          <p style="margin-top: 30px; font-size: 30px; font-weight: 400;">RM38.90</p>
          <p>ISBN/Ean:9789671468104<br>
          出版日期:	2017年<br>
        页数:	232	</p>
          <p>可到<a href="https://shopee.com.my/%E3%80%8A%E5%AD%98%E5%9C%A8%E7%9A%84%E6%84%8F%E4%B9%89%E3%80%8BThe-Meaning-of-Existence-i.51235122.811666456">Shopee<a>网站购买</p>
        </div>
		</div>
	</div>
      <div class="carousel-item">
        <div class="flex-container" style="padding: 100px">
        <div class="book-image" style="margin-right: 30px">
          <img style="height: 390px; margin-right: 80px;" src="{{ URL::asset('image/book2-cover.jpg') }}">
        </div>
        <div style="margin-top: 50px">
          <h4 style="margin-left: -15px">《好想为你写的小说》+ 作者亲笔签名</h4>
          <p style="margin-top: 30px; font-size: 30px; font-weight: 400;">RM35.00</p>
          <p>ISBN/Ean:9789671468104<br>
          出版日期:	2017年<br>
        页数:	232	</p>
          <p>可到<a href="https://shopee.com.my/sksci65/1231549699">Shopee<a>网站购买</p>
        </div>
		</div>
	</div>
  </div>


  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <!--span class="carousel-control-prev-icon" style="color: black"></span-->
    <span class="left-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="right-icon"></span>
  </a>

</div>
</div>

    <div class="container author-intro" style="">
        <!--h1>Welcome to Scrolling Nav</h1-->

		<div class="row">

		<div class="col-md-5" style="">
			<img class="intro-img" src="{{ URL::asset('image/img2.png') }}">
		</div>

		<div class="col-md-7 intro-content">
        <h2>陈顺宽（1992-）</h2>

		<br>
		<p class="lead" style="color: ">
		制片人、自由作家
		爱好阅读

		<br>
		<br>

		出生于1992年，男性。
		居住地点：三合港，马来西亚。
		第一本著作：《存在的意义》 ， 同时也开启了生命价值主义。<br>
		他毕业于：沙巴大学（UMS），主修心理辅导，透过网络自修天文物理和金融商学

		<br>
		<br>

		始于2014年，开始在一间窄小房间内篇书。

		<br>
		<br>

		在大学时期买了一台1千令吉的录影机，便开始了他的影片部落格。
		影片制作于2015年11月24日起，开始每周在网络上载自己的影片被中国报记者列为，奇葩一枚。

		</p>
		</div>



		</div>

	</div>
		<!--hr size="150" style="margin-left: ;"-->

	<div class="container">
	<div style="display: block; height: 2.15em">
		<h3 style="font-weight: bold; float: left">最新影片

		<a class="" href="#carouselExampleControls" role="button" data-slide="prev">
    <!--span class="carousel-control-prev-icon" aria-hidden="true"></span-->
    <span class="" aria-hidden="true"><img src="{{ URL::asset('svg/chevron-with-circle-left.svg') }}" style="height: 30px; color: white"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="" aria-hidden="true"><img src="{{ URL::asset('svg/chevron-with-circle-right.svg') }}" style="height: 30px; color: white"></span>
    <span class="sr-only">Next</span>
  </a>


		</h3>
		<div style="float: right;"><a class="text-btn sectext-color" href="{{ url('/video') }}">更多影片 </a><i class="fa fa-angle-right sectext-color" style="font-size: 1em"></i></div>

  </div>

	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">

		<div class="carousel-inner">

			<div class="carousel-item active">
				<div class="d-flex flex-wrap" style="">
					<div class="p-2 land-vgrid" style="margin-left: 5px; margin-right: 5px;" >
						<iframe src="https://www.youtube.com/embed/qgCObST5_ho"
			frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="p-2 land-vgrid" style="margin-left: 5px; margin-right: 5px;">
						<iframe src="https://www.youtube.com/embed/e3nsefG7S1c"
		   frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="p-2 land-vgrid" style="margin-left: 5px; margin-right: 5px;">
						<iframe src="https://www.youtube.com/embed/8Rgh5bH1hko"
		   frameborder="0" allowfullscreen></iframe>
					</div>



				</div>
			</div>

			<!--div class="carousel-item active">

			<div style="display: inline-block; height: 100%; width: 100%">
			<div class="intrinsic-container intrinsic-container-16x9" style="display: inline-block; width: 30%; height: 50%; padding-bottom: 56.25%; position: relative;
  height: 0;
  overflow: hidden;">
			<iframe src="https://www.youtube.com/embed/yj4UW9oqeso"
		   frameborder="0" allowfullscreen></iframe>
			</div>

			<div class="intrinsic-container intrinsic-container-16x9" style="display: inline-block; width: 30%; height: 50%; padding-bottom: 56.25%; position: relative;
  height: 0;
  overflow: hidden;">
			<iframe src="https://www.youtube.com/embed/yj4UW9oqeso"
		   frameborder="0" allowfullscreen></iframe>
			</div>

			<div class="intrinsic-container intrinsic-container-16x9" style="display: inline-block; width: 30%; height: 50%; padding-bottom: 56.25%; position: relative;
  height: 0;
  overflow: hidden;">
			<iframe src="https://www.youtube.com/embed/yj4UW9oqeso"
		   frameborder="0" allowfullscreen></iframe>
			</div>
			</div>
			</div-->
			<!--<div class="d-flex  no-wrap" style="width: 100%;">
			  <div class="p-2 land-vgrid" >
						<iframe src="https://www.youtube.com/embed/qgCObST5_ho"
		   frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="p-2  land-vgrid" >
						<iframe src="https://www.youtube.com/embed/e3nsefG7S1c"
		   frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="p-2  land-vgrid" >
						<iframe src="https://www.youtube.com/embed/8Rgh5bH1hko"
		   frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>-->

			<div class="carousel-item">
			<div class="d-flex  flex-wrap" style="width: 100%">
			  <div class="p-2  land-vgrid" >
						<iframe src="https://www.youtube.com/embed/yj4UW9oqeso"
		   frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="p-2  land-vgrid" >
						<iframe src="https://www.youtube.com/embed/BsHdAg5eR00"
		   frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="p-2  land-vgrid" >
						<iframe src="https://www.youtube.com/embed/-H0RfemoVw8"
		   frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<div class="carousel-item">
			<div class="d-flex  flex-wrap" style="width: 100%">
			  <div class="p-2 intrinsic-container intrinsic-container-16x9" >
						<iframe src="https://www.youtube.com/embed/yj4UW9oqeso"
		   frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="intrinsic-container intrinsic-container-16x9" >
						<iframe src="https://www.youtube.com/embed/BsHdAg5eR00"
		   frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="intrinsic-container intrinsic-container-16x9" >
						<iframe src="https://www.youtube.com/embed/-H0RfemoVw8"
		   frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>

		</div>

</div>

    </div>
	<!--div class="d-flex  flex-wrap" style="width: 100%">
			<div class="p-2" style="margin-left: 5px; margin-right: 5px; width: 30.3%" >
				<iframe src="https://www.youtube.com/embed/qgCObST5_ho"
    frameborder="0" width="100%"  allowfullscreen></iframe>
			</div>
			<div class="p-2" style="margin-left: 5px; margin-right: 5px; width: 30.3%">
				<iframe src="https://www.youtube.com/embed/e3nsefG7S1c"
   frameborder="0" width="100%"  allowfullscreen></iframe>
			</div>
			<div class="p-2" style="margin-left: 5px; margin-right: 5px; width: 30.3%">
				<iframe src="https://www.youtube.com/embed/8Rgh5bH1hko"
   frameborder="0" width="100%" allowfullscreen></iframe>
			</div>

		</div-->
	<div class="container">


</div>

@stop

@section('css')
    <!--link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('js')
    <script> console.log('Hi!'); </script>

@stop
