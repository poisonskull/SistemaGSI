<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activo;

class ActivosController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
       public function index()
    {

        $activos = Activo::latest()->paginate(5);
        //return view('activos');
        return view('activos',compact('activos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function getAmenazas($id){
         // $articles = DB::table('noticia')
       //         ->join('amenaza', 'noticia.nivel', '=', 'amenaza.nivel')
       //         ->select('amenaza.nombre','noticia.nombre','amenaza.nivel')
       //         ->get();

        return view('activo_amenaza')->with('id',$id);
    }
}
