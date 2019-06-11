<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Repositories\BlogRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Blog;
use Flash;
use Session;
use Response;
use DB;use Illuminate\Support\Str as Str; 
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BlogController extends AppBaseController
{
    /** @var  BlogRepository */
    private $blogRepository;

    public function __construct(BlogRepository $blogRepo)
    {
        $this->blogRepository = $blogRepo;
    }

    /**
     * Display a listing of the Blog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $blogs = $this->blogRepository->all();

        $blogs=DB::table('blogs')
            ->select('categoria_blogs.nombre as categoriablog','blogs.id','usuario_id','categoria_blog_id','titulo','url','fechaPublicacion','estado','contenido','contador')
            ->join('categoria_blogs','categoria_blogs.id','=','blogs.categoria_blog_id')
            ->get();

        return view('blogs.index')
            ->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new Blog.
     *
     * @return Response
     */
    public function create()
    {
        $opcion=0;


        $categoria = DB::table('categoria_blogs')
            ->select('id', 'nombre','descripcion')
            ->get();

        $fechaA = Carbon::now('America/Lima');
        $date=$fechaA->format('Y-m-d');
        
        // dd($fechaSistema1);
        return view('blogs.create',['opcion'=>$opcion,'categoria'=>$categoria,'date'=>$date]);
    }

    /**
     * Store a newly created Blog in storage.
     *
     * @param CreateBlogRequest $request
     *
     * @return Response
     */
    public function store(CreateBlogRequest $request)
    {
        $user = Auth::user();
        $usuarioId=$user->id;

       
        $data = new Blog;
        $data->categoria_blog_id = $request->categoria_blog_id;
   
        $data->titulo = $request->titulo;
        $data->url = Str::slug($request['titulo']);
        $data->fechaPublicacion = $request->fechaPublicacion;
        $data->estado = '1';
        $data->contenido=$request->contenido;
        $data->autor=$request->autor;
        $data->contador= '';
        $data->usuario_id=$usuarioId;
                  
        $data->save();

        Session::flash('Mensaje','Se guardo correctamente el blog');
        return redirect()->route('blogs.index');
        

        // $input = $request->all();

        // $blog = $this->blogRepository->create($input);

        // Flash::success('Blog saved successfully.');

        // return redirect(route('blogs.index'));
    }

    /**
     * Display the specified Blog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified Blog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
      
        $opcion=1;


        $categoria = DB::table('categoria_blogs')
            ->select('*')
            ->get();
   
        $blog = $this->blogRepository->find($id); //ya obtien la data del id del blog

        if (empty($blog)) {
            Flash::error('Blog not found');
            flash::error('blog ');
            return redirect(route('blogs.index'));
        }

        // dd($blog);
        return view('blogs.edit',['blog'=>$blog,'categoria'=>$categoria,'opcion'=>$opcion]);
        // return view('blogs.edit')->with('blog', $blog);
    }

    /**
     * Update the specified Blog in storage.
     *
     * @param int $id
     * @param UpdateBlogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlogRequest $request)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        $blog = $this->blogRepository->update($request->all(), $id);

        Flash::success('Blog updated successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified Blog from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        $this->blogRepository->delete($id);

        Flash::success('Blog deleted successfully.');

        return redirect(route('blogs.index'));
    }


    public function indexImagen()
    {

    }
    public function destroyImagen()
    {
        
    }
    public function storeImagen(Request $request)
    {
        
        $file = $request->file('file');
        $path = public_path() . '/public/blog';


        $fileName = uniqid() . $file->getClientOriginalName();

        $file->move($path, $fileName);

        $id=DB::table('blogs')->max('id');

        $blog = Blog::find($id);

        $blog->urlimagen = '/public/blog'.'/'.$fileName;

        $blog->save();

     
    }   

    public function saveContenidoBlog(Request $request)
    {

        $user = Auth::user();
        $usuarioId=$user->id;

       
        $data = new Blog;
        $data->categoria_blog_id = $request->categoria_blog_id;
   
        $data->titulo = $request->titulo;
        $data->url = Str::slug($request['titulo']);
        $data->fechaPublicacion = $request->fechaPublicacion;
        $data->estado = '1';
        $data->contenido=$request->contenido;
        $data->autor=$request->autor;
        $data->contador= '';
        $data->usuario_id=$usuarioId;
        $data->urlimagen='1.jpg';
                  
        $data->save();


    }

    public function saveCambioImagenBlog(Request $request)
    {
        $file = $request->file('file');
        $path = public_path() . '/public/blog';


        $fileName = uniqid() . $file->getClientOriginalName();

        $file->move($path, $fileName);

        $blog = Blog::find($request->id);

        $blog->urlimagen = '/public/blog'.'/'.$fileName;

        $blog->save();
    }
}
