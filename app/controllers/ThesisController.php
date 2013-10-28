<?php

class ThesisController extends Controller{
	public function getThesis(){
		$addThesis = Input('nombre');
		if(Sentry::check()){
			$addThesis = new Thesis;
			$addThesis->title = 'nombre de la tesis';
		}else{
			echo "error";

		}
	}

	public function agregarTesis(){
		if(Sentry::check()){
			$title = Input::get("nombre");
			$author = Input::get("autor");
			$career = Input::get("carrera");
			$year = Input::get("year");

			$ruta = "";
			$prefijo = "";

			if($career == "Ambiental"){
				$ruta = "../public/pdf/AMBIENTAL/TIA".$year;
				$prefijo  = "TIA";
			}

			else if($career == "Gestion"){
				$ruta = "../public/pdf/ADMINISTRACION/TA".$year;
				$prefijo  = "TA";
			}

			else if($career == "Electromecanica"){
				$ruta = "../public/pdf/ELECTROMECANICA/TIEM".$year;
				$prefijo  = "TIEM";
			}

			else if($career == "Electronica"){
				$ruta = "../public/pdf/ELECTRONICA/TIE".$year;
				$prefijo  = "TIE";
			}

			else if($career == "Industrial"){
				$ruta = "../public/pdf/INDUSTRIAL/TII".$year;
				$prefijo  = "TII";
			}

			else if($career == "Quimica"){
				$ruta = "../public/pdf/QUIMICA/TIQ".$year;
				$prefijo  = "TIQ";
			}

			else if($career == "Sistemas"){
				$ruta = "../public/pdf/SISTEMAS/TISC".$year;
				$prefijo  = "TISC";
			}

			$ModelThesis = new Thesis;
			$ModelThesis->title = $title;
			$ModelThesis->author = $author;
			$ModelThesis->career = $career;
			$ModelThesis->year = $year;
			
			//Se Agregar los Numeros al Archivo
			$y = substr($year, 2, 3);
			$indice = $prefijo.$ModelThesis->id.'-'.$y.'-INDICE.pdf';
			$prologo = $prefijo.$ModelThesis->id.'-'.$y.'-PROLOGO.pdf';
			$tesis = $prefijo.$ModelThesis->id.'-'.$y.'-TESIS.pdf';

			Input::file("indice")->move($ruta,$prefijo.$indice);
			Input::file("prologo")->move($ruta,$prefijo.$prologo);
			Input::file("tesis")->move($ruta,$prefijo.$tesis);

			$ModelThesis->index = $ruta.'/'.$indice;
			$ModelThesis->prologue = $ruta.'/'.$prologo;
			$ModelThesis->thesis = $ruta.'/'.$tesis;

			if($ModelThesis->save()){
				return "Tesis Guardada";
			}else{
				return "Error al Guardar la Tesis";
			}
				
		}else{
			return Redirect::to('/');
		}

	}

	public function buscarTesis(){
		if(Sentry::check()){
			$title = Input::get("nombre");
			$author = Input::get("autor");
			$career = Input::get("carrera");
			$year = Input::get("year");

			$search = Thesis::whereRaw('title = ? or author = ? or career = ? or year = ?',array($title,$author,$career,$year))->get();
			
			return View::make('thesis')->with('Thesis', $search);

		}else{
			return "no se encontro la Tesis";
		}
	}

	public function getTableTesis () {
		if(Sentry::check()){
			return View::make('thesis');
		}else{
			return "no se encontro la Tesis";
		}		
	}
		
}

?>