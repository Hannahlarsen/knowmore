<?php namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MailController extends Controller {


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
		$user = Auth::id();
		$inbox = Mail::where('receiver_id', $user )->get();

		return view('mails.index', compact('inbox', 'sent'));
	}

	public function sent()
	{
		$user = Auth::id();
		$sent = Mail::where('sender_id', $user)->get();

		return view('mails.sent', compact('inbox', 'sent'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('mails.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function send(Requests\MailRequest $request)
	{
		$sender = Auth::user();
		$content = $request->all();


		/**
		*  Check if the receiving users name is in the database
		*  TODO: make make errors work properly
		*
		*/

		$receivers = User::where('name', $content['receiver_name'])->count();

		if ($receivers === 0)
		 {
			return "error - receiver does not exist";
		};

		if ($receivers > 1)
		 {
			return "error - more than one receiver with that name";
		};



		$mail = New Mail;
		$mail->sender_id = $sender['id'];
		$mail->sender_name = $sender['name'];
		$mail->content = $content['content'];
		$mail->headline = $content['headline'];
		$mail->receiver_id = 1;
		$mail->receiver_name = $content['receiver_name'];
		$mail->save();

		return redirect('mails');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = auth::id();
		$mail = mail::where('id', $id)->first();

		if ($user === intval($mail['receiver_id'])) {
		return view('mails.show', compact('mail'));
		};


	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function reply($id)
	{
		$user = auth::id();
		$mail = mail::where('id', $id)->first();

		if ($user === intval($mail['receiver_id'])) {
		return view('mails.reply', compact('mail'));
		};
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = auth::id();
		$mail = mail::where('id', $id)->first();

		if ($user === intval($mail['receiver_id'])) {

		$mail->delete();

		\Session::flash('flash_message', 'The email has been deleted');

		return redirect('mails');

		};
	}

}
