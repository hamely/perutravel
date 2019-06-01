<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetoursRequest;
use App\Http\Requests\UpdatetoursRequest;
use App\Repositories\toursRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Repositories\itinerariosRepository;
use Flash;
use Response;
use DB;

class toursController extends AppBaseController
{
    /** @var  toursRepository */
    private $toursRepository;

    public function __construct(toursRepository $toursRepo,itinerariosRepository $itinerariosRepo)
    {
        $this->toursRepository = $toursRepo;
        $this->itinerariosRepository = $itinerariosRepo;
    }

    /**
     * Display a listing of the tours.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $tours = $this->toursRepository->all();
        $tours = DB::table('multimedia')
            ->select ('multimedia.nombre as nombremultimedia','tours.id','tours.nombre','tours.slug','tours.img','tours.descripcion','tours.estado','tours.principal','tours.organizacion')
            ->join('tours','tours.multimedia_id','=','multimedia.id')
            ->get();

        //dd($tours);
        return view('tours.index')->with('tours', $tours);
    }

    /**
     * Show the form for creating a new tours.
     *
     * @return Response
     */
    public function create()
    {
        $opcion=0;
        $multimedia=DB::table('multimedia')
                    ->select('id','nombre')
                    ->get();

        return view('tours.create',['opcion'=>$opcion, 'multimedia'=>$multimedia]);
    }

    /**
     * Store a newly created tours in storage.
     *
     * @param CreatetoursRequest $request
     *
     * @return Response
     */
    public function store(CreatetoursRequest $request)
    {
        $input = $request->all();

        $tours = $this->toursRepository->create($input);

        Flash::success('Tours saved successfully.');

        return redirect(route('tours.index'));
    }

    /**
     * Display the specified tours.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tours = $this->toursRepository->find($id);

        if (empty($tours)) {
            Flash::error('Tours not found');

            return redirect(route('tours.index'));
        }

        return view('tours.show')->with('tours', $tours);
    }

    /**
     * Show the form for editing the specified tours.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tours = $this->toursRepository->find($id);
        
        $opcion=1;
        if (empty($tours)) {
            Flash::error('Tours not found');

            return redirect(route('tours.index'));
        }

        $multimedia=DB::table('multimedia')
        ->select('id','nombre')
        ->get();

        return view('tours.edit',['opcion'=>$opcion, 'multimedia'=>$multimedia,'tours'=>$tours]);

        // return view('tours.edit')->with('tours', $tours);
    }

    /**
     * Update the specified tours in storage.
     *
     * @param int $id
     * @param UpdatetoursRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetoursRequest $request)
    {
        $tours = $this->toursRepository->find($id);

        if (empty($tours)) {
            Flash::error('Tours not found');

            return redirect(route('tours.index'));
        }

        $tours = $this->toursRepository->update($request->all(), $id);

        Flash::success('Tours updated successfully.');

        return redirect(route('tours.index'));
    }

    /**
     * Remove the specified tours from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tours = $this->toursRepository->find($id);

        if (empty($tours)) {
            Flash::error('Tours not found');

            return redirect(route('tours.index'));
        }

        $this->toursRepository->delete($id);

        Flash::success('Tours deleted successfully.');

        return redirect(route('tours.index'));
    }
 
}
