<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function index()
   {
   	return view('public.es.inicio');
   }

   public function blog()
   {
      return view('public.es.blog');
   }
}
