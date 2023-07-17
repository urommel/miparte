<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Personal;
use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $asistencias = Asistencia::all();

        return view('asistencia.index', compact('asistencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $personals = Personal::all();
        $asistencias = Asistencia::all();

        return view('asistencia.create', compact('asistencias', 'personals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        return $request;

        $person = Personal::find($request->id);
        $fechaActual = date('Y-m-d');
        $horaActual = date('H-i-s');
        $dia = $this->diasemanaactual();

        Asistencia::create([
            'fecha' => $fechaActual,
            'hora' => $horaActual,
            'dia' => $dia,
            'personal_id' => $request->"personal_id",
            'estado' => $request->asistencia,
            'justificacion' => $request->justificacion,
        ]);
            
        return redirect()->route('personal.index')->with('success', 'Asistencia registrada correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function show(Asistencia $asistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asistencia $asistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asistencia $asistencia)
    {
        //
    }

    public function diasemanaactual()
    {
        $fecha = new DateTime();
        $diaSemana = $fecha->format('N');
        $nombreDia = '';
        switch ($diaSemana) {
            case '1':
                $nombreDia = 'Domingo';
                break;
            case '2':
                $nombreDia = 'Lunes';
                break;
            case '3':
                $nombreDia = 'Martes';
                break;
            case '4':
                $nombreDia = 'Miércoles';
                break;
            case '5':
                $nombreDia = 'Jueves';
                break;
            case '6':
                $nombreDia = 'Viernes';
                break;
            case '7':
                $nombreDia = 'Sábado';
                break;

        }
        return $nombreDia;
    }


}
