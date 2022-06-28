<?php

namespace App\Http\Controllers;
use App\Models\Environment;
use App\Models\Establishment;
use App\Models\Foods;
use App\Models\Price;
use App\Models\City;
use App\Models\Restaurant;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::orderBy('id','asc')->paginate(3, ['*'],  'users');
        $restaurants = Restaurant::orderBy('id','asc')->paginate(3, ['*'],  'restaurants');
        $establishments = Establishment::orderBy('id','asc')->paginate(3, ['*'],  'establishments');
        $environments = Environment::orderBy('id','asc')->paginate(3, ['*'],  'environments');
        $foods = Foods::orderBy('id','asc')->paginate(3, ['*'],  'foods');
        $prices = Price::orderBy('id','asc')->paginate(3, ['*'],  'prices');
        $cities = City::orderBy('id','asc')->paginate(3, ['*'],  'cities');
        //dd($restaurants);
        return view('dashboard',compact('establishments', 'environments', 'foods', 'prices', 'cities', 'restaurants','users'));
    }
}
