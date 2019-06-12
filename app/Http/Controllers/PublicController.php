<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PublicController extends Controller
{
   public function index()
   {
   	return view('public.es.inicio');
   }

   public function blog()
   {
      $data = DB::table('blogs')
         ->select('blogs.descripcioncorta','blogs.fechaPublicacion','blogs.id','blogs.titulo','blogs.contenido','blogs.urlimagen','categoria_blogs.nombre as tipoblog')
         ->join('categoria_blogs','categoria_blogs.id','=','blogs.categoria_blog_id')
         ->get();

      //  dd($data);

      return view("public.es.blog",['data' =>$data]);
   }


}
