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

        return $request;

        $diaActual = $this->diasemanaactual();
        $diasAsignados = $request->input('diaH');

        if (in_array($diaActual, $diasAsignados)) {
            $asistencia = new Asistencia();
            $asistencia->personal_id = $request->input('personal_id');
            $asistencia->estado = $request->input('estado');
            $asistencia->justificacion = $request->input('justificacion');
            $asistencia->minutos = $request->input('minutos');
            $asistencia->dia = $diaActual;
            $asistencia->fecha = now()->toDateString();
            $asistencia->save();

            return redirect()->route('asistencias.index')->with('success', 'Asistencia registrada correctamente.');
        } else {
            return redirect()->back()->with('success', 'No puedes registrar la asistencia hoy.');
        }
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
                $nombreDia = 'lunes';
                break;
            case '2':
                $nombreDia = 'martes';
                break;
            case '3':
                $nombreDia = 'Miercoles';
                break;
            case '4':
                $nombreDia = 'Jueves';
                break;
            case '5':
                $nombreDia = 'Viernes';
                break;
            case '6':
                $nombreDia = 'Sabado';
                break;
            case '7':
                $nombreDia = 'Domingo';
                break;
        }
        return $nombreDia;
    }
}
