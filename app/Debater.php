<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debater extends Model
{
    protected $hidden = ['phone'];
    protected $appends = ['photo_url'];

    public function getFullNameAttribute()
    {
        return  collect([$this->last_name, $this->first_name, $this->middle_name])->implode(' ');
    }

    public function getPhotoUrlAttribute()
    {
        return \Storage::url($this->photo);
    }
}
