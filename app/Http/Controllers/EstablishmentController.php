<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstablishmentRequest;
use App\Http\Requests\UpdateEstablishmentRequest;
use App\Models\Establishment;
use Flasher\Toastr\Prime\ToastrFactory;
use Illuminate\Support\Facades\Validator;

class EstablishmentController extends Controller
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
        return view('establishments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEstablishmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstablishmentRequest $request, ToastrFactory $flasher)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
        ]);
        $validator->validate();
        Establishment::create([
            'name' => $request->name
        ]);
        $flasher->addSuccess('¡El tipo de local se ha guardado con éxito!');
        return redirect(route('home.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function show(Establishment $establishment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function edit(Establishment $establishment)
    {
        return view('establishments.edit', ['establishment' => $establishment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstablishmentRequest  $request
     * @param  \App\Models\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstablishmentRequest $request, Establishment $establishment, ToastrFactory $flasher)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
        ]);
        $validator->validate();
        $establishment->fill($request->toArray());
        $establishment->save();
        $flasher->addSuccess('¡El tipo de local se ha editado con éxito!');
        return redirect(route('home.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Establishment $establishment, ToastrFactory $flasher)
    {
        $establishment->delete();
        $flasher->addSuccess('¡El tipo de local se ha eliminado con éxito!');
        return redirect(route('home.index'));
    }
}
