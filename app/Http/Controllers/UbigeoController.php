<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUbigeoRequest;
use App\Http\Requests\UpdateUbigeoRequest;
use App\Repositories\UbigeoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UbigeoController extends AppBaseController
{
    /** @var  UbigeoRepository */
    private $ubigeoRepository;

    public function __construct(UbigeoRepository $ubigeoRepo)
    {
        $this->ubigeoRepository = $ubigeoRepo;
    }

    /**
     * Display a listing of the Ubigeo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ubigeos = $this->ubigeoRepository->all();

        return view('ubigeos.index')
            ->with('ubigeos', $ubigeos);
    }

    /**
     * Show the form for creating a new Ubigeo.
     *
     * @return Response
     */
    public function create()
    {
        return view('ubigeos.create');
    }

    /**
     * Store a newly created Ubigeo in storage.
     *
     * @param CreateUbigeoRequest $request
     *
     * @return Response
     */
    public function store(CreateUbigeoRequest $request)
    {
        $input = $request->all();

        $ubigeo = $this->ubigeoRepository->create($input);

        Flash::success('Ubigeo saved successfully.');

        return redirect(route('ubigeos.index'));
    }

    /**
     * Display the specified Ubigeo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ubigeo = $this->ubigeoRepository->find($id);

        if (empty($ubigeo)) {
            Flash::error('Ubigeo not found');

            return redirect(route('ubigeos.index'));
        }

        return view('ubigeos.show')->with('ubigeo', $ubigeo);
    }

    /**
     * Show the form for editing the specified Ubigeo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ubigeo = $this->ubigeoRepository->find($id);

        if (empty($ubigeo)) {
            Flash::error('Ubigeo not found');

            return redirect(route('ubigeos.index'));
        }

        return view('ubigeos.edit')->with('ubigeo', $ubigeo);
    }

    /**
     * Update the specified Ubigeo in storage.
     *
     * @param int $id
     * @param UpdateUbigeoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUbigeoRequest $request)
    {
        $ubigeo = $this->ubigeoRepository->find($id);

        if (empty($ubigeo)) {
            Flash::error('Ubigeo not found');

            return redirect(route('ubigeos.index'));
        }

        $ubigeo = $this->ubigeoRepository->update($request->all(), $id);

        Flash::success('Ubigeo updated successfully.');

        return redirect(route('ubigeos.index'));
    }

    /**
     * Remove the specified Ubigeo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ubigeo = $this->ubigeoRepository->find($id);

        if (empty($ubigeo)) {
            Flash::error('Ubigeo not found');

            return redirect(route('ubigeos.index'));
        }

        $this->ubigeoRepository->delete($id);

        Flash::success('Ubigeo deleted successfully.');

        return redirect(route('ubigeos.index'));
    }
}
