<?php

namespace App\Http\Controllers;

use App\Models\Calamar;
use App\Http\Requests\StoreCalamarRequest;
use App\Http\Requests\UpdateCalamarRequest;

class CalamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('calamar.index');
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
     * @param  \App\Http\Requests\StoreCalamarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        dd($request->all());
        return "guardando";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calamar  $calamar
     * @return \Illuminate\Http\Response
     */
    public function show(Calamar $calamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calamar  $calamar
     * @return \Illuminate\Http\Response
     */
    public function edit(Calamar $calamar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCalamarRequest  $request
     * @param  \App\Models\Calamar  $calamar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCalamarRequest $request, Calamar $calamar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calamar  $calamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calamar $calamar)
    {
        //
    }
}
