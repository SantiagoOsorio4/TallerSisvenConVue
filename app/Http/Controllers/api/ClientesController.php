<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\paciente;
use Illuminate\Support\Facades\DB;
use Illuminate\support\Facades\Route;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = DB::table('customers')
        ->get();
        return json_encode(['clientes'=>$clientes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes = new Cliente();
        $clientes->document_number = $request->document_number;
        $clientes->firts_name = $request-> firts_name;
        $clientes->last_name = $request-> last_name;
        $clientes->address = $request-> address;
        $clientes->birthday = $request-> birthday;
        $clientes->phone_number = $request-> phone_number;
        $clientes->email = $request-> email;
        $clientes->save();
        return json_encode(['clientes' => $clientes]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $clientes = Cliente::find($id);        
        return json_encode(['clientes' => $clientes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $clientes = Cliente::find($id);
        $clientes->document_number = $request->document_number;
        $clientes->firts_name = $request-> firts_name;
        $clientes->last_name = $request-> last_name;
        $clientes->address = $request-> address;
        $clientes->birthday = $request-> birthday;
        $clientes->phone_number = $request-> phone_number;
        $clientes->email = $request-> email;
        $clientes->save();
        return json_encode(['clientes'=> $clientes]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clientes = Cliente::find($id);
        $clientes->delete();
        return json_encode(['clientes'=>$clientes,'success'=>true]);
    }
}
