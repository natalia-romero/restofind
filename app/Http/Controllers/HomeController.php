<?php

namespace App\Http\Controllers;
use App\Models\Environment;
use App\Models\Establishment;
use App\Models\Foods;
use App\Models\Price;
use App\Models\City;
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
        $establishments = Establishment::all();
        $environments = Environment::all();
        $foods = Foods::all();
        $prices = Price::all();
        return view('dashboard',['establishments' => $establishments, 'environments' => $environments, 'foods' => $foods, 'prices' => $prices]);
    }
}
