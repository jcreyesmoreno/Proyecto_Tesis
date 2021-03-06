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

                if($year != "" || $career != ""){    

                    $ruta = "";
                    $prefijo = "";

                    if($career == "AMBIENTAL"){
                        $ruta = "../public/pdf/AMBIENTAL/TIA".$year;
                        $prefijo  = "";
                    }

                    else if($career == "GESTION"){
                        $ruta = "../public/pdf/GESTION/TIGE".$year;
                        $prefijo  = "";
                    }

                    else if($career == "ELECTROMECANICA"){
                        $ruta = "../public/pdf/ELECTROMECANICA/TIEM".$year;
                        $prefijo  = "";
                    }

                    else if($career == "ELECTRONICA"){
                        $ruta = "../public/pdf/ELECTRONICA/TIE".$year;
                        $prefijo  = "";
                    }

                    else if($career == "INDUSTRIAL"){
                        $ruta = "../public/pdf/INDUSTRIAL/TII".$year;
                        $prefijo  = "";
                    }

                    else if($career == "QUIMICA"){
                        $ruta = "../public/pdf/QUIMICA/TIQ".$year;
                        $prefijo  = "";
                    }

                    else if($career == "SISTEMAS"){
                        $ruta = "../public/pdf/SISTEMAS/TISC".$year;
                        $prefijo  = "";
                    }

                    else if($career == "ADMINISTRACION"){
                        $ruta = "../public/pdf/ADMINISTRACION/TA".$year;
                        $prefijo  = "";
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
                        //return Redirect::to('/newtesis')->with('Message', 'La Tesis se Agrego Correctamente' );
                        return View::make('admin.alta')->with(array('Message' => 'La Tesis se Agrego Correctamente' , 'status' => 'success') );
                    }else{
                        //return "Error al Guardar la Tesis";
                        return View::make('admin.alta')->with(array('Message' => 'Error al Guardar la Tesis' , 'status' => 'danger' ));
                    }
                }/*else{
                    //return Redirect::to('/newtesis')->with('Message', 'Complete todo los Campos');
                    return View::make('admin.alta')->with(array('Message' => 'Complete todo los Campos', 'status' => 'warning'));
                }*/
                            
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

            $inputFields = array();
            $query = '';

            if ($title && $title != "") {
                $query = 'title = ?';
                array_push($inputFields, $title); 
            }

            if ($author && $author != '') {
                if ($query != '') {
                    $query = $query.' and author = ?';
                } else {
                    $query = $query.'author = ?';    
                }
                array_push($inputFields, $author);
            }

            if ($career && $career != '') {
                if ($query != '') {
                    $query = $query.' and career = ?';
                } else {
                    $query = $query.'career = ?';    
                }
                array_push($inputFields, $career);
            }

            if ($year && $year != '') {
                if ($query != '') {
                    $query = $query.' and year = ?';
                } else {
                    $query = $query.'year = ?';    
                }
                array_push($inputFields, $year);
            }

            if (count($inputFields) == 0) {
                return Redirect::to('/search');
            }

            $search = Thesis::whereRaw($query, $inputFields)->get();

            $user = Sentry::getUser()->permissions;
            $type='';

            if(isset($user['admin'])){
                $type='admin';
            }

            else if(isset($user['user'])){
                $type='user';
            }

            $fields = array();

            if ($title && $title != "") {
              $fields['title'] = $title;
            }

            if ($author && $author != "") {
              $fields['author'] = $author;
            }

            if ($career && $career != "") {
              $fields['career'] = $career;
            }

            if ($year && $year != "") {
              $fields['year'] = $year;
            }
            //retorna la vista thesis con un arreglo de tres variables (tesis y tipo de tipo string y fields que es el arreglo que contiene la informacio de tesis)
            return View::make('thesis')->with(array('Thesis'=>$search,'Type'=>$type, 'fields' => $fields));

        }else{
            return "no se encontro la Tesis";
        }
    }


    /*public function getTableTesis () {
        if(Sentry::check()){
                return View::make('thesis');
        }else{
                return "No se encontro la Tesis :(";
        }                
    }*/

    public function deleteTesis () {
        if(Sentry::check()){
            $id = Input::get("id");
            $Thesis = Thesis::find($id);
            $delete = Thesis::where("id", "=", $id)->delete();
            if($delete){

                $index = $Thesis->index;
                if (file_exists($index)) {
                    unlink($index);
                }

                $prologue = $Thesis->prologue;
                if (file_exists($prologue)) {
                    unlink($prologue);
                }

                $thesis = $Thesis->thesis;
                if (file_exists($thesis)) {
                    unlink($thesis);
                }                            

                //return Redirect::to('/searchtesis');
                return Response::json(array("status" => 200));
            }else{
                //return Redirect::to('/searchtesis');
                return Response::json(array("status" => 400, "message" => "La tesis no se pudo eliminar", "valor" => $id)); 
            }        
        }else{
            //return Redirect:: to("/");
            return Response::json(array("status" => 401));
        }
    }
                
}

?>
