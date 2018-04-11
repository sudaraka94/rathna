<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class glucose extends Model
{
    protected $table='glucoses';
    protected $primaryKey='report_id';

    public function report(){
        return $this->morphMany('App\Report','retrievable');
    }
}
