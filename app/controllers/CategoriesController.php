<?php

class CategoriesController extends BaseController {

	protected $categories;

	public function __construct(Category $category){
		$this->category = $category;
	}

	public function index(){

		$categories = $this->category->all();

		return View::make('categories.index', ['categories' => $categories]);
	}

	public function show($title){
		$category = $this->category->whereTitle($title)->first();

		return View::make('categories.show', ['category' => $category]);
	}

	public function create(){

		return View::make('categories.create');
	}

	public function store(){

		$input = Input::only('title', 'content');

		$this->category->fill($input);

		if ( ! $this->category->isValid())
		{
			return Redirect::back()->withInput()->withErrors($this->category->errors);
		}

		$this->category->create($input);

		return Redirect::to('/categories');
	}

}