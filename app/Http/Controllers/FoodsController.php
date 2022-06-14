<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFoodsRequest;
use App\Http\Requests\UpdateFoodsRequest;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFoodsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFoodsRequest $request)
    {
        //
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
    public function edit(Foods $foods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFoodsRequest  $request
     * @param  \App\Models\Foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFoodsRequest $request, Foods $foods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foods $foods)
    {
        //
    }
}
