<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $DataProducts = Products::all();

        return response()->json($DataProducts);
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
        $ProductsData = new Products;

        $ProductsData->prod_name = $request->prod_name;
        $ProductsData->prod_description = $request->prod_description;
        $ProductsData->prod_price = $request->prod_price;
        $ProductsData->prod_stock = $request->prod_stock;

        try {
            $ProductsData->save();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }



        return response()->json($ProductsData);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Product = Products::find($id);

        return response()->json($Product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {

        try {
            $product = Products::findOrFail($request->prod_id);

            $product->update([
                'prod_name' => $request->prod_name,
                'prod_description' => $request->prod_name,
                'prod_price' => $request->prod_name,
                'prod_stock' => $request->prod_name,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ProductsData = Products::destroy($id);

        return response()->json($ProductsData);
    }
}
