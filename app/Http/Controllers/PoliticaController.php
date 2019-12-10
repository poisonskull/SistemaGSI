<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticaController extends Controller
{
     public function index()
    {
        return view('politica_global');
    }

        public function especifica()
    {
        return view('politica_especifica');
    }
        public function aplicacion()
    {
        return view('politica_app_especifica');
    }
        public function control()
    {
        return view('control_asociado');
    }
}
