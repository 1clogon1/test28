<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Sample;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car = Car::get();
        if($car->isNotEmpty()){
            return response(['car' => $car], 200);
        }
        else{
            return response(['car' => 'null'], 200);
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
        $request->validate([
            'brand_id' => 'required|numeric|min:1|max:99999999999',
            'sample_id' => 'required|numeric|min:1|max:99999999999',
            'release_year' => 'numeric|min:1|max:9999',
            'mileage' => 'numeric|min:1|max:99999999999',
            'color' => 'string|regex:/^[a-zA-Z]+$/u|min:1|max:100',
        ]);
            $brand = Brand::where('id',$request->brand_id)->first();
            if($brand!=null){
                $sample = Sample::where('id',$request->sample_id)->first();
                if($sample!=null){
                    Car::create($request->all());
                    return response(['message' => 'Автомобиль добавлен'], 200);
                }
                else{
                    return response(['message' => 'Такого id модели автомобиля не найдено'], 404);
                }
            }
            else{
                return response(['message' => 'Такого id бренда автомобиля не найдено'], 404);

            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'brand_id' => 'required|numeric|min:1|max:99999999999',
            'sample_id' => 'required|numeric|min:1|max:99999999999',
            'release_year' => 'numeric|min:1|max:9999',
            'mileage' => 'numeric|min:1|max:99999999999',
            'color' => 'string|regex:/^[a-zA-Z]+$/u|min:1|max:100',
        ]);
        $car = Car::where('id',$id)->first();
        if($car!=null){
            $brand = Brand::where('id',$request->brand_id)->first();
            if($brand!=null){
                $sample = Sample::where('id',$request->sample_id)->first();
                if($sample!=null){
                    $car->update($request->all());
                    return response(['message' => 'Автомобиль обновлен'], 200);
                }
                else{
                    return response(['message' => 'Такого id модели автомобиля не найдено'], 404);
                }
            }
            else{
                return response(['message' => 'Такого id бренда автомобиля не найдено'], 404);

            }
        }
        else{
            return response(['message' => 'Такого id автомобиля не найдено'], 404);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Car::where('id',$id)->first();
        if($destroy!=null){
            $destroy->delete();
            return response(['message' => 'Автомобиль удален'], 200);
        }
        else{
            return response(['message' => 'Такого id автомобиля не найдено'], 404);
        }

    }
}
