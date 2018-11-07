<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public $timestamps = false;

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
        return strtolower($this->time) === 'финал';
    }

    public function getDebatersAttribute()
    {
        return collect([$this->debater1()->first(), $this->debater2()->first(), $this->debater3()->first(), $this->debater4()->first()])->filter();
    }
}
