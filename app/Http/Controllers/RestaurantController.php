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
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Evaluation;
use Flasher\Toastr\Prime\ToastrFactory;
use Illuminate\Support\Facades\Validator;

class RestaurantController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $restaurants = Restaurant::orderBy('id', 'asc');
        
        if ($request->filled('order')) {
            if($request->order == "2"){
                $restaurants  = Restaurant::withAvg('evaluations', 'score')->orderBy('evaluations_avg_score');
            } else {
                $restaurants  = Restaurant::withAvg('evaluations', 'score')->orderBy('evaluations_avg_score','desc');
            }
        }
        if ($request->filled('price')) {
            $restaurants = $restaurants->where('price_id', $request->price);
        }
        if ($request->filled('establishment')) {
            $restaurants = $restaurants->where('establishment_id', $request->establishment);
        }
        if ($request->filled('food')) {
            $restaurants = $restaurants->where('food_id', $request->food);
        }
        if ($request->filled('environment')) {
            $restaurants = $restaurants->where('environment_id', $request->environment);
        }
        if ($request->filled('city')) {
            $restaurants = $restaurants->where('city_id', $request->city);
        }
        $restaurants = $restaurants->paginate(6);
        $establishments = Establishment::all();
        $environments = Environment::all();
        $foods = Foods::all();
        $prices = Price::all();
        $cities = City::all();
        // dd($restaurants);
        return view('restaurants.index', ['restaurants' => $restaurants, 'establishments' => $establishments, 'environments' => $environments, 'foods' => $foods, 'prices' => $prices, 'cities' => $cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $establishments = Establishment::all();
        $environments = Environment::all();
        $foods = Foods::all();
        $prices = Price::all();
        $cities = City::all();
        return view('restaurants.create', compact('establishments', 'environments', 'foods', 'prices', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRestaurantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurantRequest $request, ToastrFactory $flasher)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'web' => ['required'],
            'menu' => ['required'],
            'phone_number' => ['required', 'max:15'],
            'city_id' => ['required'],
            'establishment_id' => ['required'],
            'food_id' => ['required'],
            'environment_id' => ['required'],
            'price_id' => ['required'],
            'img' => ['required'],
        ]);

        $validator->validate();
        $filename = null;
        if($request->hasFile('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('img'), $filename);
        }
        Restaurant::create([
            'name' => $request->name,
            'description' => $request->description,
            'web' => $request->web,
            'menu' => $request->menu,
            'phone_number' => $request->phone_number,
            'city_id' => $request->city_id,
            'establishment_id' => $request->establishment_id,
            'environment_id' => $request->environment_id,
            'price_id' => $request->price_id,
            'food_id' => $request->food_id,
            'img' => 'img/'.$filename,
        ]);

        $flasher->addSuccess('¡El restaurant se ha guardado con éxito!');
        return redirect(route('home.index'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        $evaluations = $restaurant->evaluations()->get();
        return view('restaurants.view', compact('restaurant', 'evaluations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        $establishments = Establishment::all();
        $environments = Environment::all();
        $foods = Foods::all();
        $prices = Price::all();
        $cities = City::all();
        return view('restaurants.edit', compact('restaurant','establishments', 'environments', 'foods', 'prices', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRestaurantRequest  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant, ToastrFactory $flasher)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'web' => ['required'],
            'menu' => ['required'],
            'phone_number' => ['required', 'max:15'],
            'city_id' => ['required'],
            'establishment_id' => ['required'],
            'food_id' => ['required'],
            'environment_id' => ['required'],
            'price_id' => ['required']
        ]);
        $validator->validate();
        $restaurant->fill($request->except('img'));
        if($request->hasFile('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('img'), $filename);
            $restaurant->img =  'img/'.$filename;
        }
        $restaurant->save();
        $flasher->addSuccess('¡El restaurant se ha editado con éxito!');
        return redirect(route('home.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant, ToastrFactory $flasher)
    {
        $restaurant->delete();
        $flasher->addSuccess('¡El restaurant se ha eliminado con éxito!');
        return redirect(route('home.index'));
    }
}
