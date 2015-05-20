<?php namespace App\Http\Controllers;

use App\Projects;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ProjectsController extends Controller {

		public function __construct()
	{

		$this->middleware('auth', ['except' => 'index']);
	}

	public function index()
	{

		$projects = Projects::latest('startdate')->get();

		return view('projects.index', compact('projects'));
	}


	public function create()
	{

		return view('projects.create');

	}

	public function store(Requests\ProjectsRequest $request)
	{

		$input = $request->all();


		$project = New Projects;
		$project->title = $input['title'];
		$project->subtitle = $input['subtitle'];
		$project->description = $input['description'];
		$project->scope = $input['scope'];
		$project->pricerange = $input['pricerange'];
		$project->starttime = $input['starttime'];
		$project->endtime = $input['endtime'];
		$project->active = 1;
		$project->user_id = auth::id();
		$project->save();

		flash()->overlay('Your project was successfully created ', 'Good job');

		return redirect('projects');

	}


}


