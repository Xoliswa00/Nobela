<?php

namespace App\Http\Controllers;

use App\Models\propert_img;
use App\Http\Requests\Storepropert_imgRequest;
use App\Http\Requests\Updatepropert_imgRequest;

class PropertImgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Storepropert_imgRequest $request)
    {
        //
        $request->validate([
    'title' => 'required|string|max:255',
    'price' => 'required|numeric',
    'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
]);

$property = Property::create($request->all());

if($request->hasFile('images')){
    foreach($request->file('images') as $image){
        $path = $image->store('properties', 'public');
        $property->images()->create(['image_path' => $path]);
    }
}

    }

    /**
     * Display the specified resource.
     */
    public function show(propert_img $propert_img)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(propert_img $propert_img)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatepropert_imgRequest $request, propert_img $propert_img)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(propert_img $propert_img)
    {
        //
    }
}
