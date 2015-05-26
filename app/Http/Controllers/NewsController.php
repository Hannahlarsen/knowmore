<?php namespace App\Http\Controllers;

use App\News;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;



class NewsController extends Controller {


	public function __construct()
	{

		$this->middleware('auth', ['except' => ['index', 'show'] ]);
	}

	public function index() {

		$news = News::latest('published')->orderBy('id', 'desc')->take(5)->get();

		return view('news.index', compact('news'));

	}

	public function show($id) {

		$news = News::find($id);

		return view('news.show', compact('news'));

	}

	public function create() {

		return view('news.create');
	}

	public function store(Requests\NewsRequest $request) {

		$input = $request->all();
		
		$news = New News;
		$news->title = $input['title'];
		$news->name = $input['name'];
		$news->user_id = $input['user_id'];
		$news->content = $input['content'];
		$news->active = 1;
		$news->picture = "none";
		$news->published = $input['published'];
		$news->save();

		return redirect('news');


	}

	public function edit($id) {

		$news = News::FindOrFail($id);

		return view('news.edit', compact('news'));

	}

	public function update($id, Requests\NewsRequest $request) {

		$input = $request->all();

		$news = News::FindOrFail($id);

		$news->title = $input['title'];
		$news->name = $input['name'];
		$news->user_id = 01;
		$news->content = $input['content'];
		$news->active = 1;
		$news->picture = "none";
		$news->published = $input['published'];
		$news->update();

		return redirect('news');

	}

}
