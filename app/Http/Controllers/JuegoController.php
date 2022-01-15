<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Http\Requests\StoreJuegoRequest;
use App\Http\Requests\UpdateJuegoRequest;

class JuegoController extends Controller
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
     * @param  \App\Http\Requests\StoreJuegoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJuegoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function show(Juego $juego)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function edit(Juego $juego)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJuegoRequest  $request
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJuegoRequest $request, Juego $juego)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juego $juego)
    {
        //
    }
}
