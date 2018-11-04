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
        return $this->hasOne(Debater::class, "id", "debater1");
    }
    public function debater3() {
        return $this->hasOne(Debater::class, "id", "debater1");
    }
    public function debater4() {
        return $this->hasOne(Debater::class, "id", "debater1");
    }
}
