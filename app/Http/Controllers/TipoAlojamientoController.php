<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoAlojamientoRequest;
use App\Http\Requests\UpdateTipoAlojamientoRequest;
use App\Repositories\TipoAlojamientoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TipoAlojamientoController extends AppBaseController
{
    /** @var  TipoAlojamientoRepository */
    private $tipoAlojamientoRepository;

    public function __construct(TipoAlojamientoRepository $tipoAlojamientoRepo)
    {
        $this->tipoAlojamientoRepository = $tipoAlojamientoRepo;
    }

    /**
     * Display a listing of the TipoAlojamiento.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoAlojamientos = $this->tipoAlojamientoRepository->all();

        return view('tipo_alojamientos.index')
            ->with('tipoAlojamientos', $tipoAlojamientos);
    }

    /**
     * Show the form for creating a new TipoAlojamiento.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_alojamientos.create');
    }

    /**
     * Store a newly created TipoAlojamiento in storage.
     *
     * @param CreateTipoAlojamientoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoAlojamientoRequest $request)
    {
        $input = $request->all();

        $tipoAlojamiento = $this->tipoAlojamientoRepository->create($input);

        Flash::success('Tipo Alojamiento saved successfully.');

        return redirect(route('tipoAlojamientos.index'));
    }

    /**
     * Display the specified TipoAlojamiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoAlojamiento = $this->tipoAlojamientoRepository->find($id);

        if (empty($tipoAlojamiento)) {
            Flash::error('Tipo Alojamiento not found');

            return redirect(route('tipoAlojamientos.index'));
        }

        return view('tipo_alojamientos.show')->with('tipoAlojamiento', $tipoAlojamiento);
    }

    /**
     * Show the form for editing the specified TipoAlojamiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoAlojamiento = $this->tipoAlojamientoRepository->find($id);

        if (empty($tipoAlojamiento)) {
            Flash::error('Tipo Alojamiento not found');

            return redirect(route('tipoAlojamientos.index'));
        }

        return view('tipo_alojamientos.edit')->with('tipoAlojamiento', $tipoAlojamiento);
    }

    /**
     * Update the specified TipoAlojamiento in storage.
     *
     * @param int $id
     * @param UpdateTipoAlojamientoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoAlojamientoRequest $request)
    {
        $tipoAlojamiento = $this->tipoAlojamientoRepository->find($id);

        if (empty($tipoAlojamiento)) {
            Flash::error('Tipo Alojamiento not found');

            return redirect(route('tipoAlojamientos.index'));
        }

        $tipoAlojamiento = $this->tipoAlojamientoRepository->update($request->all(), $id);

        Flash::success('Tipo Alojamiento updated successfully.');

        return redirect(route('tipoAlojamientos.index'));
    }

    /**
     * Remove the specified TipoAlojamiento from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoAlojamiento = $this->tipoAlojamientoRepository->find($id);

        if (empty($tipoAlojamiento)) {
            Flash::error('Tipo Alojamiento not found');

            return redirect(route('tipoAlojamientos.index'));
        }

        $this->tipoAlojamientoRepository->delete($id);

        Flash::success('Tipo Alojamiento deleted successfully.');

        return redirect(route('tipoAlojamientos.index'));
    }
}
