<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatealojamientoRequest;
use App\Http\Requests\UpdatealojamientoRequest;
use App\Repositories\alojamientoRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CategoriaAlojamientoRepository;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
class alojamientoController extends AppBaseController
{
    /** @var  alojamientoRepository */
    private $alojamientoRepository;

    public function __construct(alojamientoRepository $alojamientoRepo)
    {
        $this->alojamientoRepository = $alojamientoRepo;
    }

    /**
     * Display a listing of the alojamiento.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $alojamientos = $this->alojamientoRepository->all();

        $alojamientos = DB::table('alojamientos')
                         ->select('alojamientos.id','alojamientos.nombre','ubigeos.departamento','categoria_alojamientos.name as nameCategoria','tipo_alojamientos.name as nameTipoAlo')
                         ->join('categoria_alojamientos', 'categoria_alojamientos.id', '=', 'alojamientos.id_categoria')
                         ->join('tipo_alojamientos', 'tipo_alojamientos.id', '=', 'alojamientos.id_tipo_alojamiento')
                         ->join('ubigeos', 'alojamientos.id_ubigeo','=','ubigeos.id')
                         ->get();
    
              

        return view('alojamientos.index')
            ->with('alojamientos', $alojamientos);
    }

    /**
     * Show the form for creating a new alojamiento.
     *
     * @return Response
     */
    public function create()
    {
       
        $categoria = DB::table('categoria_alojamientos')
                    ->select('id', 'name')
                    ->get();
        $tipo_alojamientos = DB::table('tipo_alojamientos')
                    ->select('id', 'description')
                    ->get();
        $ubigeo = DB::table('ubigeos')
                    ->select('id','departamento','provincia','distrito')
                    ->get();
  
        return view('alojamientos.create',['categoria'=>$categoria,'tipo_alojamientos'=> $tipo_alojamientos,'ubigeo'=> $ubigeo]);
    }

    /**
     * Store a newly created alojamiento in storage.
     *
     * @param CreatealojamientoRequest $request
     *
     * @return Response
     */
    public function store(CreatealojamientoRequest $request)
    {
        $input = $request->all();

        $alojamiento = $this->alojamientoRepository->create($input);

        Flash::success('Alojamiento saved successfully.');

        return redirect(route('alojamientos.index'));
    }

    /**
     * Display the specified alojamiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $alojamiento = $this->alojamientoRepository->find($id);

        if (empty($alojamiento)) {
            Flash::error('Alojamiento not found');

            return redirect(route('alojamientos.index'));
        }

        return view('alojamientos.show')->with('alojamiento', $alojamiento);
    }

    /**
     * Show the form for editing the specified alojamiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $alojamiento = $this->alojamientoRepository->find($id);

        if (empty($alojamiento)) {
            Flash::error('Alojamiento not found');

            return redirect(route('alojamientos.index'));
        }

        return view('alojamientos.edit')->with('alojamiento', $alojamiento);
    }

    /**
     * Update the specified alojamiento in storage.
     *
     * @param int $id
     * @param UpdatealojamientoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatealojamientoRequest $request)
    {
        $alojamiento = $this->alojamientoRepository->find($id);

        if (empty($alojamiento)) {
            Flash::error('Alojamiento not found');

            return redirect(route('alojamientos.index'));
        }

        $alojamiento = $this->alojamientoRepository->update($request->all(), $id);

        Flash::success('Alojamiento updated successfully.');

        return redirect(route('alojamientos.index'));
    }

    /**
     * Remove the specified alojamiento from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $alojamiento = $this->alojamientoRepository->find($id);

        if (empty($alojamiento)) {
            Flash::error('Alojamiento not found');

            return redirect(route('alojamientos.index'));
        }

        $this->alojamientoRepository->delete($id);

        Flash::success('Alojamiento deleted successfully.');

        return redirect(route('alojamientos.index'));
    }
}
