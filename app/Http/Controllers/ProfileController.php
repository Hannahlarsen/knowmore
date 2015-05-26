<?php namespace App\Http\Controllers;

use Auth;
use Validator;
use Input;
use App\Projects;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller {



	public function __construct()
	{
		$this->middleware('auth');

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$user = Auth::user();
		$user_id = Auth::id();


		$projects = Projects::where('user_id', $user_id )->get();

		return view('profile.index', compact('user', 'projects'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		$user = Auth::user();
		return view('profile.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Requests\UpdateProfileRequest $request)
	{
		$profile = Auth::user();
		  // getting all of the post data
	    $file = array('image' => Input::file('image'));
		  // setting up rules
		$rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
		  // doing the validation, passing post data, rules and the messages

		  if ($file['image'] === NULL) {

		  	$profile->description = $request['description'];
			$profile->skills = $request['skills'];
			$profile->country = $request['country'];
			$profile->active = $request['active'];
			$profile->update();

			flash()->success('Your profile was successfully updated');
			return redirect('profile');
			}
			else {

				  
				  $validator = Validator::make($file, $rules);
			

				  if ($validator->fails()) {
				    flash()->error("The profile picture was not uploaded");
				    return Redirect('profile');
				  }
				  else {
				    // checking file is valid.
				    if (Input::file('image')->isValid()) {
				      $destinationPath = 'uploads'; // upload path
				      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
				      $fileName = rand(11111,99999).'.'.$extension; // renameing image
				      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
				      $file_location = $fileName;
				    }
				    else {
				      // sending back with error message.
				      flash()->error('Failed to upload new profile picture');
				      return Redirect('profile');
				    }
				  }
		 	 }

			$profile->description = $request['description'];
			$profile->skills = $request['skills'];
			$profile->country = $request['country'];
			$profile->active = $request['active'];
			$profile->picture = $file_location;
			$profile->update();

			flash()->success('Your profile was successfully updated');
			return redirect('profile');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

}
