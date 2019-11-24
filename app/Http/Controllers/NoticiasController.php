<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class NoticiasController extends Controller
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

        $noticias = Noticia::latest()->paginate(5);
  
        return view('noticias',compact('noticias'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function destroy(Product $product)
    {
        $noticias->delete();
  
        return redirect()->route('noticias')
                        ->with('success','Product deleted successfully');
    }

    
}
