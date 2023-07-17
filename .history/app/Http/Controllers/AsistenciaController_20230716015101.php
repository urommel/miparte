<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Personal;
use App\Models\Asistencia;
use App\Models\Horario;
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
        $asistencias = Asistencia::all(); // Obtén todas las asistencias

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
        $horarios = Horario::all(); // Obtén todos los horarios
        $personals = Personal::all(); // Obtén todos los personales
        $asistencias = Asistencia::all(); // Obtén todas las asistencias

        return view('asistencia.create', compact('asistencias', 'personals', 'horarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'estado' => 'required',
            'justificacion' => 'nullable',
            'minutos' => 'nullable',
        ]);

        // Obtener el día actual
        $diaActual = date('N');



        return $nombreDia;

        // Verificar si el día actual está dentro de los días asignados en el horario del personal
        $horarioPermitido = in_array($diaActual, $request->input('diaH'));

        // Verificar si el día actual es válido según el horario
        if (!$horarioPermitido) {
            return redirect()->back()->with('error', 'No puedes registrar la asistencia hoy.');
        }

        // Crear un nuevo objeto de asistencia para cada día
        foreach ($request->input('diaH') as $diaAsignado) {
            $asistencia = new Asistencia();
            $asistencia->personal_id = $request->input('personal_id');
            $asistencia->estado = $request->input('estado');
            $asistencia->justificacion = $request->input('justificacion');
            $asistencia->minutos = $request->input('minutos');
            $asistencia->dia = $diaAsignado;
            $asistencia->fecha = now()->toDateString();
            $asistencia->save();
        }



        return redirect()->route('asistencias.index')->with('success', 'Asistencias registradas correctamente.');
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
