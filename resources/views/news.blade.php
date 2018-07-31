{{-- resources/views/admin/news.blade.php --}}
@extends('master')

@section('title', 'News')

@section('content_header')
    <!--h1>新闻</h1>
	<hr-->
@stop

@section('content')
    <div class='container'>
		<div style="margin-top: 1em">
			<h3 style="font-weight: bold">相关报章</h3>
			
		</div>
		<div class="d-flex flex-wrap" style="">
		  <div class="p-2"><img id="myImg" src="{{ URL::asset('image/news1.jpg') }}" alt="Trolltunga, Norway" style="width: 100%; max-width: 300px" height="300px" onclick="openModal();currentSlide(1)"></div>
		  <div class="p-2"><img id="myImg" src="{{ URL::asset('image/news2.jpg') }}" alt="Trolltunga, Norway" style="width: 100%; max-width: 300px" height="300px" onclick="openModal();currentSlide(2)"></div>
		  <div class="p-2"><img id="myImg" src="{{ URL::asset('image/news3.jpg') }}" alt="Trolltunga, Norway" style="width: 100%; max-width: 300px" height="300px" onclick="openModal();currentSlide(3)"></div>
		  
		</div>
		

<!-- The Modal -->
<div id="myModal" class="modal">


  <span class="close">&times;</span>


    <div class="slides">
    <img src="{{ URL::asset('image/news1.jpg') }}" class="modal-content">
	</div>
	<div class="slides">
    <img src="{{ URL::asset('image/news2.jpg') }}" class="modal-content">
	</div>
	<div class="slides">
    <img src="{{ URL::asset('image/news3.jpg') }}" class="modal-content">
	</div>
  
  

  
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
	

  <div id="caption"></div>
</div>

</div>
		<h3 style="font-weight: bold; margin-top: 1em; margin-left: 15px;">写后心得</h3>

		<div style="background-color: #ffffff">
		  
		  
		  <div class="book-list by-line read-more">


			
			@foreach ($news as $new)
				
				<h3><a href="{{ url($new->url) }}">{{ $new->name }}</a></h3>
				<p>{{ $new->content }} <span class="read-more"><a href="{{ url($new->url) }}">更多</a></span></p>
				
				@if (!$loop->last)
					<hr>
				@endif
				
			@endforeach
			
			<!--h3><a href="{{ url('/news/因为宇宙物理学家，“霍金”，而写了一本书') }}">因为宇宙物理学家，“霍金”，而写了一本书</a></h3>
			<br>
			<p>我还不是什么博士级的专家，但我觉得自己是旁观者清的因素吧。我发现伟大的科学家们都从自己的领域看待存在的答案。
			他们对生命解释得了一半，又解释不了另一半。他们的眼睛只看到了自己领域的拼图，却无法把更大的拼图拼凑起来。
			<span class="read-more"><a href="{{ url('/news/因为宇宙物理学家，“霍金”，而写了一本书') }}">更多</a></span>
			
</p>

			<hr>

			<h3><a href="{{ url('/book/曾擊倒巨人的大衛') }}">撒旦之书</a></h3>
			<br>
			
			<p>有些读者会认为，《存在的意义》正在表现90后的新想法，和新的世界观。我本人不确定大家是否与我有同样的想法和人生上的理性概念。
			但，我可以肯定的是，这些想法和人生概念，在21世纪的马来西亚还是件具有争议性的课题。
			<span class="read-more"><a href="{{ url('/book/曾擊倒巨人的大衛') }}">更多</a></span>
</p>

		<hr>

			<h3>科学革命家</h3>
			<br>
			<p>我喜欢尝试新的事物，甚至说：“我想要创造一些从来就没有出现过的事物。”
而这本《存在的意义》，就是本新的书类，也可能是世界第一本。
<span class="read-more">更多</span>
</p>

		<hr>

			<h3>科学激励书？</h3>
			<br>
			<p>《存在的意义》 是本科学激励书？
那是不是说作者会用科学解释激励，还是以激励的方式解释科学？都不是！
在这里，我发现很多人都误解本书的内容。 因为大家很少有机会接触这类型书籍。相信在马来西亚，这是第一本，又是科学，又是激励的书，《存在的意义》。
其实书名已经很够明显的了，但是还是有一些专业人士会把这书看成宗教类的激励书，这确实让我感到十分无奈。
<span class="read-more">更多</span>
</p-->
		</div>
	
	
	
		</div>

@stop

@section('css')
    <!--link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('js')
    <script>
	
	// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
//var img = document.getElementById('myImg');
//var modalImg = document.getElementById("img01");
//var captionText = document.getElementById("caption");
/*img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    //captionText.innerHTML = this.alt;
}*/

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}

function openModal() {
  document.getElementById('myModal').style.display = "block";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slides");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex-1].style.display = "block";

}

	</script>
	
	<!--script>
	
	function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
	</script-->
@stop