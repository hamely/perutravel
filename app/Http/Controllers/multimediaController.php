<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemultimediaRequest;
use App\Http\Requests\UpdatemultimediaRequest;
use App\Repositories\multimediaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

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

}
