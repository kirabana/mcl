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

	public function show($title){
		$post = $this->post->whereTitle($title)->first();

		return View::make('posts.show', ['post' => $post]);
	}

	public function create(){

		return View::make('posts.create');
	}

	public function store(){

		$input = Input::only('title', 'content');

		$this->post->fill($input);

		if ( ! $this->post->isValid())
		{
			return Redirect::back()->withInput()->withErrors($this->post->errors);
		}

		$this->post->create($input);

		return Redirect::to('/posts');
	}
}