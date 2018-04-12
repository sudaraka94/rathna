<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serum extends Model
{
    protected $table='serums';
    protected $primaryKey='report_id';

    public function report(){
        return $this->morphMany('App\Report','retrievable');
    }
}
