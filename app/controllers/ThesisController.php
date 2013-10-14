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

			if($career == "Ing. Ambiental"){
				$ruta = "AMBIENTAL/TIA".$year;
				$prefijo  = "TIA";
			}

			else if($career == "Ing. Gestión Empresarial"){
				$ruta = "../../../../../home/julio/Documentos/tesis/ADMINISTRACION/TA".$year;
				$prefijo  = "TA";
			}

			else if($career == "Ing. Electromecánica"){
				$ruta = "../../../../../home/julio/Documentos/tesis/ELECTROMECANICA/TIEM".$year;
				$prefijo  = "TIEM";
			}

			else if($career == "Ing. Electrónica"){
				$ruta = "../../../../../home/julio/Documentos/tesis/ELECTRONICA/TIE".$year;
				$prefijo  = "TIE";
			}

			else if($career == "Ing. Industrial"){
				$ruta = "../../../../../home/julio/Documentos/tesis/INDUSTRIAL/TII".$year;
				$prefijo  = "TII";
			}

			else if($career == "Ing. Química"){
				$ruta = "../../../../../home/julio/Documentos/tesis/QUIMICA/TIQ".$year;
				$prefijo  = "TIQ";
			}

			else if($career == "Ing. Sístemas Computacionales"){
				$ruta = "../../../../../home/julio/Documentos/tesis/SISTEMAS/TISC".$year;
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

			if(!Input::hasFile("indice")){
				return "Faltan Archivos File";
			}	

			if(!Input::hasFile("prologo")){
				return "Faltan Archivos File 2";
			}	

			if(!Input::hasFile("tesis")){
				return "Faltan Archivos File 3";
			}	

			Input::file("indice")->move($ruta, $indice);
			Input::file("prologo")->move($ruta, $prologo);
			Input::file("tesis")->move($ruta, $tesis);

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
}

?>