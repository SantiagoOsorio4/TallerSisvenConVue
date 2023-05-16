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
        $cliente = DB::table('customers')
        ->get();
        return json_encode(['cliente'=>$cliente]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->document_number = $request->document_number;
        $cliente->firts_name = $request-> firts_name;
        $cliente->last_name = $request-> last_name;
        $cliente->address = $request-> address;
        $cliente->birthday = $request-> birthday;
        $cliente->phone_number = $request-> phone_number;
        $cliente->email = $request-> email;
        $cliente->save();
        return json_encode(['cliente' => $cliente]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        
        return json_encode(['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::find($id);
        $cliente->document_number = $request->document_number;
        $cliente->firts_name = $request-> firts_name;
        $cliente->last_name = $request-> last_name;
        $cliente->address = $request-> address;
        $cliente->birthday = $request-> birthday;
        $cliente->phone_number = $request-> phone_number;
        $cliente->email = $request-> email;
        $cliente->save();
        return json_encode(['cliente'=> $cliente]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return json_encode(['cliente'=>$cliente,'success'=>true]);
    }
}
