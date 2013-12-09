<?php

class ContactController extends Controller {

	public function post_contact(){

		$input = Input::all();

		$rules = array(
			'nombre' => 'required',
			'email' => 'required|email',
			'mensaje' => 'required',
			);

		$validator = validator::make($input, $rules);

		if($validator->fails())
	}
		return Redirect::back()->withErrors($validator)->('estado', 'no enviado');
	}
	else{
		$datos = array(
			'nombre' => Input::get('nombre'),
			'email' => Input::get('email'),
			'mensaje' =>Input::get('mensaje')			)
	};

	Mail::send('emails.contact'), $datos, function($message)
	{
		$message->from('wolverine1401@gmail.com', 'laravel');

		$message->to (Input::get('email'))->subject(Input::get('asunto'));
	});

	return Redirect::to('contact')->whith('estado', 'mensaje enviado correctamente');
}
}
}