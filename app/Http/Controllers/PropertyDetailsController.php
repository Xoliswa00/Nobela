<?php

namespace App\Http\Controllers;

use App\Models\property_details;
use App\Http\Requests\Storeproperty_detailsRequest;
use App\Http\Requests\Updateproperty_detailsRequest;

class PropertyDetailsController extends Controller
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
    public function store(Storeproperty_detailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(property_details $property_details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(property_details $property_details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateproperty_detailsRequest $request, property_details $property_details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(property_details $property_details)
    {
        //
    }
}
