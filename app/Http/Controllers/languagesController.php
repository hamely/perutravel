<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatelanguagesRequest;
use App\Http\Requests\UpdatelanguagesRequest;
use App\Repositories\languagesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class languagesController extends AppBaseController
{
    /** @var  languagesRepository */
    private $languagesRepository;

    public function __construct(languagesRepository $languagesRepo)
    {
        $this->languagesRepository = $languagesRepo;
    }

    /**
     * Display a listing of the languages.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $languages = $this->languagesRepository->all();

        return view('languages.index')
            ->with('languages', $languages);
    }

    /**
     * Show the form for creating a new languages.
     *
     * @return Response
     */
    public function create()
    {
        return view('languages.create');
    }

    /**
     * Store a newly created languages in storage.
     *
     * @param CreatelanguagesRequest $request
     *
     * @return Response
     */
    public function store(CreatelanguagesRequest $request)
    {
        $input = $request->all();

        $languages = $this->languagesRepository->create($input);

        Flash::success('Languages saved successfully.');

        return redirect(route('languages.index'));
    }

    /**
     * Display the specified languages.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $languages = $this->languagesRepository->find($id);

        if (empty($languages)) {
            Flash::error('Languages not found');

            return redirect(route('languages.index'));
        }

        return view('languages.show')->with('languages', $languages);
    }

    /**
     * Show the form for editing the specified languages.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $languages = $this->languagesRepository->find($id);

        if (empty($languages)) {
            Flash::error('Languages not found');

            return redirect(route('languages.index'));
        }

        return view('languages.edit')->with('languages', $languages);
    }

    /**
     * Update the specified languages in storage.
     *
     * @param int $id
     * @param UpdatelanguagesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatelanguagesRequest $request)
    {
        $languages = $this->languagesRepository->find($id);

        if (empty($languages)) {
            Flash::error('Languages not found');

            return redirect(route('languages.index'));
        }

        $languages = $this->languagesRepository->update($request->all(), $id);

        Flash::success('Languages updated successfully.');

        return redirect(route('languages.index'));
    }

    /**
     * Remove the specified languages from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $languages = $this->languagesRepository->find($id);

        if (empty($languages)) {
            Flash::error('Languages not found');

            return redirect(route('languages.index'));
        }

        $this->languagesRepository->delete($id);

        Flash::success('Languages deleted successfully.');

        return redirect(route('languages.index'));
    }
}
