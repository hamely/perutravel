<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateitinerariosRequest;
use App\Http\Requests\UpdateitinerariosRequest;
use App\Repositories\itinerariosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use Session;
use App\Models\itinerarios;
use Illuminate\Support\Facades\Auth;

class itinerariosController extends AppBaseController
{
    /** @var  itinerariosRepository */
    private $itinerariosRepository;

    public function __construct(itinerariosRepository $itinerariosRepo)
    {
        $this->itinerariosRepository = $itinerariosRepo;
    }

    /**
     * Display a listing of the itinerarios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $itinerarios = $this->itinerariosRepository->all();

        return view('itinerarios.index')
            ->with('itinerarios', $itinerarios);
    }

    /**
     * Show the form for creating a new itinerarios.
     *
     * @return Response
     */
    public function create()
    {
     
        return view('itinerarios.create');
    }

    /**
     * Store a newly created itinerarios in storage.
     *
     * @param CreateitinerariosRequest $request
     *
     * @return Response
     */
    public function store(CreateitinerariosRequest $request)
    {
        // $user = Auth::user();
        // $usuarioId=$user->id;

        // $data = new itinerarios;
        // $data->nombre = $request->nombre;
        // $data->descripcion = $request->descripcion;
        // $data->id_tour = $request->id_tour;
        // $data->id_alojamiento = $request->id_alojamiento;
        // $data->dia = $request->dia;
        // $data->departamento = $request->departamento;
        // $data->id_usuario=$usuarioId;

     

        // $data->save();

        // Session::flash('Mensaje','Se guardo correctamente el itinerario');
        // return redirect()->route('itinerarios.index');

        $input = $request->all();
        
        $itinerarios = $this->itinerariosRepository->create($input);

        Flash::success('Itinerarios saved successfully.');

        return redirect()->route('tourItinerario',$request->id_tour);
        
    }

    /**
     * Display the specified itinerarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $itinerarios = $this->itinerariosRepository->find($id);

        if (empty($itinerarios)) {
            Flash::error('Itinerarios not found');

            return redirect(route('itinerarios.index'));
        }

        return view('itinerarios.show')->with('itinerarios', $itinerarios);
    }

    /**
     * Show the form for editing the specified itinerarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $itinerarios = $this->itinerariosRepository->find($id);

        if (empty($itinerarios)) {
            Flash::error('Itinerarios not found');

            return redirect(route('itinerarios.index'));
        }

        return view('itinerarios.edit')->with('itinerarios', $itinerarios);
    }

    /**
     * Update the specified itinerarios in storage.
     *
     * @param int $id
     * @param UpdateitinerariosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateitinerariosRequest $request)
    {
        $itinerarios = $this->itinerariosRepository->find($id);

        if (empty($itinerarios)) {
            Flash::error('Itinerarios not found');

            return redirect(route('itinerarios.index'));
        }

        $itinerarios = $this->itinerariosRepository->update($request->all(), $id);

        Flash::success('Itinerarios updated successfully.');

        return redirect(route('itinerarios.index'));
    }

    /**
     * Remove the specified itinerarios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $itinerarios = $this->itinerariosRepository->find($id);

        if (empty($itinerarios)) {
            Flash::error('Itinerarios not found');

            return redirect(route('itinerarios.index'));
        }

        $this->itinerariosRepository->delete($id);

        Flash::success('Itinerarios deleted successfully.');

        return redirect(route('itinerarios.index'));
    }

    public function tourItinerarioShow($id)
    {

        $itinerarios = DB::table('itinerarios')
            ->select ('*')
            ->where('.id_tour','=',$id)
            ->get();

            return view('itinerarios.index',['id'=>$id,'itinerarios'=>$itinerarios]);
            // ->with('itinerarios', $itinerarios,'id', $id);

        
    }
    
    public function tourItinerarioCreate($id)
    {
        $opcion=0;
        $alojamientos=DB::table('alojamientos')
                    ->select('id','nombre')
                    ->get();

        $maxDia= DB::table('itinerarios')
                    ->select(DB::raw('max(itinerarios.dia) as dia'))
                    ->where('id_tour','=',$id)
                    ->get()[0];
       
            
        $nuevoNumeroDia=(int)($maxDia->dia)+1;
        // dd($maxDia);

            return view('itinerarios.create',['id'=>$id,'alojamientos'=>$alojamientos,'opcion'=>$opcion,'nuevoNumeroDia'=>$nuevoNumeroDia]);
    }
    
}
