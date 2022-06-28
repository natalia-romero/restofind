<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;
use App\Http\Requests\StoreFoodsRequest;
use App\Http\Requests\UpdateFoodsRequest;
use Flasher\Toastr\Prime\ToastrFactory;
use Illuminate\Support\Facades\Validator;


use App\Models\Foods;

class FoodsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFoodsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFoodsRequest $request, ToastrFactory $flasher)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
        ]);
        $validator->validate();
        Foods::create([
            'name' => $request->name
        ]);
        $flasher->addSuccess('¡El tipo de comida se ha guardado con éxito!');
        return redirect(route('home.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function show(Foods $foods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function edit(Foods $food)
    {
        return view('foods.edit', ['food' => $food]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFoodsRequest  $request
     * @param  \App\Models\Foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFoodsRequest $request, Foods $food, ToastrFactory $flasher)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
        ]);
        $validator->validate();
        $food->fill($request->toArray());
        $food->save();
        $flasher->addSuccess('¡El tipo de comida se ha editado con éxito!');
        return redirect(route('home.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foods  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foods $food, ToastrFactory $flasher)
    {
        $food->delete();
        $flasher->addSuccess('¡El tipo de comida se ha eliminado con éxito!');
        return redirect(route('home.index'));
    }
}
