<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sfr extends Model
{
    //fields
    protected $table='sfr';
    protected $primaryKey='report_id';

    public function report(){
        return $this->morphMany('App\Report','retrievable');
    }
}
