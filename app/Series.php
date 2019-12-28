<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{

    protected $appends = ['url'];

    public function videos(){
        return $this->hasMany(Video::class)->orderBy('episode_id');
    }

    public function getUrlAttribute(){

        return route('series.show',[$this->series]);

    }
}
