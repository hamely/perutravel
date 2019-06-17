<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemultimediaRequest;
use App\Http\Requests\UpdatemultimediaRequest;
use App\Repositories\multimediaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
class multimediaController extends AppBaseController
{
    /** @var  multimediaRepository */
    private $multimediaRepository;

    public function __construct(multimediaRepository $multimediaRepo)
    {
        $this->multimediaRepository = $multimediaRepo;
    }

    /**
     * Display a listing of the multimedia.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $multimedia = $this->multimediaRepository->all();

        return view('multimedia.index')
            ->with('multimedia', $multimedia);
    }

    /**
     * Show the form for creating a new multimedia.
     *
     * @return Response
     */
    public function create()
    {
        return view('multimedia.create');
    }

    /**
     * Store a newly created multimedia in storage.
     *
     * @param CreatemultimediaRequest $request
     *
     * @return Response
     */
    public function store(CreatemultimediaRequest $request)
    {
        $input = $request->all();

        // dd($request->all());
        $multimedia = $this->multimediaRepository->create($input);

        Flash::success('Multimedia saved successfully.');

        return redirect(route('multimedia.index'));
    }

    /**
     * Display the specified multimedia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $multimedia = $this->multimediaRepository->find($id);

        if (empty($multimedia)) {
            Flash::error('Multimedia not found');

            return redirect(route('multimedia.index'));
        }

        return view('multimedia.show')->with('multimedia', $multimedia);
    }

    /**
     * Show the form for editing the specified multimedia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $multimedia = $this->multimediaRepository->find($id);

        if (empty($multimedia)) {
            Flash::error('Multimedia not found');

            return redirect(route('multimedia.index'));
        }

        return view('multimedia.edit')->with('multimedia', $multimedia);
    }

    /**
     * Update the specified multimedia in storage.
     *
     * @param int $id
     * @param UpdatemultimediaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemultimediaRequest $request)
    {
        $multimedia = $this->multimediaRepository->find($id);

        if (empty($multimedia)) {
            Flash::error('Multimedia not found');

            return redirect(route('multimedia.index'));
        }

        $multimedia = $this->multimediaRepository->update($request->all(), $id);

        Flash::success('Multimedia updated successfully.');

        return redirect(route('multimedia.index'));
    }

    /**
     * Remove the specified multimedia from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $multimedia = $this->multimediaRepository->find($id);

        if (empty($multimedia)) {
            Flash::error('Multimedia not found');

            return redirect(route('multimedia.index'));
        }


        $this->multimediaRepository->delete($id);

        Flash::success('Multimedia deleted successfully.');

        return redirect(route('multimedia.index'));

     
    }


    public function storeImagen(Request $request)
    {
        
        return $request->file('file');
         // $files = $request->file('file');
         // foreach($files as $file)
         // {
         //    $fileName = time().'.'.$file->getClientOriginalName();
         //    $size = $file->getClientSize();
         //    $ruta = '/public/multimedia/'.$fileName;
         //    $file->move($path, $fileName);

         //    Imagenes::create([
         //        'multimedia_id'=> $request->id,
         //        'url'=>$ruta,
         //      ]);
         // }

     
    }   

    public function saveContenidoMultimedia(Request $request)
    {

         $input = $request->all();

        // dd($request->all());
         $multimedia = $this->multimediaRepository->create($input);

        // $user = Auth::user();
        // $usuarioId=$user->id;

       
        // $data = new Blog;
        // $data->categoria_blog_id = $request->categoria_blog_id;
   
        // $data->titulo = $request->titulo;
        // $data->descripcioncorta= $request->descripcioncorta;
        // $data->url = Str::slug($request['titulo']);
        // $data->fechaPublicacion = $request->fechaPublicacion;
        // $data->estado = '1';
        // $data->contenido=$request->contenido;
        // $data->autor=$request->autor;
        // $data->contador= '';
        // $data->usuario_id=$usuarioId;
        // $data->urlimagen='1.jpg';
                  
        // $data->save();
         $id=DB::table('multimedia')->max('id');

         return response()->json(['id'=>$id]);


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
