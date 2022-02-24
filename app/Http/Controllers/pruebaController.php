<?php

namespace App\Http\Controllers;

use app\Http\Controllers\Controller;

class pruebaController extends Controller {
    public function prueba($param){
        return 'Estoy dentro de prueba controller'.$param;
    }

}