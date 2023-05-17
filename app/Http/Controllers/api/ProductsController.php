<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\support\Facades\Route;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Products = DB::table('Products')
        ->get();
        return json_encode(['Products'=>$Products]);    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Products = new Products();
        $Products->name = $request->name;
        $Products->price = $request-> price;
        $Products->stock = $request-> stock;
        $Products->category_id = $request-> category_id;
        $Products->save();
        return json_encode(['Products' => $Products]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Products = Products::find($id);       
        return json_encode(['Products' => $Products]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Products = Products::find($id); 
        $Products->name = $request->name;
        $Products->price = $request-> price;
        $Products->stock = $request-> stock;
        $Products->category_id = $request-> category_id;
        $Products->save();
        return json_encode(['Products' => $Products]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Products = Products::find($id);
        $Products->delete();
        return json_encode(['Products'=>$Products,'success'=>true]);
    }
}
