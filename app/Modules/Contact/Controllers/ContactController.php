<?php namespace App\Modules\Contact\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Redirection;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("Contact::index");
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
	public function send(Request $request)
	{
		Mail::send('Contact::correo',$request->all(), function($msj){

			$msj->subject('Correo de Contacto');
			$msj->to('boutiqueyoyo@gmail.com');


		});
		return redirect('/')->with('message','Mensaje enviado correctamente');
		 // Session::flash('message','Mensaje enviado correctamente');
		 // return  redirect()->route('Contact.index');
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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
		//
	}

}
