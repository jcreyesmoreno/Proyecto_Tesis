<?php

	class ExcelController extends Controller{
		public function saveExcel(){
			$fecha_inicio = Input::get("inicio"); //2016-02
			$fecha_cierre = Input::get("cierre");

			$ruta = "../public/excel_alumnos";
			$name = "nombre.xls";

			Input::file("excel")->move($ruta,$name);

			if(Sentry::check()){
				$nombre_fichero = $ruta.'/'.$name;
				if (file_exists($nombre_fichero)) {
				  $Array = Excel::load($nombre_fichero)->calculate()->toArray();
				  // return $Array

				  if ($Array) {
				  	if (array_key_exists('Hoja1', $Array)) {
						$List = $Array['Hoja1'];
				  	} else {
				  		$List = $Array;
				  	}
				  } else {
				  	return 'Array de excel nulos';
				  }

				  for ($i = 1; $i <  count($List); $i++) {

				  	try{

				  	  $user = Sentry::register(array(
			        	'email'    => $List[$i]['1'].'@itmina.com.mx',
			        	'password' => $List[$i]['2'].'',
			        	'first_name' => $List[$i]['5'].'', 
			        	'last_name' => $List[$i]['3'].' '.$List[$i]['4'],
			        	'activated' => true,
			        	'permissions' => array('user' => 1)
					    ));

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
	}

?>