<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class d_by extends Model
{
    protected $table='d_bies';
    protected $primaryKey='report_id';

    public function report(){
        return $this->morphMany('App\Report','retrievable');
    }
}
