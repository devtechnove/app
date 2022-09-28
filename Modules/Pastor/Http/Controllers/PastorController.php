<?php

namespace Modules\Pastor\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;
use Modules\Pastor\Entities\Pastor;
use Modules\EstadosVe\Entities\Estados;
use Modules\Estado\Entities\Estado;
use Modules\Genero\Entities\Genero;
use Modules\GradoM\Entities\GradoMinisterial;
use Modules\GradoI\Entities\GradoInstruccion;
use Modules\Nacionalidad\Entities\Nacionalidad;
use Modules\Pais\Entities\Pais;
use Modules\TipoS\Entities\TipoSangre;
use Modules\TipoL\Entities\TipoLocal;
use Modules\Iglesia\Entities\Iglesia;
use Modules\EstadosVe\Entities\Municipios;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class PastorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        if (\Auth::user()->hasRole('Administrador') || \Auth::user()->hasRole('Supervisor Nacional') || \Auth::user()->hasRole('Miembro de la Junta Nacional')) {

            $pastores = \Modules\Pastor\Entities\Pastor::get();
            return view('pastor::index',compact('pastores'));

        }
        else
        {
            $pastores = \Modules\Pastor\Entities\Pastor::where('nu_zona',\Auth::user()->zona)->get();
            return view('pastor::index',compact('pastores'));
        }


    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $usuario=\Auth::user();
        $idUsuario=$usuario->id;
        $genero = Genero::get()->pluck('nb_genero','id');
        $estadoC = Estado::get()->pluck('nb_estado_civil','id');
        $estado = Estados::get()->pluck('estado','id');
        $pais = Pais::get()->pluck('nb_pais','id');
        $gradoMin = GradoMinisterial::get()->pluck('nb_grado_ministerial','id');
        $gradoIns = GradoInstruccion::get()->pluck('nb_grado_instruccion','id');
        $nacionalidad = Nacionalidad::get()->pluck('nb_nacionalidad','id');
        $tipoSangre = TipoSangre::get()->pluck('nb_tipo_sangre','id');

        return view('pastor::create')->with([
            'genero'     => $genero,
            'estadoC'    => $estadoC,
            'estado'     => $estado,
            'gradoMin'   => $gradoMin,
            'gradoIns'        => $gradoIns,
            'nacionalidad'    => $nacionalidad,
            'pais'            => $pais,
            'tipoSangre'      => $tipoSangre,
            'idUsuario'       => $idUsuario
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {

        request()->validate([

            'nu_cedula' => 'required|unique:pastor',
        ]);

        $pastor = new Pastor();

        $this->setPastor($pastor,$request);

       return json_encode(['success' => true, 'pastor_id' => $pastor->id]);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('pastor::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $usuario=\Auth::user();
        $idUsuario=$usuario->id;
        $genero = Genero::get()->pluck('nb_genero','id');
        $estadoC = Estado::get()->pluck('nb_estado_civil','id');
        $estado = Estados::get()->pluck('estado','id');
        $pais = Pais::get()->pluck('nb_pais','id');
        $gradoMin = GradoMinisterial::get()->pluck('nb_grado_ministerial','id');
        $gradoIns = GradoInstruccion::get()->pluck('nb_grado_instruccion','id');
        $nacionalidad = Nacionalidad::get()->pluck('nb_nacionalidad','id');
        $tipoSangre = TipoSangre::get()->pluck('nb_tipo_sangre','id');
        $pastor = Pastor::find($id);

        return view('pastor::edit')->with([
            'genero'     => $genero,
            'estadoC'    => $estadoC,
            'estado'     => $estado,
            'gradoMin'   => $gradoMin,
            'gradoIns'        => $gradoIns,
            'nacionalidad'    => $nacionalidad,
            'pais'            => $pais,
            'tipoSangre'      => $tipoSangre,
            'idUsuario'       => $idUsuario,
            'pastor'       => $pastor
        ]);

    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {

        $pastor = Pastor::find($id);
        $this->setPastor($pastor,$request);
        return redirect('/pastor');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function buscar(Request $request)
    {
        $pastor = Pastor::where('nu_cedula',$request->nu_cedula)->first();
         if ($pastor <> null) {


             return json_encode(['success' => true, 'pastorid' => $pastor->id]);


          }
          else
          {
              return json_encode(['success' => false]);
          }
    }


    private function setPastor(Pastor $pastor,Request $request){
        $edad = Carbon::parse($request->fe_nacimiento)->age;
        //dd($edad);
        $pastor->tx_nombres   = $request->input('tx_nombres');
        $pastor->tx_apellidos    = $request->input('tx_apellidos');
        $pastor->nu_cedula        = $request->input('nu_cedula');
        $pastor->nu_telefono          = $request->input('nu_telefono');
        $pastor->nu_edad      = $edad;
        $pastor->carga_familiar        = $request->input('carga_familiar');
        //Format Date then insert it to the database
        $pastor->fe_nacimiento    = date('Y-m-d', strtotime(str_replace('-', '/', $request->input('fe_nacimiento'))));
        $pastor->lugar_nacimiento_id    = $request->input('lugar_nacimiento_id');
        $pastor->nacionalidad_id  = $request->input('nacionalidad_id');
        $pastor->genero_id    = $request->input('genero_id');
        $pastor->grado_instruccion_id      = $request->input('grado_instruccion_id');
        $pastor->estado_civil_id      = $request->input('estado_civil_id');
        $pastor->ano_promocion   = $request->input('ano_promocion');
        $pastor->nb_bau_espiritu_santo   = $request->input('nb_bau_espiritu_santo');
        $pastor->nb_ins_teologico   = $request->input('nb_ins_teologico');
        $pastor->nb_desc_ins_teologico   = $request->input('nb_desc_ins_teologico');
        $pastor->nu_tiempo_ins   = $request->input('nu_tiempo_ins');
        $pastor->fe_ingreso   = $request->input('fe_ingreso');
        $pastor->grado_ministerial_id   = $request->input('grado_ministerial_id');
        $pastor->nb_sufre_enfermedad   = $request->input('nb_sufre_enfermedad');
        $pastor->nb_descripcion_enfermedad   = $request->input('nb_descripcion_enfermedad');
        $pastor->tipo_sangre_id   = $request->input('tipo_sangre_id');
        $pastor->tx_correo   = $request->input('tx_correo');
        $pastor->nb_ocupacion   = $request->input('nb_ocupacion');
        $pastor->nu_zona   = $request->input('nu_zona');
        $pastor->distrito   = $request->input('distrito');
        $pastor->nb_titulo_obtenido   = $request->input('nb_titulo_obtenido');
        $pastor->status   = $request->input('status_id');
        $pastor->save();
    }

     public function ingreso()
    {

        $genero = Genero::get()->pluck('nb_genero','id');
        $estadoC = Estado::get()->pluck('nb_estado_civil','id');
        $gradoMin = GradoMinisterial::get()->pluck('nb_grado_ministerial','id');
        $gradoIns = GradoInstruccion::get()->pluck('nb_grado_instruccion','id');
        $nacionalidad = Nacionalidad::get()->pluck('nb_nacionalidad','id');

         return view('pastor::partials.ingreso')->with([
            'genero'     => $genero,
            'estadoC'    => $estadoC,
            'nacionalidad'     => $nacionalidad,
            'gradoIns'     => $gradoIns,
            'nacionalidad'     => $nacionalidad,
            'gradoMin'   => $gradoMin,

         ]);


    }


    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function guardar(Request $request)
    {


        request()->validate([

            'nu_cedula' => 'required|unique:pastor',
        ]);

        $pastor = new Pastor();

        $this->setPastor($pastor,$request);

       return json_encode(['success' => true, 'pastor_id' => $pastor->id]);
    }



}
