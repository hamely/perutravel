<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTestimonioRequest;
use App\Http\Requests\UpdateTestimonioRequest;
use App\Repositories\TestimonioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TestimonioController extends AppBaseController
{
    /** @var  TestimonioRepository */
    private $testimonioRepository;

    public function __construct(TestimonioRepository $testimonioRepo)
    {
        $this->testimonioRepository = $testimonioRepo;
    }

    /**
     * Display a listing of the Testimonio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $testimonios = $this->testimonioRepository->all();

        return view('testimonios.index')
            ->with('testimonios', $testimonios);
    }

    /**
     * Show the form for creating a new Testimonio.
     *
     * @return Response
     */
    public function create()
    {
        return view('testimonios.create');
    }

    /**
     * Store a newly created Testimonio in storage.
     *
     * @param CreateTestimonioRequest $request
     *
     * @return Response
     */
    public function store(CreateTestimonioRequest $request)
    {
        $input = $request->all();

        $testimonio = $this->testimonioRepository->create($input);

        Flash::success('Testimonio saved successfully.');

        return redirect(route('testimonios.index'));
    }

    /**
     * Display the specified Testimonio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $testimonio = $this->testimonioRepository->find($id);

        if (empty($testimonio)) {
            Flash::error('Testimonio not found');

            return redirect(route('testimonios.index'));
        }

        return view('testimonios.show')->with('testimonio', $testimonio);
    }

    /**
     * Show the form for editing the specified Testimonio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $testimonio = $this->testimonioRepository->find($id);

        if (empty($testimonio)) {
            Flash::error('Testimonio not found');

            return redirect(route('testimonios.index'));
        }

        return view('testimonios.edit')->with('testimonio', $testimonio);
    }

    /**
     * Update the specified Testimonio in storage.
     *
     * @param int $id
     * @param UpdateTestimonioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTestimonioRequest $request)
    {
        $testimonio = $this->testimonioRepository->find($id);

        if (empty($testimonio)) {
            Flash::error('Testimonio not found');

            return redirect(route('testimonios.index'));
        }

        $testimonio = $this->testimonioRepository->update($request->all(), $id);

        Flash::success('Testimonio updated successfully.');

        return redirect(route('testimonios.index'));
    }

    /**
     * Remove the specified Testimonio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $testimonio = $this->testimonioRepository->find($id);

        if (empty($testimonio)) {
            Flash::error('Testimonio not found');

            return redirect(route('testimonios.index'));
        }

        $this->testimonioRepository->delete($id);

        Flash::success('Testimonio deleted successfully.');

        return redirect(route('testimonios.index'));
    }
}
