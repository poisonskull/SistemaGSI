<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Amenaza;

class AmenazasController extends Controller
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

        $amenazas = Amenaza::latest()->paginate(5);
  
        return view('amenazas',compact('amenazas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    //public function create()
    //{
    //   return view('crear_amenaza');
    //} 

   // public function show(Product $product)
   // {
   //     return view('amenazas.show',compact('amenazas'));
   // }


    public function destroy(Product $product)
    {
        $amenazas->delete();
  
        return redirect()->route('amenazas')
                        ->with('success','Product deleted successfully');
    }


}
