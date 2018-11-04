<?php

namespace App\Http\Controllers;

use App\Day;
use App\Debater;
use Carbon\Carbon;
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
        $debaters = Debater::orderBy("last_name")->get()->keyBy("id");
        $days = Day::query()->where("day", Carbon::now()->format("Y-m-d"))->get();

        return view("debaters/list", compact('debaters', 'days'));
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
        return view("debaters.show", compact("debater"));
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
