<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activo;
use DB;

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

        $activos = Activo::latest()->paginate(8);
        //return view('activos');
        return view('activos',compact('activos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function activos_switch(){
        $activos = Activo::latest()->paginate(8);
         return view('activos',compact('activos'));
            //->with('i', (request()->input('page', 1) - 1) * 5);

         return view('activos',compact('activos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function getAmenazas($id,$nombre){
          $amenazas = DB::table('activo_amenaza')
                ->join('amenaza', 'activo_amenaza.amenaza_id', '=', 'amenaza.id')
                ->where('activo_amenaza.activo_id', '=', $id)
                ->select('amenaza.nombre','amenaza.nivel','amenaza.control')
                ->get();

        return view('activo_amenaza' ,compact('amenazas'))->with('id',$id)->with('nombre',$nombre);
    }
}
