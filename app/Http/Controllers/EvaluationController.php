<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEvaluationRequest;
use App\Http\Requests\UpdateEvaluationRequest;
use App\Models\Evaluation;
use Flasher\Toastr\Prime\ToastrFactory;
use Illuminate\Support\Facades\Validator;

class EvaluationController extends Controller
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
     * @param  \App\Http\Requests\StoreEvaluationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEvaluationRequest $request, ToastrFactory $flasher)
    {
        //dd($request);
        $validator = Validator::make($request->all(), [
            'review' => ['required'],
            'score' => ['required'],
        ]);
        $validator->validate();
        Evaluation::create([
            'review' => $request->review,
            'score' => $request->score,
            'user_id' => $request->user_id,
            'restaurant_id' => $request->restaurant_id,
        ]);
        $flasher->addSuccess('¡El comentario se ha publicado con éxito!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluation $evaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluation $evaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEvaluationRequest  $request
     * @param  \App\Models\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEvaluationRequest $request, Evaluation $evaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluation $evaluation, ToastrFactory $flasher)
    {
        $evaluation->delete();
        $flasher->addSuccess('¡El comentario se ha eliminado con éxito!');
        return redirect()->back();
    }
}
