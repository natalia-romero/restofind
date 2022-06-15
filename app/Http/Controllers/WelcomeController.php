<?php

namespace App\Http\Controllers;
use App\Models\Environment;
use App\Models\Establishment;
use App\Models\Foods;
use App\Models\Price;
use App\Models\City;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
    /**
     * Show the application welcome.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $establishments = Establishment::all();
        $environments = Environment::all();
        $foods = Foods::all();
        $prices = Price::all();
        $cities = City::all();
        return view('welcome',['establishments' => $establishments, 'environments' => $environments, 'foods' => $foods, 'prices' => $prices, 'cities' => $cities]);
    }
}
