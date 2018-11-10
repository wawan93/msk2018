<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public $timestamps = false;
    protected $casts = [
        'day' => 'date'
    ];

    public function debater1() {
        return $this->hasOne(Debater::class, "id", "debater1");
    }
    public function debater2() {
        return $this->hasOne(Debater::class, "id", "debater2");
    }
    public function debater3() {
        return $this->hasOne(Debater::class, "id", "debater3");
    }
    public function debater4() {
        return $this->hasOne(Debater::class, "id", "debater4");
    }

    public function isFinal()
    {
        return $this->group == 3;
    }

    public function isWeekFinal()
    {
        return intval($this->day->format('N')) === 7;
    }

    public function isVagueWeekFinal()
    {
        if (!$this->isWeekFinal()) {
            return false;
        }

        $knownFinalistsCount = Day::where('day', $this->day)->get()->flatMap(function ($day) {
            return $day->debaters;
        })->count();

        return $knownFinalistsCount < 6;
    }

    public function getDayOfWeekAttribute()
    {
        $days = [null, 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
        return $days[$this->day->format('N')];
    }

    public function getDebatersAttribute()
    {
        return collect([$this->debater1()->first(), $this->debater2()->first(), $this->debater3()->first(), $this->debater4()->first()])->filter();
    }
}
