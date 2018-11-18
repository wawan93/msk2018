<?php

namespace App\Http\Controllers;

use App\Day;
use App\Debater;
use App\Settings;

class DebaterController extends Controller
{
    public function index()
    {
        $debaters = Debater::orderBy("last_name")->get();
        $format = Settings::where(["key"=>"today"])->first();
        $days = Day::where("day", $format->value)->get();

        return view("debaters/list", compact('debaters', 'days'));
    }

    public function timetable()
    {
        $debaters = Debater::orderBy("last_name")->get()->keyBy("id");
        $groupedDays = Day::query()->orderBy("day", "ASC")->orderBy("group")->get()->groupBy(function ($el) {
            $day = $el->day->format('j');
            if ($day == "19" && $el->group === "4") {
                $day = "СУПЕРФИНАЛ";
            }
            return $day;
        });

        return view("debaters/timetable", compact('debaters', 'groupedDays'));
    }

    public function show(Debater $debater)
    {
        return view("debaters.show", compact("debater"));
    }
}
