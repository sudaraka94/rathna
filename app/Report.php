<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \DateTime;

class Report extends Model
{
    //fields
    protected $table='report';
    protected $fillable=['id','name','age_years','age_months','age_days','gender','type','date','specimen'];
    
    //methods
    public function retrievable(){
        return $this->morphTo();
    }

    public function getMyType(){
        return $this->belongsTo('App\Type', 'type', 'type_id');
    }

    public function getType(){
//        var_dump($this->getMyType()->first());
        return $this->getMyType()->first()->type;
    }

    public function getObject(){
        if($this->type=='1'|$this->type=='2'|$this->type=='3'){
            return Bsst::where('report_id',$this->id)->first();
        }else if($this->type=='4'|$this->type=='5'|$this->type=='6'){
            return fbs::where('report_id',$this->id)->first();
        }else if($this->type=='7'){
            return ufr::where('report_id',$this->id)->first();
        }else if($this->type=='8'){
            return sfr::where('report_id',$this->id)->first();
        }else if($this->type=='9'|$this->type=='10'){
            return hcg::where('report_id',$this->id)->first();
        }else if($this->type=='11'){
            return blood_group::where('report_id',$this->id)->first();
        }else if($this->type=='12'){
            return lipidp::where('report_id',$this->id)->first();
        }else if($this->type=='13'|$this->type=='14'|$this->type=='15'){
            return s_creatinine::where('report_id',$this->id)->first();
        }else if($this->type=='16'|$this->type=='17'|$this->type=='18'|$this->type=='19'){
            return glucose::where('report_id',$this->id)->first();
        }else if($this->type=='20'|$this->type=='21'|$this->type=='22'|$this->type=='23'){
            return ppbs::where('report_id',$this->id)->first();
        }else if($this->type=='24'){
            return u_culture::where('report_id',$this->id)->first();
        }else if($this->type=='25' | $this->type=='26' | $this->type=='27' | $this->type=='28' | $this->type=='29' | $this->type=='30' | $this->type=='31' | $this->type=='32' | $this->type=='33' | $this->type=='34' | $this->type=='35' | $this->type=='36' | $this->type=='37'){
            return serum::where('report_id',$this->id)->first();
        }else if($this->type=='38' | $this->type=='39' | $this->type=='40' | $this->type=='41' | $this->type=='42' | $this->type=='43' | $this->type=='44' | $this->type=='45' | $this->type=='33' | $this->type=='34' | $this->type=='35' | $this->type=='36' | $this->type=='37'){
            return esr::where('report_id',$this->id)->first();
        }else if($this->type=='51' | $this->type=='52' | $this->type=='53' | $this->type=='54'){
            return hb::where('report_id',$this->id)->first();
        }else if($this->type=='55' | $this->type=='56' | $this->type=='57' | $this->type=='58' | $this->type=='59' | $this->type=='60' | $this->type=='61' | $this->type=='62'){
            return misc::where('report_id',$this->id)->first();
        }else if($this->type=='63' | $this->type=='64' | $this->type=='65' | $this->type=='66'){
            return ufr_plus::where('report_id',$this->id)->first();
        }
    }

    public function getDate(){
        $date = $this->date;

        $createDate = new DateTime($date);

        $strip = $createDate->format('Y-m-d');
        return $strip; // string(10) "2012-09-09"
    }
    public function getPickDate(){
        $date = $this->date;

        $createDate = new DateTime($date);

        $strip = $createDate->format('m/d/Y');
        return $strip; // string(10) "2012-09-09"
    }
}
