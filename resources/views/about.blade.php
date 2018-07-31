{{-- resources/views/admin/about.blade.php --}}
@extends('master')

@section('title', 'Dashboard')

@section('content_header')
    <h1>主页 | 陈顺宽</h1>
@stop

@section('content')
    <header class="bg-light" >
      <div class="container bg-secondary" style="padding: 3%">
        <!--h1>Welcome to Scrolling Nav</h1-->
		<div class="row">
		<div class="col-md-4 text-center" style="margin-top: 3%; margin-bottom: 3%">
			<img src="{{ URL::asset('image/img1.jpg') }}" class="img-fluid rounded" alt="陈顺宽 image" style="width: 100%"></img>
		</div>
		
		<div class="col-md-6">
        <h2 style="color: ">陈顺宽（1992-）</h2>

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
    </header>
@stop

@section('css')
    <!--link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop