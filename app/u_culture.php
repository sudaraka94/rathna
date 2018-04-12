<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class u_culture extends Model
{
    protected $table='ppbs';
    protected $primaryKey='report_id';

    public function report(){
        return $this->morphMany('App\Report','retrievable');
    }
}
