<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class esr extends Model
{
    protected $table='esrs';
    protected $primaryKey='report_id';

    public function report(){
        return $this->morphMany('App\Report','retrievable');
    }
}
