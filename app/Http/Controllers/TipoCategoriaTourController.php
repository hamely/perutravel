<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoCategoriaTourRequest;
use App\Http\Requests\UpdateTipoCategoriaTourRequest;
use App\Repositories\TipoCategoriaTourRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
class TipoCategoriaTourController extends AppBaseController
{
    /** @var  TipoCategoriaTourRepository */
    private $tipoCategoriaTourRepository;

    public function __construct(TipoCategoriaTourRepository $tipoCategoriaTourRepo)
    {
        $this->tipoCategoriaTourRepository = $tipoCategoriaTourRepo;
    }

    /**
     * Display a listing of the TipoCategoriaTour.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $tipoCategoriaTours = $this->tipoCategoriaTourRepository->all();
        $tipoCategoriaTours = DB::table('languages')
        ->select ('languages.nombre as nombreleng','tipo_categoria_tours.id','tipo_categoria_tours.alias','tipo_categoria_tours.nombre','tipo_categoria_tours.slug','tipo_categoria_tours.estado','tipo_categoria_tours.descripcion')
        ->join('tipo_categoria_tours','tipo_categoria_tours.lenguaje_id','=','languages.id')
        ->get();

        return view('tipo_categoria_tours.index')
            ->with('tipoCategoriaTours', $tipoCategoriaTours);
    }

    /**
     * Show the form for creating a new TipoCategoriaTour.
     *
     * @return Response
     */
    public function create()
    {
        $opcion=0;

        $language = DB::table('languages')
                    ->select('id','nombre','abrr')
                    ->get();

        return view('tipo_categoria_tours.create',['language'=>$language,'opcion'=>$opcion]);
    }

    /**
     * Store a newly created TipoCategoriaTour in storage.
     *
     * @param CreateTipoCategoriaTourRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoCategoriaTourRequest $request)
    {
        $input = $request->all();

        $tipoCategoriaTour = $this->tipoCategoriaTourRepository->create($input);

        Flash::success('Tipo Categoria Tour saved successfully.');

        return redirect(route('tipoCategoriaTours.index'));
    }

    /**
     * Display the specified TipoCategoriaTour.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoCategoriaTour = $this->tipoCategoriaTourRepository->find($id);

        if (empty($tipoCategoriaTour)) {
            Flash::error('Tipo Categoria Tour not found');

            return redirect(route('tipoCategoriaTours.index'));
        }

        return view('tipo_categoria_tours.show')->with('tipoCategoriaTour', $tipoCategoriaTour);
    }

    /**
     * Show the form for editing the specified TipoCategoriaTour.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoCategoriaTour = $this->tipoCategoriaTourRepository->find($id);

        $opcion=1;

        if (empty($tipoCategoriaTour)) {
            Flash::error('Tipo Categoria Tour not found');

            return redirect(route('tipoCategoriaTours.index'));
        }

        $language = DB::table('languages')
        ->select('id','nombre','abrr')
        ->get();
        // return view('tipo_categoria_tours.edit')->with('tipoCategoriaTour', $tipoCategoriaTour);
        return view('tipo_categoria_tours.edit',['language'=>$language,'opcion'=>$opcion,'tipoCategoriaTour'=>$tipoCategoriaTour]);
    }

    /**
     * Update the specified TipoCategoriaTour in storage.
     *
     * @param int $id
     * @param UpdateTipoCategoriaTourRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoCategoriaTourRequest $request)
    {
        $tipoCategoriaTour = $this->tipoCategoriaTourRepository->find($id);

        if (empty($tipoCategoriaTour)) {
            Flash::error('Tipo Categoria Tour not found');

            return redirect(route('tipoCategoriaTours.index'));
        }

        $tipoCategoriaTour = $this->tipoCategoriaTourRepository->update($request->all(), $id);

        Flash::success('Tipo Categoria Tour updated successfully.');

        return redirect(route('tipoCategoriaTours.index'));
    }

    /**
     * Remove the specified TipoCategoriaTour from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoCategoriaTour = $this->tipoCategoriaTourRepository->find($id);

        if (empty($tipoCategoriaTour)) {
            Flash::error('Tipo Categoria Tour not found');

            return redirect(route('tipoCategoriaTours.index'));
        }

        $this->tipoCategoriaTourRepository->delete($id);

        Flash::success('Tipo Categoria Tour deleted successfully.');

        return redirect(route('tipoCategoriaTours.index'));
    }
}
