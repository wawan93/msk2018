<?php

namespace App\Http\Controllers;

use App\Debater;
use Illuminate\Http\Request;

class DebaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $debaters = Debater::all();
        return view("debaters/list", compact('debaters'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Debater  $debater
     * @return \Illuminate\Http\Response
     */
    public function show(Debater $debater)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Debater  $debater
     * @return \Illuminate\Http\Response
     */
    public function edit(Debater $debater)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Debater  $debater
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Debater $debater)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Debater  $debater
     * @return \Illuminate\Http\Response
     */
    public function destroy(Debater $debater)
    {
        //
    }
}
