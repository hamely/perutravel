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

class alojamientoController extends AppBaseController
{
    /** @var  alojamientoRepository */
    private $alojamientoRepository;

    public function __construct(alojamientoRepository $alojamientoRepo, CategoriaAlojamientoRepository $categoriaAlojamientoRepo)
    {
        $this->alojamientoRepository = $alojamientoRepo;
        $this->categoriaAlojamientoRepository = $categoriaAlojamientoRepo;
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
        $alojamientos = $this->alojamientoRepository->all();

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
        $Categoria = $this->categoriaAlojamientoRepository->select("id","name")->get();
       

        return view('alojamientos.create',compact('Categoria'));

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
