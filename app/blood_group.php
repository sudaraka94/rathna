<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blood_group extends Model
{
    //fields
    protected $table='blood_group';
//    protected $fillable=['fbs','report_id','pre_breakfast','post_breakfast','pre_lunch','post_lunch','pre_dinner','post_dinner'];
    protected $primaryKey='report_id';

    public function report(){
        return $this->morphMany('App\Report','retrievable');
    }
}
