<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetoursRequest;
use App\Http\Requests\UpdatetoursRequest;
use App\Repositories\toursRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Repositories\itinerariosRepository;
use Flash;
use Response;
use DB;
use Illuminate\Support\Str as Str; 
class toursController extends AppBaseController
{
    /** @var  toursRepository */
    private $toursRepository;

    public function __construct(toursRepository $toursRepo,itinerariosRepository $itinerariosRepo)
    {
        $this->toursRepository = $toursRepo;
        $this->itinerariosRepository = $itinerariosRepo;
    }

    /**
     * Display a listing of the tours.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $tours = $this->toursRepository->all();

       

        $tours = DB::table('multimedia')
            ->select ('multimedia.nombre as nombremultimedia','tours.id','tours.nombre','tours.slug','tours.img','tours.descripcion','tours.estado','tours.principal','tours.organizacion')
            ->join('tours','tours.multimedia_id','=','multimedia.id')
            ->get();

        //dd($tours);
        return view('tours.index')->with('tours', $tours);
    }

    /**
     * Show the form for creating a new tours.
     *
     * @return Response
     */
    public function create()
    {
        $opcion=0;

          $dataCategoria = DB::table('languages')
                    ->select('tipo_categoria_tours.nombre','tipo_categoria_tours.id','languages.abrr')
                    ->join('tipo_categoria_tours', 'tipo_categoria_tours.lenguaje_id', '=', 'languages.id')
                    ->where('languages.abrr','es' )
                    ->get();
 

        $multimedia=DB::table('multimedia')
                    ->select('id','nombre')
                    ->get();

        return view('tours.create',['opcion'=>$opcion, 'multimedia'=>$multimedia,'dataCategoria'=>$dataCategoria]);
    }

    /**
     * Store a newly created tours in storage.
     *
     * @param CreatetoursRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $file = $request->file('file');
        $path = public_path() . '/public/tours';
        $fileName = uniqid() . $file->getClientOriginalName();
   
       
       DB::table('tours')
                ->where('id', '=',  $request->id)
                ->update([
                    'img' => '/public/tours'.'/'.$fileName,
                ]);
         $file->move($path, $fileName);

    }

    public function storeTours(CreatetoursRequest $request)
    {

         DB::table('tours')
                ->insert([
                    'nombre' => $request->nombre,
                    'img' => '1.jpg',
                    'descripcion' => $request->descripcion,
                    'estado' => '1',
                    'principal' => '1',
                    'slug' => Str::slug($request['nombre']),
                    'multimedia_id' => $request->multimedia_id,
                    'organizacion' =>  $request->organizacion,
                ]);

        $id=DB::table('tours')->max('id');

       DB::table('tour_categoria')
                ->insert([
                    'tour_id' => $id,
                    'categoria_id' => $request->categoria_id,
                ]);

         return response()->json(['id'=>$id]);
    }

    /**
     * Display the specified tours.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tours = $this->toursRepository->find($id);

        if (empty($tours)) {
            Flash::error('Tours not found');

            return redirect(route('tours.index'));
        }

        return view('tours.show')->with('tours', $tours);
    }

    /**
     * Show the form for editing the specified tours.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tours = $this->toursRepository->find($id);
        
        $opcion=1;
        if (empty($tours)) {
            Flash::error('Tours not found');

            return redirect(route('tours.index'));
        }

        $multimedia=DB::table('multimedia')
        ->select('id','nombre')
        ->get();

        return view('tours.edit',['opcion'=>$opcion, 'multimedia'=>$multimedia,'tours'=>$tours]);

        // return view('tours.edit')->with('tours', $tours);
    }

    /**
     * Update the specified tours in storage.
     *
     * @param int $id
     * @param UpdatetoursRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetoursRequest $request)
    {
        $tours = $this->toursRepository->find($id);

        if (empty($tours)) {
            Flash::error('Tours not found');

            return redirect(route('tours.index'));
        }

        $tours = $this->toursRepository->update($request->all(), $id);

        Flash::success('Tours updated successfully.');

        return redirect(route('tours.index'));
    }

    /**
     * Remove the specified tours from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tours = $this->toursRepository->find($id);

        if (empty($tours)) {
            Flash::error('Tours not found');

            return redirect(route('tours.index'));
        }

        $this->toursRepository->delete($id);

        Flash::success('Tours deleted successfully.');

        return redirect(route('tours.index'));
    }
 
}
