<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hb extends Model
{
    protected $table='hbs';
    protected $primaryKey='report_id';

    public function report(){
        return $this->morphMany('App\Report','retrievable');
    }
}
