<?php

namespace Modules\Pastor\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Pastor\Entities\Pastor;
use Modules\Pastor\Entities\Actividad;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $actividad = Actividad::get();
        return view('pastor::partials.asistencia-historico',compact('actividad'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('pastor::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function registro(Request $request)
    {
        //dd($request);

        $pastor = Pastor::find($request->pastor_id);

        $actividad = Actividad::where('pastor_id',$request->pastor_id)
        ->where('fecha',date('Y-m-d'))
        ->first();

       if ($actividad <> null) {

           return json_encode(['success' => false]);
       }
       else
       {
          $actividad = new Actividad();
          $actividad->pastor_id = $pastor->id;
          $actividad->zona =$pastor->nu_zona;
          $actividad->distrito = $pastor->distrito;
          $actividad->actividad = $request->actividad;
          $actividad->asistencia = 1;
          $actividad->fecha = date('Y-m-d');
          $actividad->hora = date('H:m:s A');
          $actividad->user_id = \Auth::id();
          $actividad->save();

         return json_encode(['success' => true, 'pastorid' => $pastor->id]);
       }


    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function asistencia ($id)
    {

        $pastor = Pastor::find($id);
        return view('pastor::partials.asistencia',compact('pastor'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('pastor::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
