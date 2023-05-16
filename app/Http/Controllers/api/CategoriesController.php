<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categorie;
use Illuminate\Support\Facades\DB;
use Illuminate\support\Facades\Route;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = DB::table('categories')
        ->get();
        return json_encode(['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorie = new Categorie();
        $categorie->name = $request->name;
        $categorie->description = $request-> description;
        $categorie->save();
        return json_encode(['categorie' => $categorie]);      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorie = Categorie::find($id);
        
        return json_encode(['categorie' => $categorie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categorie = Categorie::find($id);
        $categorie->name = $request->name;
        $categorie->description = $request-> description;
        $categorie->save();
        return json_encode(['categorie' => $categorie]);   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();
        return json_encode(['categorie'=>$categorie,'success'=>true]);
    }
}
