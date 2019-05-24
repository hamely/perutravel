<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoriaAlojamientoRequest;
use App\Http\Requests\UpdateCategoriaAlojamientoRequest;
use App\Repositories\CategoriaAlojamientoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CategoriaAlojamientoController extends AppBaseController
{
    /** @var  CategoriaAlojamientoRepository */
    private $categoriaAlojamientoRepository;

    public function __construct(CategoriaAlojamientoRepository $categoriaAlojamientoRepo)
    {
        $this->categoriaAlojamientoRepository = $categoriaAlojamientoRepo;
    }

    /**
     * Display a listing of the CategoriaAlojamiento.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $categoriaAlojamientos = $this->categoriaAlojamientoRepository->all();

        return view('categoria_alojamientos.index')
            ->with('categoriaAlojamientos', $categoriaAlojamientos);
    }

    /**
     * Show the form for creating a new CategoriaAlojamiento.
     *
     * @return Response
     */
    public function create()
    {
        return view('categoria_alojamientos.create');
    }

    /**
     * Store a newly created CategoriaAlojamiento in storage.
     *
     * @param CreateCategoriaAlojamientoRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoriaAlojamientoRequest $request)
    {
        $input = $request->all();

        $categoriaAlojamiento = $this->categoriaAlojamientoRepository->create($input);

        Flash::success('Categoria Alojamiento saved successfully.');

        return redirect(route('categoriaAlojamientos.index'));
    }

    /**
     * Display the specified CategoriaAlojamiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categoriaAlojamiento = $this->categoriaAlojamientoRepository->find($id);

        if (empty($categoriaAlojamiento)) {
            Flash::error('Categoria Alojamiento not found');

            return redirect(route('categoriaAlojamientos.index'));
        }

        return view('categoria_alojamientos.show')->with('categoriaAlojamiento', $categoriaAlojamiento);
    }

    /**
     * Show the form for editing the specified CategoriaAlojamiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categoriaAlojamiento = $this->categoriaAlojamientoRepository->find($id);

        if (empty($categoriaAlojamiento)) {
            Flash::error('Categoria Alojamiento not found');

            return redirect(route('categoriaAlojamientos.index'));
        }

        return view('categoria_alojamientos.edit')->with('categoriaAlojamiento', $categoriaAlojamiento);
    }

    /**
     * Update the specified CategoriaAlojamiento in storage.
     *
     * @param int $id
     * @param UpdateCategoriaAlojamientoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoriaAlojamientoRequest $request)
    {
        $categoriaAlojamiento = $this->categoriaAlojamientoRepository->find($id);

        if (empty($categoriaAlojamiento)) {
            Flash::error('Categoria Alojamiento not found');

            return redirect(route('categoriaAlojamientos.index'));
        }

        $categoriaAlojamiento = $this->categoriaAlojamientoRepository->update($request->all(), $id);

        Flash::success('Categoria Alojamiento updated successfully.');

        return redirect(route('categoriaAlojamientos.index'));
    }

    /**
     * Remove the specified CategoriaAlojamiento from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categoriaAlojamiento = $this->categoriaAlojamientoRepository->find($id);

        if (empty($categoriaAlojamiento)) {
            Flash::error('Categoria Alojamiento not found');

            return redirect(route('categoriaAlojamientos.index'));
        }

        $this->categoriaAlojamientoRepository->delete($id);

        Flash::success('Categoria Alojamiento deleted successfully.');

        return redirect(route('categoriaAlojamientos.index'));
    }
}
