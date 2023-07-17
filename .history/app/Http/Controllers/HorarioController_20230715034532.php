<?php

namespace App\Http\Controllers;

use App\Models\Horario;

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

        $personal = Personal::all();
        $horarios = Horario::paginate();
        return view('horario.index', compact('horarios', 'personal'))
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

        // setlocale(LC_ALL, 'es_ES');
        // $diaSemana = strftime('%A');
        // return $diaSemana;


        $person = Personal::find($request->id);

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
        return view('horario.create', compact('dias', 'horario', 'person'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //return $request;



        // $sL = $request->estado_Lunes;
        // $sM = $request->estado_Martes;
        // $sMi = $request->estado_Miercoles;
        // $sJ = $request->estado_Jueves;
        // $sV = $request->estado_Viernes;
        // $sS = $request->estado_Sabado;
        // $sD = $request->estado_Domingo;

        // // dd ($sL,$sM,$sMi,$sJ,$sV,$sS,$sD);

        // if ($sL != null) {
        //     $horario = new Horario();
        //     $horario->personal_id = $request->personal_id;
        //     $horario->dia = 'Lunes';
        //     $horario->hora_inicio = $request->hora_inicio_Lunes;
        //     $horario->hora_fin = $request->hora_fin_Lunes;
        //     $horario->save();
        // }
        // if ($sM != null) {
        //     $horario = new Horario();
        //     $horario->personal_id = $request->personal_id;
        //     $horario->dia = 'Martes';
        //     $horario->hora_inicio = $request->hora_inicio_Martes;
        //     $horario->hora_fin = $request->hora_fin_Martes;
        //     $horario->save();
        // }
        // if ($sMi != null) {
        //     $horario = new Horario();
        //     $horario->personal_id = $request->personal_id;
        //     $horario->dia = 'Miercoles';
        //     $horario->hora_inicio = $request->hora_inicio_Miercoles;
        //     $horario->hora_fin = $request->hora_fin_Miercoles;
        //     $horario->save();
        // }
        // if ($sJ != null) {
        //     $horario = new Horario();
        //     $horario->personal_id = $request->personal_id;
        //     $horario->dia = 'Jueves';
        //     $horario->hora_inicio = $request->hora_inicio_Jueves;
        //     $horario->hora_fin = $request->hora_fin_Jueves;
        //     $horario->save();
        // }
        // if ($sV != null) {
        //     $horario = new Horario();
        //     $horario->personal_id = $request->personal_id;
        //     $horario->dia = 'Viernes';
        //     $horario->hora_inicio = $request->hora_inicio_Viernes;
        //     $horario->hora_fin = $request->hora_fin_Viernes;
        //     $horario->save();
        // }
        // if ($sS != null) {
        //     $horario = new Horario();
        //     $horario->personal_id = $request->personal_id;
        //     $horario->dia = 'Sabado';
        //     $horario->hora_inicio = $request->hora_inicio_Sabado;
        //     $horario->hora_fin = $request->hora_fin_Sabado;
        //     $horario->save();
        // }
        // if ($sD != null) {
        //     $horario = new Horario();
        //     $horario->personal_id = $request->personal_id;
        //     $horario->dia = 'Domingo';
        //     $horario->hora_inicio = $request->hora_inicio_Domingo;
        //     $horario->hora_fin = $request->hora_fin_Domingo;
        //     $horario->save();
        // }

        // return redirect()->route('horario.index')
        //     ->with('success', 'Horario created successfully.');

        //Llamamos a la validation del modelo
        $this->validate($request, Horario::$rules);

        //Creamos el horario

        $horario = new Horario();
        $horario->personal_id = $request->personal_id;
        $horario->dia = $request->dia;
        $horario->hora_inicio = $request->hora_inicio;
        $horario->hora_fin = $request->hora_fin;


        $ret
        $horario->save();

        return redirect()->route('horario.index')
            ->with('success', 'Horario creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal = Personal::findOrFail($id);
        $horario = Horario::find($id);

        return view('horario.show', compact('horario', 'personal'));
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
        // request()->validate(Horario::$rules);

        // $horario->update($request->all());

        // return redirect()->route('horario.index')
        //     ->with('success', 'Horario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        // $horario = Horario::find($id)->delete();

        // return redirect()->route('horario.index')
        //     ->with('success', 'Horario deleted successfully');
    }
}
