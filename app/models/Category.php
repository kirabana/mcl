<?php

class Category extends Eloquent{

	protected $fillable = ['title'];

	public static $rules = [
		'title' => 'required'
	];

	public $errors;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tb_categories';

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
