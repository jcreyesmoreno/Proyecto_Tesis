<?php

	class UserController extends Controller{

	public function registrerUser(){	
		$user = Sentry::register(array(
	    'email'    => 'wolverine1401@itmina.com.mx',
	    'password' => 'root',
	    'permissions' => array('admin');
	  ));	
	}

	public function loginUser(){
		
		try{
			$number = Input::get("number");
			$password = Input::get("passwd");

	    	// Set login credentials
	    	$credentials = array(
	        'email'    => $number.'@itmina.com.mx',
	        'password' => $password
	    	);

	    	// Try to authenticate the user
	   		$user = Sentry::authenticate($credentials, false);

	   		if($user->hasAccess('admin')){
	   			Redirect::to('/admin');
	   		}else{
	   			Redirect::to('/buscar');
	   		}
			
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

	public function addUserExcel () {
		$nombre_fichero = '../app/alumnos.xls';

		if (file_exists($nombre_fichero)) {
		  $Array = Excel::load($nombre_fichero)->calculate()->toArray();
		  // return $Array 
		  $List = $Array['Hoja1'];
		  for ($i = 1; $i <  count($List); $i++) {

		  	try{

		  	  $user = Sentry::register(array(
	        	'email'    => $List[$i]['1'].'@itmina.com.mx',
	        	'password' => $List[$i]['2'].'',
	        	'first_name' => $List[$i]['5'].'', 
	        	'last_name' => $List[$i]['3'].' '.$List[$i]['4'],
	        	'permissions' => array('user');
			    ));

			    $User= Sentry::findUserById($user->id);

	    		$activationCode = $User->getActivationCode();
	    		$User->attemptActivation($activationCode);

	    		print "Usuario: ".$i;

			  }catch (Cartalyst\Sentry\Users\UserNotFoundException $e){
			  }catch (Cartalyst\Sentry\Users\UserAlreadyActivatedException $e){
			  }catch (Cartalyst\Sentry\Users\LoginRequiredException $e){
		    }catch (Cartalyst\Sentry\Users\PasswordRequiredException $e){
				}catch (Cartalyst\Sentry\Users\UserExistsException $e){}

			}

			return "Fin";

		}else{
			return "el archivo no existe";
		}
	}
}

?>