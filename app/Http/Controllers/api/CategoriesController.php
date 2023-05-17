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
        $categories = new Categorie();
        $categories->name = $request->name;
        $categories->description = $request-> description;
        $categories->save();
        return json_encode(['categorie' => $categories]);      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = Categorie::find($id);
        
        return json_encode(['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categories = Categorie::find($id);
        $categories->name = $request->name;
        $categories->description = $request-> description;
        $categories->save();
        return json_encode(['categories' => $categories]);   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = Categorie::find($id);
        $categories->delete();
        return json_encode(['categories'=>$categorie,'success'=>true]);
    }
}
