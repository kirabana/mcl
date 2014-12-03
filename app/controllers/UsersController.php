<?php  

class UsersController extends \BaseController {

	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}


	public function home()
	{
		$user = User::find(Auth::id());

		return View::make('users.home', ['user' => $user]);
	}

	public function show($username)
	{

		return View::make('users.show');
	}

	public function create()
	{
		return View::make('users.create');
	}

	public function store()
	{
		$input = Input::all();

		if ( ! $this->user->fill($input)->isValid())
		{
			return Redirect::back()->withInput()->withErrors($this->user->errors);
		}

		$this->user->save();

		return Redirect::to('users');
	}





	public function edit($id){

		if(Auth::check() && (Auth::user()->admin == 1 || Auth::user()->id == $id)){

			$user = User::find($id);

			return View::make('users.edit')->with('user', $user);
		}

		return Redirect::to('/');
	}

	public function update($id){
		if(Auth::id() == $id){
			$input = Input::only('username', 'email', 'password', 'confirmPassword', 'cast', 'admin');
		}else{
			$input = Input::only('username', 'email', 'cast', 'admin');
		}

		$this->user = User::find($id);

		if(Auth::id() == $id){

			if ( ! $this->user->isValid($input))
			{
				return Redirect::back()->withInput()->withErrors($this->user->errors);
			}

			if( $input['password'] != $input['confirmPassword']){
				return Redirect::back()->withInput()->with('confirmPassword', 'Passwords do not match');
			}
		}

		$this->user->fill($input);

		$this->user->save();

		return Redirect::to('/users/'.$input['username']);
	}









}





// if(Auth::check() && (Auth::user()->admin == 1 || Auth::user()->id == $id))


// $post = Post::find($id);

// 		return View::make('posts.show', compact('post'));