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
        $products = new Products();
        $products->name = $request->name;
        $products->price = $request-> price;
        $products->stock = $request-> stock;
        $products->category_id = $request-> category_id;
        $products->save();
        return json_encode(['cliente' => $cliente]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Products::find($id);       
        return json_encode(['products' => $products]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products = Products::find($id); 
        $products->name = $request->name;
        $products->price = $request-> price;
        $products->stock = $request-> stock;
        $products->category_id = $request-> category_id;
        $products->save();
        return json_encode(['cliente' => $cliente]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Products::find($id);
        $products->delete();
        return json_encode(['products'=>$products,'success'=>true]);
    }
}
