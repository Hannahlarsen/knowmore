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

		flash()->success('Your project was successfully created');

		return redirect('projects');

	}

	public function show($id) 
	{

		$project = Projects::where('id', $id)->first();
		$user_id = Auth::id();

		if ($project['user_id'] === $user_id )
		{
			$edit = 1;
		}
		else {
			$edit = 0;
		};

		return view('projects/show', compact('project', 'edit'));


	}

	public function edit($id)
	{
		$project = Projects::where('id', $id)->first();
		$user_id = Auth::id();

		if ($project['user_id'] === $user_id )
		{
			flash()->message('please edit your project below');
			return view('projects.edit', compact('project'));
		};

		flash()->error('Yon can´t other peoples projects');
		return view('projects');

	}

	public function update($id, Requests\ProjectsRequest $request)
	{

		$input = $request->all();

		$project = Projects::where('id', $id)->first();
		$project->title = $input['title'];
		$project->subtitle = $input['subtitle'];
		$project->description = $input['description'];
		$project->scope = $input['scope'];
		$project->pricerange = $input['pricerange'];
		$project->starttime = $input['starttime'];
		$project->endtime = $input['endtime'];
		$project->active = $input['active'];
		$project->update();

		flash()->success('Your project was successfully updated');

		return redirect('projects');

	}

	public function destroy($id)
	{
		$project = projects::where('id', $id)->first();
		$user = auth::id();

		if ($user === $project['user_id']) {

		$project->delete();

		flash()->message('Project deleted as requested');

		return redirect('projects');

		};

		flash()->error('Something went wrong - please contact an administrator');

		return redirect('projects');
	}


}


