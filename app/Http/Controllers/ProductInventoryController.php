<?php

namespace App\Http\Controllers;

use App\Models\ProductInventory;
use App\Http\Requests\StoreProductInventoryRequest;
use App\Http\Requests\UpdateProductInventoryRequest;

class ProductInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductInventoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductInventoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductInventory  $productInventory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductInventory $productInventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductInventory  $productInventory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductInventory $productInventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductInventoryRequest  $request
     * @param  \App\Models\ProductInventory  $productInventory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductInventoryRequest $request, ProductInventory $productInventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductInventory  $productInventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductInventory $productInventory)
    {
        //
    }
}
