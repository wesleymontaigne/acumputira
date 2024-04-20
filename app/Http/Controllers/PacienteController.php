<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Paciente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use function PHPUnit\Framework\isEmpty;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        if($request->user()->status === "1"){     
        $users=User::all()->where('status','!=', '1');
        //dd($users);
        return view('pacienteAdmin')->with('users',$users);      
        }
        return view('paciente.index');
    }

public function paciente(Request $request): View
{ 
    if($request->user()->status === "1"){ 
        $users = DB::table('users')
        ->join('agendas', 'users.id', '=', $request->id)
        ->select('users.*', 'agendas.*')->where('paciente_id','=', $request->id)->get();
        
        if(!isset($users[0]->paciente_id)){
        $users=User::find($request->id);
        }

     
        return view('pacienteAgenda')->with('users',$users);       
    }
    return view('/');
    
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
