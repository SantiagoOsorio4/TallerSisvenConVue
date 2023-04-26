<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = paciente::all();

        return view("paciente.index",["pacientes" => $pacientes]);
        
    }

   
    public function create()
    {
       return view("paciente.new");
    }

    
    public function store(Request $request)
    {
        $pacientes = new paciente();
        $pacientes-> id = $request->post('id');
        $pacientes-> name = $request->post('name');
        $pacientes-> doctor = $request->post('doctor');
        $pacientes-> fecha = $request->post('fecha');
        $pacientes->save();

        return redirect()->route("paciente.index")->with("success", "agregado con exito");

    }

 
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
