<?php

class Post extends Eloquent{

	protected $fillable = ['title', 'image', 'content', 'ingredients', 'method', 'created_at', 'updated_at', 'deleted_at'];

	public static $rules = [
		'title' => 'required',
		'content' => 'required',
		'image' => 'required',
		'ingredients' => 'required',
		'method' => 'required'
	];

	public $errors;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tb_posts';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	// protected $hidden = array('password', 'remember_token');


	public function isValid(){
		$validation = Validator::make($this->attributes, static::$rules);

		if ( $validation->passes()) return true;

		$this->errors = $validation->messages();
		return false;
	}

}

