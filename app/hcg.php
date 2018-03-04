<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hcg extends Model
{
    //fields
    protected $table='hcg';
//    protected $fillable=['fbs','report_id','pre_breakfast','post_breakfast','pre_lunch','post_lunch','pre_dinner','post_dinner'];
    protected $primaryKey='report_id';

    public function report(){
        return $this->morphMany('App\Report','retrievable');
    }
}
