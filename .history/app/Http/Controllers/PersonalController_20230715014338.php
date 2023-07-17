<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Horario;

/**
 * Class PersonalController
 * @package App\Http\Controllers
 */
class PersonalController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:ver-personal|crear-personal|editar-personal|borrar-personal', ['only' => ['index']]);
    //     $this->middleware('permission:crear-personal', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:editar-personal', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:borrar-personal', ['only' => ['destroy']]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personals = Personal::paginate(5);


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


        // $personals = $request->all();
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

        // return ($request->all());

        request()->validate(Personal::$rules);

        DB::transaction(function () use ($request) {
            $NewUser = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' =>bcrypt($request->password),

            ])->assignRole($request->roles);

            Personal::create([
                'DNI' => $request->DNI,
                'apellidos' => $request->apellidos,
                'direccion' => $request->direccion,
                'telefono' => $request->telefono,
                'ciudad' => $request->ciudad,
                'user_id' => $NewUser->id,
            ]);
        });

        return redirect()->route('personal.store')
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


        $rol = Role::pluck('name', 'id')->all();

        return view('personal.edit', compact('personal','rol'));
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

        DB::transaction(
            function () use ($request, $personal) {
                $personal->update($request->all());
                $user = User::find($personal->user_id);
                $user->name = $request->name;
                $user->email = $request->email;
                $user->roles()->sync($request->roles);
                $user->save();
            }
        );
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
        //antes de elimina personal se eliminar el usuario y horario
        $personal = Personal::find($id);
        $user = User::find($personal->user_id);
        $user->delete();
        $horario = Horario::where('personal_id', $id)->delete();

        // $personal = Personal::find($id)->delete();

        return redirect()->route('personal.index')
            ->with('success', 'Personal deleted successfully');
    }


}
