<?php

namespace App\Http\Controllers;

use App\Day;
use App\Debater;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DebaterController extends Controller
{
    public function index()
    {
        $debaters = Debater::orderBy("last_name")->get();
        $days = Day::where("day", Carbon::now()->format("Y-m-d"))->get();

        return view("debaters/list", compact('debaters', 'days'));
    }

    public function timetable()
    {
        $debaters = Debater::orderBy("last_name")->get()->keyBy("id");
        $groupedDays = Day::query()->orderBy("day", "ASC")->orderBy("group")->get()->groupBy(function ($el) {
            return $el->day->format('j');
        });

        return view("debaters/timetable", compact('debaters', 'groupedDays'));
    }

    public function show(Debater $debater)
    {
        return view("debaters.show", compact("debater"));
    }
}
