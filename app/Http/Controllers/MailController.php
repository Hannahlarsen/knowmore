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
		$inbox = Mail::where('receiver_id', $user )->where('receiver_deleted', '=', 0 )->orderBy('id', 'desc')->get();

		return view('mails.index', compact('inbox', 'sent'));
	}

	public function sent()
	{
		$user = Auth::id();
		$sent = Mail::where('sender_id', $user)->where('sender_deleted', '=', 0 )->get();

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

		 	flash()->error('The user name was not found in the user database');

			return redirect('mails');
		};

		if ($receivers > 1)
		 {
			
		 	flash()->error('There is more than one user with that name in the datebase - please browse to the correct user and contact him that way');

			return redirect('mails');
		};

		$receiver = User::where('name', $content['receiver_name'])->first();

		$mail = New Mail;
		$mail->sender_id = $sender['id'];
		$mail->sender_name = $sender['name'];
		$mail->content = $content['content'];
		$mail->headline = $content['headline'];
		$mail->receiver_id = $receiver['id'];
		$mail->receiver_deleted = 0;
		$mail->sender_deleted = 0;
		$mail->receiver_name = $content['receiver_name'];
		$mail->sender_read = 0;
		$mail->receiver_read = 0;
		$mail->save();

		flash()->message('Your mail has been sent');

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
		
		$mail->receiver_read = 1;
		$mail->update();



		if ($user === $mail['receiver_id']) {
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

		if ($user === $mail['receiver_id']) {
		return view('mails.reply', compact('mail'));
		};

		flash()->error("Something went wrong");
		return redirect('mails');
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

		if ($user === $mail['receiver_id']) {

		$mail->receiver_deleted = 1;
		$mail->update();

		flash()->message('Email deleted as requested');

		return redirect('mails');

		};

		flash()->error('Something went wrong - please contact an administrator');

		return redirect('mails');
	}

	public function destroy_sender($id)
	{
		$user = auth::id();
		$mail = mail::where('id', $id)->first();

		if ($user === $mail['sender_id']) {

		$mail->sender_deleted = 1;
		$mail->update();

		flash()->message('Email deleted as requested');

		return redirect('mails/sent');

		};

		flash()->error('Something went wrong - please contact an administrator');

		return redirect('mails/sent');
	}

}
