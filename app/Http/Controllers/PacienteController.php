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

        return redirect()->route("paciente.index");

    }

 
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pacientes = paciente::find($id);
        return view("paciente.update", compact('pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pacientes = paciente::find($id);
        $pacientes-> id = $request->post('id');
        $pacientes-> name = $request->post('name');
        $pacientes-> doctor = $request->post('doctor');
        $pacientes-> fecha = $request->post('fecha');
        $pacientes->save();

        return redirect()->route("paciente.index");
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pacientes = paciente::find($id);
        $pacientes->delete();
        return redirect()->route("paciente.index");

    }
}
