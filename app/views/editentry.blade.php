@extends('layouts.index')

@section('content')

	<div class="container">
		<h1>Edit This Entry</h1>
		<!-- One -->
		<div class="containerRecipe">
			<h2>Recipes</h2>
			<div class="recipethumbnailMain">
				<img src="{{asset("assets/img/entry/cooking-blog.png")}}" alt="">
			</div>
			<div class="recipeContentMain">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, natus, laudantium, in, suscipit quasi impedit voluptate sed eum modi dolorum facere sunt enim dolorem quidem quis ab dolores reiciendis rerum.
			</div>

			<div class="recipeMain">
				<h1>Ingredients</h1>
				<ul>
					<p>ehfiuer</p>
					<p>erfer</p>
					<p>referf</p>
					<p>erfrf</p>
					<p>efrrefr</p>
				</ul>
			</div>

			<div class="recipeMain">
				<h1>Method</h1>
				<ol>
					<li>Mauris varius id enim eget maximus. Cras sapien ligula, lobortis sodales porttitor sed, vehicula et dui. Phasellus aliquam lectus vitae sem auctor gravida. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur consectetur justo urna, eu porta sapien finibus sit amet. Proin at ipsum et orci malesuada blandit scelerisque et ante. Duis in ante quis ex consectetur fermentum. </li>
					<li>Vivamus a pellentesque mauris. Fusce a nibh porta, porta orci eu, interdum elit. Duis sit amet leo purus. Ut sagittis leo et mi rutrum molestie. Morbi sit amet quam fringilla, sagittis metus ac, egestas purus. Morbi pretium odio ac velit facilisis faucibus et ac mauris. Nunc ultrices finibus eros, eu pretium erat volutpat id. Duis pretium pharetra massa, quis maximus est volutpat quis. Aliquam erat volutpat. Morbi rhoncus volutpat diam sed ullamcorper. Morbi eleifend nulla ipsum, vel aliquam enim vehicula vitae.</li>
					<li>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec fringilla est nec lacus cursus, consequat pellentesque nisi tempor. Cras id pellentesque elit. Integer bibendum elit non nunc fringilla pulvinar. Maecenas finibus ante at tortor fermentum lacinia. Phasellus tincidunt euismod tortor. Suspendisse sed eleifend diam. Aenean sagittis, ex ac pretium sollicitudin, nibh tortor malesuada nunc, vitae faucibus mi erat sit amet massa. Praesent in dignissim libero, quis imperdiet orci. Proin ut convallis leo. Donec blandit aliquam nisl vel bibendum. Morbi placerat elit sapien, sit amet consectetur erat pharetra nec. </li>
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vulputate, mi in tempus varius, erat metus luctus odio, sed cursus nulla turpis et lectus. Aliquam dignissim dui at velit malesuada imperdiet. Fusce semper enim sem, id cursus metus tristique a. Praesent sit amet egestas justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec fringilla est nec lacus cursus, consequat pellentesque nisi tempor. Cras id pellentesque elit. Integer bibendum elit non nunc fringilla pulvinar. Maecenas finibus ante at tortor fermentum lacinia.</li>
				</ol>
			</div>

			<div class="recipeMain">
				<h1>Leave A Comment</h1>
				<div class="row">
					<a href="#" id="logInToComment">Login To Comment</a>
				</div>
				<div class="row">
					<label for="commentName"><b>Username</b></label>
					<input type="text">
				</div>
				<div class="row">
					<label for="commentEmail"><b>Email</b></label>
					<input type="text">
				</div>
				<div class="row">
					<label for="commentComment"><b>Comment</b></label>
					<textarea name="" id=""></textarea>
				</div>
				<div class="row">
					<a href="{{ URL::to('/register') }}"><button type="button" class="register">Submit</button></a>
				</div>
			</div>

			<div class="recipeMain">
				<h1>(3) Comments</h1>
			</div>

			<div class="commentSection">
				<div class="commentTitleFooter">User1</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus placeat libero voluptas quidem laborum magnam, praesentium in animi omnis doloremque, blanditiis rerum eligendi officia fugit laudantium eos deserunt porro saepe.</p>
				<div class="commentTitleFooter">21 Nov 2014</div>
				<p><a href="#">Reply</a></p>

				<div class="replySection">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur at corrupti necessitatibus quos perspiciatis quaerat suscipit, quia, officiis cupiditate dolor dolorem sequi alias ut ipsam vel similique debitis non. Pariatur.
				</div>

				<div class="replySection">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur at corrupti necessitatibus quos perspiciatis quaerat suscipit, quia, officiis cupiditate dolor dolorem sequi alias ut ipsam vel similique debitis non. Pariatur.
				</div>
			</div>


			<div class="commentSection">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus placeat libero voluptas quidem laborum magnam, praesentium in animi omnis doloremque, blanditiis rerum eligendi officia fugit laudantium eos deserunt porro saepe.</p>
				<p><a href="#">Reply</a></p>
			</div>

			<div class="commentSection">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus placeat libero voluptas quidem laborum magnam, praesentium in animi omnis doloremque, blanditiis rerum eligendi officia fugit laudantium eos deserunt porro saepe.</p>
				<p><a href="#">Reply</a></p>
			</div>




		</div>

		<div class="tagMenu">
			<h2>Categories</h2>
			<ul>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>

			</ul>

			<h2>Popular Categories</h2>
			<ul>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>

			</ul>

			<h2>Recent Entries</h2>
			<ul>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				
			</ul>

			<h2>Popular Entries</h2>
			<ul>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				<li><a href="{{ URL::to('/') }}">frefre</a></li>
				
			</ul>
		</div>
	</div>

@stop