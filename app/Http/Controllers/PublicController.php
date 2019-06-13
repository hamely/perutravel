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

   public function blog(Request $request)
   {
      
      
      $data = DB::table('blogs')
         ->select('blogs.url','blogs.descripcioncorta','blogs.fechaPublicacion','blogs.id','blogs.titulo','blogs.contenido','blogs.urlimagen','categoria_blogs.nombre as tipoblog')
         ->join('categoria_blogs','categoria_blogs.id','=','blogs.categoria_blog_id')
         ->paginate(2);

      $cultura = DB::table('blogs')
         ->select('blogs.url','blogs.descripcioncorta','blogs.fechaPublicacion','blogs.id','blogs.titulo','blogs.contenido','blogs.urlimagen','categoria_blogs.nombre as tipoblog')
         ->join('categoria_blogs','categoria_blogs.id','=','blogs.categoria_blog_id')
         ->where('categoria_blogs.nombre','=','cultura')
         ->paginate(2);

  

      if($request->ajax()) 
      {

          return response()->json(view("public.es.blog.principal_blog.pricipal_blog",compact('data'))->render());
      }


      $categoria = DB::table('categoria_blogs')
         ->select('*') 
         ->get();


      return view("public.es.blog.blog",compact('data','categoria','cultura'));
   }

   public function detalleBlog($url)
   {
      $detalleBlog = Blog::where('url', '=', $url)->get()[0];
      // dd($detalleBlog);
      return view('public.es.blog.detalleBlog',['detalleBlog'=>$detalleBlog]);
   }

   public function blogPorCategoria($categoria='',Request $request)
   {

      //Obtener el id de la categoria por nombre
      $idCategoria=DB::table('categoria_blogs')
      ->select('id')
      ->where('nombre','=',$categoria)
      ->get();
      
      $id=0;

         foreach($idCategoria as $item)
         {
            $id=$item->id;
         }
    

         $blog=DB::table('blogs')
            ->select('*')
            ->where('categoria_blog_id','=',$id)
            ->paginate(2);

            
         if($request->ajax()) 
         {
            
            return response()->json(view("public.es.blog.principal_blog.principal_blog_categoria",compact('blog'))->render());
         }

      return view('public.es.blog.blogPorCategoria',['blog'=>$blog,'categoria'=>$categoria]);
   }
}
