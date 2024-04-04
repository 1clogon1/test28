<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::orderBy('id', 'ASC')->get();
        if($brand->isNotEmpty()){
            return response(['brand' => $brand], 200);
        }
        else{
            return response(['brand' => 'null'], 200);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car_Brand  $car_Brand
     * @return \Illuminate\Http\Response
     */
    public function show(Car_Brand $car_Brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car_Brand  $car_Brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Car_Brand $car_Brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car_Brand  $car_Brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car_Brand $car_Brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car_Brand  $car_Brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car_Brand $car_Brand)
    {
        //
    }
}
