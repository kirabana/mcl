<?php  

class PagesController extends BaseController{
	public function home(){
		return View::make('home');
	}
	public function about(){
		return View::make('about');
	}
	public function recipes(){
		return View::make('recipes');
	}
	public function contact(){
		return View::make('contact');
	}
	public function register(){
		return View::make('register');
	}
	public function login(){
		return View::make('login');
	}
	public function retrieve(){
		return View::make('retrieve');
	}
	public function entry(){
		return View::make('entry');
	}
	public function adminlogin(){
		return View::make('admin');
	}
	public function user(){
		return View::make('user');
	}
	public function editcategory(){
		return View::make('editcategory');
	}
	public function editentryform(){
		return View::make('editentryform');
	}
	public function editentry(){
		return View::make('editentry');
	}
	public function userpage(){
		return View::make('userpage');
	}

	// $posts = Post::with('comments');
	// $comments = $posts->comments;

	// return Redirect::to('post')->with('$posts', $posts)

	// foreach($posts->comments as comment)

	// $posts = Post::has('comments');
}