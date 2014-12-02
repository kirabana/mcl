<?php

class PostsController extends BaseController {

	protected $post;

	public function __construct(Post $post){
		$this->post = $post;
	}

	public function index(){

		$posts = $this->post->all();

		return View::make('posts.index', ['posts' => $posts]);
	}

	public function show($id){

		$post = Post::find($id);

		return View::make('posts.show', compact('post'));
	}

	public function create(){

		return View::make('posts.create');
	}

	public function store(){

		$input = Input::only('title', 'content', 'image', 'ingredients', 'method', 'category_id');


		$this->post->fill($input);

		if ( ! $this->post->isValid())
		{
			return Redirect::back()->withInput()->withErrors($this->post->errors);
		}

		if (Input::hasFile('image')){
			$filename = date('U').'_'.Input::file('image')->getClientOriginalName();

			Input::file('image')->move(public_path().'/assets/img/entry/', $filename);

			$input['image'] = $filename;
		}

		$this->post->create($input);

		return Redirect::to('/posts');
	}


}






// public function show($title){
// 		$post = $this->post->whereTitle($title)->first();

// 		return View::make('posts.show', ['post' => $post]);
// 	}




