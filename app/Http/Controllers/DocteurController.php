<?php

namespace App\Http\Controllers;

use App\Models\docteur;
use App\Http\Requests\StoredocteurRequest;
use App\Http\Requests\UpdatedocteurRequest;

class DocteurController extends Controller
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
     * @param  \App\Http\Requests\StoredocteurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredocteurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\docteur  $docteur
     * @return \Illuminate\Http\Response
     */
    public function show(docteur $docteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\docteur  $docteur
     * @return \Illuminate\Http\Response
     */
    public function edit(docteur $docteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedocteurRequest  $request
     * @param  \App\Models\docteur  $docteur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedocteurRequest $request, docteur $docteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\docteur  $docteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(docteur $docteur)
    {
        //
    }
}
