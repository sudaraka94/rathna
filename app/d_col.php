<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class d_col extends Model
{
    protected $table='d_cols';
    protected $primaryKey='report_id';

    public function report(){
        return $this->morphMany('App\Report','retrievable');
    }
}
