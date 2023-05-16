<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PayMode;
use Illuminate\Support\Facades\DB;
use Illuminate\support\Facades\Route;

class PayModeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $PayMode = DB::table('pay_mode')
        ->get();
        return json_encode(['PayMode'=>$PayMode]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $PayMode = new payMode();
        $PayMode->name = $request->name;
        $PayMode->observation = $request-> observation;
        $PayMode->save();
        return json_encode(['PayMode' => $PayMode]);      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $PayMode = payMode::find($id);
        return json_encode(['PayMode' => $PayMode]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $PayMode = payMode::find($id);
        $PayMode->name = $request->name;
        $PayMode->observation = $request-> observation;
        $PayMode->save();
        return json_encode(['PayMode' => $PayMode]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $PayMode = payMode::find($id);
        $PayMode->delete();
        return json_encode(['PayMode'=>$PayMode,'success'=>true]);
    }
}
