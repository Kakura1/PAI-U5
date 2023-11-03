<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class get_controler extends Controller
{
    public function saludo($nombre,$apellido = null){
        if($apellido){
            return view('saludo_nombre_apellido',['nombre' => $nombre, 'apellido' => $apellido]);
        } else { 
            return view('saludo_nombre',['nombre' => $nombre]);
        }
    }

    public function suma($n1,$n2){
        return $n1 + $n2;
    }

    public function resta($n1,$n2){
        return $n1 - $n2;
    }
    public function multiplicacion($n1,$n2){
        return $n1 * $n2;
    }
    public function division($n1,$n2){
        return $n1 / $n2;
    }
}