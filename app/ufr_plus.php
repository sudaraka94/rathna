<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ufr_plus extends Model
{
    protected $table='ufr_pluses';
    protected $primaryKey='report_id';

    public function report(){
        return $this->morphMany('App\Report','retrievable');
    }
}
