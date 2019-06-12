<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Blog;

class PublicController extends Controller
{
   public function index()
   {
   	return view('public.es.inicio');
   }

   public function blog()
   {
      $data = DB::table('blogs')
         ->select('blogs.url','blogs.descripcioncorta','blogs.fechaPublicacion','blogs.id','blogs.titulo','blogs.contenido','blogs.urlimagen','categoria_blogs.nombre as tipoblog')
         ->join('categoria_blogs','categoria_blogs.id','=','blogs.categoria_blog_id')
         ->get();

      $categoria = DB::table('categoria_blogs')
         ->select('*') 
         ->get();


      return view("public.es.blog.blog",['data' =>$data,'categoria'=>$categoria]);
   }

   public function detalleBlog($url)
   {
      $detalleBlog = Blog::where('url', '=', $url)->get()[0];
      // dd($detalleBlog);
      return view('public.es.blog.detalleBlog',['detalleBlog'=>$detalleBlog]);
   }

   public function blogPorCategoria($categoria)
   {

      return view('public.es.blog.blogPorCategoria');
   }
}
