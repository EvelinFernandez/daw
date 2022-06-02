<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index(){
       $categorias = \DB::table('categories')
       ->orderBy('category','ASC')
       ->get();
       $productos = \DB::table('nfts')
       ->orderBy('id','DESC')
       ->get();
      // dd($productos);
       return view('front.index')->with('categories',$categorias) ->with('nfts',$productos);
   }
   public function buscar(Request $request){
       $productos = \DB::table('nfts')
        ->orwhere('name','like','%'.$request->search.'%')
        ->orwhere('description','like','%'.$request->search.'%')
        ->orwhere('metadata','like','%'.$request->search.'%')
        ->get();
        return view('front.busqueda')
        ->with("nfts", $productos)
        ->with("filtro", $request->search);
   }
   public function detalles($slug){
        $productos = \DB::table('nfts')
        ->where('slug','=',$slug)
        ->first();
        return view('front.detalles')
        ->with('producto', $productos);

   }
}
