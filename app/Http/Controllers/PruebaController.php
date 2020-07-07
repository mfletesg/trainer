<?php

namespace LaraDex\Http\Controllers;

use LaraDex\Http\Controllers\Controller; //Usamos los controladores de laravel

class PruebaController extends Controller { //Definimos una clase de tipo controlador
    public function prueba($name){
        return 'Estoy dentro de prueba controller y recibi este parametro :v ' . $name;
    }
}
