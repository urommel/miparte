<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Personal;

/**
 * Class HorarioController
 * @package App\Http\Controllers
 */
class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horario::paginate();

        return view('horario.index', compact('horarios'))
            ->with('i', (request()->input('page', 1) - 1) * $horarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //crear un array de dias
        // return $request->id;

        $dd = Personal::find($request->id);

        $dias = array(
            'Lunes' => 'Lunes',
            'Martes' => 'Martes',
            'Miercoles' => 'Miercoles',
            'Jueves' => 'Jueves',
            'Viernes' => 'Viernes',
            'Sabado' => 'Sabado',
            'Domingo' => 'Domingo',
        );

        $horario = new Horario();
        return view('horario.create', compact('dias','horario','dd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sL = $request->estado_Lunes;
        $sM = $request->estado_Martes;
        $sMi = $request->estado_Miercoles;
        $sJ = $request->estado_Jueves;
        $sV = $request->estado_Viernes;
        $sS = $request->estado_Sabado;
        $sD = $request->estado_Domingo;

        // dd ($sL,$sM,$sMi,$sJ,$sV,$sS,$sD);

        if($sL != null){
            $horario = new Horario();
            $horario->id_personal = $request->id_personal;
            $horario->dia = 'Lunes';
            $horario->hora_inicio = $request->hora_inicio_Lunes;
            $horario->hora_fin = $request->hora_fin_Lunes;
            $horario->estado = $request->estado_Lunes;
        }
        if($sM != null){
            $sM = 0;
        }
        if($sMi == null){
            $sMi = 0;
        }
        if($sJ == null){
            $sJ = 0;
        }
        if($sV == null){
            $sV = 0;
        }
        if($sS == null){
            $sS = 0;
        }
        if($sD == null){
            $sD = 0;
        }




        //crear una instancia
        $horario = new Horario();



        // return request()->all();
        // return sizeof($request->estado);

        // request()->validate(Horario::$rules);

        // $horario = Horario::create($request->all());

        return redirect()->route('horario.index')
            ->with('success', 'Horario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horario = Horario::find($id);

        return view('horario.show', compact('horario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horario = Horario::find($id);

        return view('horario.edit', compact('horario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Horario $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horario $horario)
    {
        request()->validate(Horario::$rules);

        $horario->update($request->all());

        return redirect()->route('horario.index')
            ->with('success', 'Horario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $horario = Horario::find($id)->delete();

        return redirect()->route('horario.index')
            ->with('success', 'Horario deleted successfully');
    }
}
