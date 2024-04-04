<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                $sample = Sample::orderBy('id', 'ASC')
            ->join('brands', 'brands.id', '=', 'samples.brand_id')
            ->select('samples.id','samples.name','brands.name as brands','samples.created_at','samples.updated_at')
            ->get();


        if($sample->isNotEmpty()){
            return response(['sample' => $sample], 200);
        }
        else{
            return response(['sample' => 'null'], 200);
        }
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
     * @param  \App\Models\Car_Model  $car_Model
     * @return \Illuminate\Http\Response
     */
    public function show(Car_Model $car_Model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car_Model  $car_Model
     * @return \Illuminate\Http\Response
     */
    public function edit(Car_Model $car_Model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car_Model  $car_Model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car_Model $car_Model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car_Model  $car_Model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car_Model $car_Model)
    {
        //
    }
}
