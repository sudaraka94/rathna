<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sfa extends Model
{
    protected $table='sfas';
    protected $primaryKey='report_id';

    public function report(){
        return $this->morphMany('App\Report','retrievable');
    }
}
