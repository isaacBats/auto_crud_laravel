@extends('layouts.app')

@section('styles')
<link href="{!! url('assets/css/timeline.css') !!}" rel="stylesheet">
@endsection

@section('content')

<div class="col-md-12 panel-parent">
	<div class="knot-timeline">					
		<section id="cd-timeline" class="cd-container">
			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-red">
					<i class="ion ion-film-marker"></i>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Movie at pheonix</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
					<div class="images-block">
						<img src="{!! url('assets/images/post5.jpg') !!}" alt="">
					</div>
					<a href="#0" class="cd-read-more">Read more</a>
					<span class="cd-date">Jan 14</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->
			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-sky">
					<i class="ion ion-mic-c"></i>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Song at newyork</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit animi, vitae. Quae dolorem, culpa accusamus est tenetur ex asperiores blanditiis non harum ea quibusdam, veritatis accusantium quis iste fugiat atque.</p>									
					<a href="#0" class="cd-read-more">Read more</a>
					<span class="cd-date">Feb 18</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-yellow">
					<i class="ion ion-cube"></i>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Game cube </h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
					<div class="images-block">
						<img src="{!! url('assets/images/post1.jpg') !!}" alt="">
					</div>
					<a href="#0" class="cd-read-more">Read more</a>
					<span class="cd-date">Jan 18</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-sky">
					<i class="ion ion-mic-c"></i>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Song at newyork</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit animi, vitae. Quae dolorem, culpa accusamus est tenetur ex asperiores blanditiis non harum ea quibusdam, veritatis accusantium quis iste fugiat atque.</p>									
					<a href="#0" class="cd-read-more">Read more</a>
					<span class="cd-date">Feb 18</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-blue">
					<i class="ion ion-map"></i>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Location at barista</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
					<div class="images-block">
						<img src="{!! url('assets/images/post4.jpg') !!}" alt="">
					</div>
					<a href="#0" class="cd-read-more">Read more</a>
					<span class="cd-date">Jan 24</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-sky">
					<i class="ion ion-beer"></i>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Party</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
					<div class="images-block">
						<img src="{!! url('assets/images/post6.jpg') !!}" alt="">
					</div>
					<a href="#0" class="cd-read-more">Read more</a>
					<span class="cd-date">Feb 14</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-torque">
					<i class="ion ion-coffee"></i>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Cafe De corso</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
					<div class="images-block">
						<img src="{!! url('assets/images/post2.jpg') !!}" alt="">
					</div>
					<a href="#0" class="cd-read-more">Read more</a>
					<span class="cd-date">Feb 18</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-red">
					<i class="ion ion-ribbon-b"></i>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Security upgrade</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>									
					<a href="#0" class="cd-read-more">Read more</a>
					<span class="cd-date">Feb 18</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->							

			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-yellow">
					<i class="ion ion-image"></i>
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2>Final Section</h2>
					<p>This is the content of the last section</p>
					<span class="cd-date">Feb 26</span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->
		</section> <!-- cd-timeline -->
	</div>
	<!-- knot-timeline -->
</div>
<!-- col-md-9 --> 

@endsection

@section('scripts')

<script src="{!! url('assets/js/jquery-ui-1.10.3.custom.min.js') !!}"></script>
<script src="{!! url('assets/js/bootstrap.min.js') !!}"></script>
<script src="{!! url('assets/js/min/slideout-min.js') !!}"></script>
<script src="{!! url('assets/js/jquery.nicescroll.min.js') !!}"></script>
<script src="{!! url('assets/js/jquery.loadmask.min.js') !!}"></script>
<script src="{!! url('assets/js/switchery.min.js') !!}"></script>
<script src="{!! url('assets/js/jquery.fullscreen.min.js') !!}"></script>

<script src="{!! url('assets/js/modernizr.min.js') !!}"></script>
<script>
       // Timeline
       var $timeline_block = $('.cd-timeline-block');

       $timeline_block.each(function(){
       	if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
       		$(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
       	}
       });

       $(window).on('scroll', function(){
       	$timeline_block.each(function(){
       		if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
       			$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
       		}
       	});
       });
   </script>

   @endsection