<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class misc extends Model
{
    protected $table='miscs';
    protected $primaryKey='report_id';

    public function report(){
        return $this->morphMany('App\Report','retrievable');
    }
}
