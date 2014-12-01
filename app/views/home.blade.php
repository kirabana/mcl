@extends('layouts.index')

@section('content')

	<div class="container">


		<div id="gallery">
			<img src="{{asset("assets/img/frontpage/home_2.jpg")}}" alt="">
			<img src="{{asset("assets/img/frontpage/home_4.jpg")}}" alt="">
			<img src="{{asset("assets/img/frontpage/home_5.jpg")}}" alt="">
			<img src="{{asset("assets/img/frontpage/home_1.jpg")}}" alt="">
		</div>


		<!-- <div class="mainImg">
			<img src="{{asset("assets/img/mainImg-01.png")}}" alt="">
		</div>
		<div class="sideMain">
			<img class="sideImg" src="{{asset("assets/img/thisWeek.png")}}" alt="">
		</div>
		<div class="sideMain">
			<h1>Welcome To MCL</h1>
			<p>Cooking blog about home-made family food for every day meal.</p>
			<p class="readMore"><a href="{{ URL::to('/about') }}">>>Read More</a></p>
		</div> -->
	</div>

	<div class="container">
		<div class="registerBox">
			<h1>Become a Member</h1>
			<p>Become a member of My Cooking Lesson today. By becoming a member you will be able to rate recipes and enter in competitions.</p>
			<a href="{{ URL::to('/users/create') }}"><button type="button" class="register">Register</button></a>
		</div>
	</div>
	
	<div class="greenBackground">
		<div class="container">
			<h1>About My Cooking Lesson</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo facere error obcaecati doloremque, quidem cumque vitae numquam odit inventore similique necessitatibus eum laborum perferendis, voluptatum perspiciatis, blanditiis quo rerum dolore.</p>
			<p class="readMore"><a href="{{ URL::to('/about') }}">>>Read More</a></p>
			
		</div>
	</div>

@stop