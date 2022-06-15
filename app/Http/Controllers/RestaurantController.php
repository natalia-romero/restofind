<?php

namespace App\Http\Controllers;
use App\Models\Environment;
use App\Models\Establishment;
use App\Models\Foods;
use App\Models\Price;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $restaurants = Restaurant::all();
        if($request->filled('price')){
            $restaurants = $restaurants->where('price_id',$request->price);
        }
        if($request->filled('establishment')){
            $restaurants = $restaurants->where('establishment_id',$request->establishment);
        }
        if($request->filled('food')){
            $restaurants = $restaurants->where('food_id',$request->food);
        }
        if($request->filled('environments')){
            $restaurants = $restaurants->where('environments_id',$request->environments);
        }
        if($request->filled('city')){
            $restaurants = $restaurants->where('city_id',$request->city);
        }
        $establishments = Establishment::all();
        $environments = Environment::all();
        $foods = Foods::all();
        $prices = Price::all();
        $cities = City::all();
        //dd($restaurants);
        return view('restaurants.index',['restaurants' => $restaurants,'establishments' => $establishments, 'environments' => $environments, 'foods' => $foods, 'prices' => $prices, 'cities' => $cities]);
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
     * @param  \App\Http\Requests\StoreRestaurantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRestaurantRequest  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
