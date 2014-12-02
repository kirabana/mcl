<?php  

class UsersController extends \BaseController {

	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}


	public function index()
	{
		$users = $this->user->all();

		return View::make('users.index', ['users' => $users]);
	}

	public function show($username)
	{
		$user = $this->user->whereUsername($username)->first();

		return View::make('users.show', ['user' => $user]);
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

		{

			$user = User::find($id);
			return View::make('users.edit')->with('user', $user);
		}

		return Redirect::to('users');
	}



}





// if(Auth::check() && (Auth::user()->admin == 1 || Auth::user()->id == $id))


$post = Post::find($id);

		return View::make('posts.show', compact('post'));