<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtipo_habitacionRequest;
use App\Http\Requests\Updatetipo_habitacionRequest;
use App\Repositories\tipo_habitacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tipo_habitacionController extends AppBaseController
{
    /** @var  tipo_habitacionRepository */
    private $tipoHabitacionRepository;

    public function __construct(tipo_habitacionRepository $tipoHabitacionRepo)
    {
        $this->tipoHabitacionRepository = $tipoHabitacionRepo;
    }

    /**
     * Display a listing of the tipo_habitacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoHabitacions = $this->tipoHabitacionRepository->all();

        return view('tipo_habitacions.index')
            ->with('tipoHabitacions', $tipoHabitacions);
    }

    /**
     * Show the form for creating a new tipo_habitacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_habitacions.create');
    }

    /**
     * Store a newly created tipo_habitacion in storage.
     *
     * @param Createtipo_habitacionRequest $request
     *
     * @return Response
     */
    public function store(Createtipo_habitacionRequest $request)
    {
        $input = $request->all();

        $tipoHabitacion = $this->tipoHabitacionRepository->create($input);

        Flash::success('Tipo Habitacion saved successfully.');

        return redirect(route('tipoHabitacions.index'));
    }

    /**
     * Display the specified tipo_habitacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoHabitacion = $this->tipoHabitacionRepository->find($id);

        if (empty($tipoHabitacion)) {
            Flash::error('Tipo Habitacion not found');

            return redirect(route('tipoHabitacions.index'));
        }

        return view('tipo_habitacions.show')->with('tipoHabitacion', $tipoHabitacion);
    }

    /**
     * Show the form for editing the specified tipo_habitacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoHabitacion = $this->tipoHabitacionRepository->find($id);

        if (empty($tipoHabitacion)) {
            Flash::error('Tipo Habitacion not found');

            return redirect(route('tipoHabitacions.index'));
        }

        return view('tipo_habitacions.edit')->with('tipoHabitacion', $tipoHabitacion);
    }

    /**
     * Update the specified tipo_habitacion in storage.
     *
     * @param int $id
     * @param Updatetipo_habitacionRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetipo_habitacionRequest $request)
    {
        $tipoHabitacion = $this->tipoHabitacionRepository->find($id);

        if (empty($tipoHabitacion)) {
            Flash::error('Tipo Habitacion not found');

            return redirect(route('tipoHabitacions.index'));
        }

        $tipoHabitacion = $this->tipoHabitacionRepository->update($request->all(), $id);

        Flash::success('Tipo Habitacion updated successfully.');

        return redirect(route('tipoHabitacions.index'));
    }

    /**
     * Remove the specified tipo_habitacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoHabitacion = $this->tipoHabitacionRepository->find($id);

        if (empty($tipoHabitacion)) {
            Flash::error('Tipo Habitacion not found');

            return redirect(route('tipoHabitacions.index'));
        }

        $this->tipoHabitacionRepository->delete($id);

        Flash::success('Tipo Habitacion deleted successfully.');

        return redirect(route('tipoHabitacions.index'));
    }
}
