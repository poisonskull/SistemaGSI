<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\Amenaza;
use DB;
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
        $amenazas = Amenaza::all();
       // $articles = DB::table('noticia')
       //         ->join('amenaza', 'noticia.nivel', '=', 'amenaza.nivel')
       //         ->select('amenaza.nombre','noticia.nombre','amenaza.nivel')
       //         ->get();
       
        foreach ($noticias as $noticia) {
            $noticia->amenaza_01 = $amenazas->find($noticia->amenaza_01)->nombre;
            $noticia->amenaza_02 = $amenazas->find($noticia->amenaza_02)->nombre;
            $noticia->amenaza_03 = $amenazas->find($noticia->amenaza_03)->nombre;

        }
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
