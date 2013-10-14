<?php

	class UserController extends Controller{

	public function registrerUser(){	
	$user = Sentry::register(array(
        'email'    => 'wolverine1401@gmail.com',
        'password' => 'root',
    ));	
	}
	public function loginUser(){
		
			try{
				$email = Input::get("correo");
				$password = Input::get("passwd");

		    	// Set login credentials
		    	$credentials = array(
		        'email'    => $email,
		        'password' => $password
		    	);

		    	// Try to authenticate the user
		   		$user = Sentry::authenticate($credentials, false);

		   		return Redirect::to('/user');
			
			}catch (Cartalyst\Sentry\Users\LoginRequiredException $e){
				echo 'su E-mail es requerido.';
			}

			catch (Cartalyst\Sentry\Users\PasswordRequiredException $e){
				echo 'su contraseña es requerida.';
			}

			catch (Cartalyst\Sentry\Users\WrongPasswordException $e){
				echo 'contraseña incorrecta, intente de nuevo.';
			}

			catch (Cartalyst\Sentry\Users\UserNotFoundException $e){
				echo 'usuario no encontrado.';
			}

			catch (Cartalyst\Sentry\Users\UserNotActivatedException $e){
			echo 'User is not activated.';
			}

	}

	public function getViewAdmin(){
		
		if(Sentry::check()){
			return View::make('admin.user');
		}else{
			return Redirect::to('/admin');
		}
	}

	public function getExit(){
		Sentry::logout();
		return Redirect::to('/admin');
	}

	public function getAdmin(){
		if(Sentry::check()){
			return Redirect::to('/user');
		}else{
			return View::make('admin.admin');
		}		
	}

}

?>