<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnvironmentRequest;
use App\Http\Requests\UpdateEnvironmentRequest;
use App\Models\Environment;
use Flasher\Toastr\Prime\ToastrFactory;
use Illuminate\Support\Facades\Validator;

class EnvironmentController extends Controller
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
        return view('environments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEnvironmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnvironmentRequest $request, ToastrFactory $flasher)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
        ]);
        $validator->validate();
        Environment::create([
            'name' => $request->name
        ]);
        $flasher->addSuccess('¡El tipo de ambiente se ha guardado con éxito!');
        return redirect(route('home.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Environment  $environment
     * @return \Illuminate\Http\Response
     */
    public function show(Environment $environment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Environment  $environment
     * @return \Illuminate\Http\Response
     */
    public function edit(Environment $environment)
    {
        return view('environments.edit', ['environment' => $environment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnvironmentRequest  $request
     * @param  \App\Models\Environment  $environment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnvironmentRequest $request, Environment $environment, ToastrFactory $flasher)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
        ]);
        $validator->validate();
        $environment->fill($request->toArray());
        $environment->save();
        $flasher->addSuccess('¡El tipo de ambiente se ha editado con éxito!');
        return redirect(route('home.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Environment  $environment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Environment $environment, ToastrFactory $flasher)
    {
        $environment->delete();
        $flasher->addSuccess('¡El tipo de ambiente se ha eliminado con éxito!');
        return redirect(route('home.index'));
    }
}
