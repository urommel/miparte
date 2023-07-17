<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Models\User;


/**
 * Class PersonalController
 * @package App\Http\Controllers
 */
class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personals = Personal::paginate();

        return view('personal.index', compact('personals'))
            ->with('i', (request()->input('page', 1) - 1) * $personals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personal = new Personal();

        $rol = Role::pluck('name', 'id')->all();

        return view('personal.create', compact('personal','rol'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate(Personal::$rules);

        return ($request->all());

        request()->validate(Personal::$rules);

        DB::transaction(function () use ($request) {
            $NewUser = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' =>bcrypt($request->password),

            ])->assignRole($request->roles);

            Empleado::create([
                'DNI' => $request->DNI,
                'phone' => $request->phone,
                'address' =>  $request->address,
                'city' => $request->city,
            ]);
        });



        $personal = Personal::create($request->all());

        return redirect()->route('personals.index')
            ->with('success', 'Personal created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal = Personal::find($id);

        return view('personal.show', compact('personal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personal = Personal::find($id);

        return view('personal.edit', compact('personal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Personal $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personal $personal)
    {
        request()->validate(Personal::$rules);

        $personal->update($request->all());

        return redirect()->route('personal.index')
            ->with('success', 'Personal updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $personal = Personal::find($id)->delete();

        return redirect()->route('personal.index')
            ->with('success', 'Personal deleted successfully');
    }
}
