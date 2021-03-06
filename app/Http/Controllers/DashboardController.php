<?php

namespace App\Http\Controllers;

use App\Bsst;
use App\d_by;
use App\d_col;
use App\fbs;
use App\blood_group;
use App\hcg;
use App\lipidp;
use App\misc;
use App\sfa;
use App\ufr;
use App\Report;
use App\s_creatinine;
use App\glucose;
use App\ppbs;
use App\u_culture;
use App\serum;
use App\esr;
use App\hb;
use App\ufr_plus;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Type;
use Illuminate\Support\Facades\Redirect;
use Mockery\Exception;

class DashboardController extends Controller
{

  public function new_form_choose(Request $request){
//      $this->validate($request,[
//         'name'=>'required',
//          'gender'=>'required',
//          'type'=>'required'
//      ]);
      return view('Dashboard.new_report')->with('user',Auth::user())->with('req',$request)->with('types',Type::all())->with('submit','new')->with('obj',new Request())->with('req_old',new Bsst());
  }
    public function edit_form_choose(Request $request){
        $req=Report::Where('id',$request->input('id'))->first();
        $req_old=$req->getObject();
        return view('Dashboard.new_report')->with('user',Auth::user())->with('obj',$req)->with('req',$request)->with('req_old',$req_old)->with('types',Type::all())->with('submit','edit');
    }
    
    public function index() {
        return view('Dashboard.index')->with('user',Auth::user())->with('types',Type::all());
    }

    public function submit_form(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'date' => 'required',
        ]);
        $report=new Report;
        $report->name_front=$request->input('name_front');
        $report->name=$request->input('name');
        $report->gender=$request->input('gender');
        $report->age_years=$request->input('age_years');
        $report->age_months=$request->input('age_months');
        $report->age_days=$request->input('age_days');
        $report->type=$request->input('type');
        $report->specimen=$request->input('specimen');
        $report->date=Carbon::createFromFormat('m/d/Y',$request->input('date'));
        if($report->save()){
            if($request->input('type')==1 or $request->input('type')==2 or $request->input('type')==3 ){
                $bsst=new Bsst;
                $bsst->report_id=$report->id;
                $bsst->fbs=$request->input('fbs');
                $bsst->pre_breakfast=$request->input('pre_breakfast');
                $bsst->post_breakfast=$request->input('post_breakfast');
                $bsst->pre_lunch=$request->input('pre_lunch');
                $bsst->post_lunch=$request->input('post_lunch');
                $bsst->pre_dinner=$request->input('pre_dinner');
                $bsst->post_dinner=$request->input('post_dinner');
                if(!$bsst->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
//                return view('Dashboard.view_report')->with('user',Auth::user())->with('report',$report)->with('det',$bsst)->with('types',Type::all());
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$bsst);
            }else if($request->input('type')==4 or $request->input('type')==5 or $request->input('type')==6 ){
                $fbs=new fbs;
                $fbs->report_id=$report->id;
                $fbs->fbs=$request->input('fbs');
                $fbs->ppbs=$request->input('ppbs');
                $fbs->urine_sugar=$request->input('urine_sugar');
                $fbs->urine_albumen=$request->input('urine_albumen');
                if(!$fbs->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$fbs);
            }else if($request->input('type')==7 or $request->input('type')==8){
                $ufr=new ufr;
                $ufr->report_id=$report->id;
                $ufr->appearance=$request->input('appearance');
                $ufr->sg=$request->input('sg');
                $ufr->reaction=$request->input('reaction');
                $ufr->albumen=$request->input('albumen');
                $ufr->sugar=$request->input('sugar');
                $ufr->acetone=$request->input('acetone');
                $ufr->bile=$request->input('bile');
                $ufr->urobilino=$request->input('urobilino');
                $ufr->u_pus=$request->input('u_pus');
                $ufr->u_rbc=$request->input('u_rbc');
                $ufr->fpi=$request->input('fpi');
                $ufr->cast=$request->input('cast');
                $ufr->o_deposit=$request->input('o_deposit');
                $ufr->crystals=$request->input('crystals');
                $ufr->hwo=$request->input('hwo');
                $ufr->rwo=$request->input('rwo');
                $ufr->ameba=$request->input('ameba');
                $ufr->cysts=$request->input('cysts');
                $ufr->clc=$request->input('clc');
                $ufr->s_pus=$request->input('s_pus');
                $ufr->s_rbc=$request->input('s_rbc');
                $ufr->mucus=$request->input('mucus');
                $ufr->macrophags=$request->input('macrophags');
                $ufr->consistens=$request->input('consistens');
                $ufr->r_substances=$request->input('r_substances');

                if(!$ufr->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$ufr);
            }else if($request->input('type')==9 or $request->input('type')==10){
                $hcg=new hcg;
                $hcg->report_id=$report->id;
                $hcg->hcg=$request->input('hcg');
                $hcg->repeat=$request->input('repeat');
                $hcg->appearance=$request->input('appearance');
                $hcg->sg=$request->input('sg');
                $hcg->reaction=$request->input('reaction');
                $hcg->albumen=$request->input('albumen');
                $hcg->sugar=$request->input('sugar');
                $hcg->acetone=$request->input('acetone');
                $hcg->bile=$request->input('bile');
                $hcg->urobilino=$request->input('urobilino');
                $hcg->u_pus=$request->input('u_pus');
                $hcg->u_rbc=$request->input('u_rbc');
                $hcg->fpi=$request->input('fpi');
                $hcg->cast=$request->input('cast');
                $hcg->o_deposit=$request->input('o_deposit');
                $hcg->crystals=$request->input('crystals');

                if(!$hcg->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$hcg);
            }else if($request->input('type')==11){
                $blood_group=new blood_group;
                $blood_group->report_id=$report->id;
                $blood_group->group=$request->input('group');

                if(!$blood_group->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$blood_group);
            }else if($request->input('type')==12){
                $lipidp=new lipidp;
                $lipidp->report_id=$report->id;
                $lipidp->c_total=$request->input('c_total');
                $lipidp->c_hdl=$request->input('c_hdl');
                $lipidp->triglycerides=$request->input('triglycerides');
                $lipidp->c_ldl=$request->input('c_ldl');
                $lipidp->c_total_hdl=$request->input('c_total_hdl');

                if(!$lipidp->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$lipidp);
            }else if($request->input('type')==13|$request->input('type')==14|$request->input('type')==15){
                $s_creatinine=new s_creatinine;
                $s_creatinine->report_id=$report->id;
                $s_creatinine->s_creatinine=$request->input('s_creatinine');
                $s_creatinine->egfr=$request->input('egfr');
                $s_creatinine->b_urea=$request->input('b_urea');

                if(!$s_creatinine->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$s_creatinine);
            }else if($request->input('type')==16|$request->input('type')==17|$request->input('type')==18|$request->input('type')==19){
                $glucose=new glucose;
                $glucose->report_id=$report->id;
                $glucose->f_b_sugar=$request->input('f_b_sugar');
                $glucose->half_fasting_b_sugar=$request->input('half_fasting_b_sugar');
                $glucose->one_b_sugar=$request->input('one_b_sugar');
                $glucose->one_half_fasting_b_sugar=$request->input('one_half_fasting_b_sugar');
                $glucose->one_fasting_b_sugar=$request->input('one_fasting_b_sugar');

                if(!$glucose->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$glucose);
            }else if($request->input('type')==20|$request->input('type')==21|$request->input('type')==22|$request->input('type')==23){
                $ppbs=new ppbs;
                $ppbs->report_id=$report->id;
                $ppbs->ppbs=$request->input('ppbs');
                $ppbs->rbs=$request->input('rbs');
                $ppbs->ppbs_p_breakfast=$request->input('ppbs_p_breakfast');
                $ppbs->ppbs_p_lunch=$request->input('ppbs_p_lunch');
                $ppbs->ppbs_p_dinner=$request->input('ppbs_p_dinner');
                $ppbs->u_sugar=$request->input('u_sugar');
                $ppbs->u_albumen=$request->input('u_albumen');

                if(!$ppbs->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$ppbs);
            }else if($request->input('type')==24){
                $u_culture=new u_culture;
                $u_culture->report_id=$report->id;
                $u_culture->p_cells=$request->input('p_cells');
                $u_culture->r_cells=$request->input('r_cells');
                $u_culture->e_cells=$request->input('e_cells');
                $u_culture->c_report=$request->input('c_report');
                $u_culture->b_count=$request->input('b_count');
                $u_culture->a_test=$request->input('a_test');
                $u_culture->augmentin=$request->input('augmentin');
                $u_culture->ampicillin=$request->input('ampicillin');
                $u_culture->amikacin=$request->input('amikacin');
                $u_culture->amoxycilin=$request->input('amoxycilin');
                $u_culture->ciprofloxacin=$request->input('ciprofloxacin');
                $u_culture->cephalexin=$request->input('cephalexin');
                $u_culture->ceftazidime=$request->input('ceftazidime');
                $u_culture->cefoxitin=$request->input('cefoxitin');
                $u_culture->cefuroxime=$request->input('cefuroxime');
                $u_culture->gentamicin=$request->input('gentamicin');
                $u_culture->meropenem=$request->input('meropenem');
                $u_culture->norfloxacin=$request->input('norfloxacin');
                $u_culture->nitrofurantoin=$request->input('nitrofurantoin');
                $u_culture->nalidixic=$request->input('nalidixic');

                if(!$u_culture->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$u_culture);
            }else if($request->input('type')==25 | $request->input('type')==26 | $request->input('type')==27 | $request->input('type')==28 | $request->input('type')==29 | $request->input('type')==30 | $request->input('type')==31 | $request->input('type')==32 | $request->input('type')==33 | $request->input('type')==34 | $request->input('type')==35 | $request->input('type')==36 | $request->input('type')==37){
                $serum=new serum;
                $serum->report_id=$report->id;
                $serum->esr=$request->input('esr');
                $serum->hiv=$request->input('hiv');
                $serum->ion_r=$request->input('ion_r');
                $serum->ion_remarks=$request->input('ion_remarks');
                $serum->malaria=$request->input('malaria');
                $serum->platelets=$request->input('platelets');
                $serum->s_amylase=$request->input('s_amylase');
                $serum->s_bilirubin=$request->input('s_bilirubin');
                $serum->bil_remarks=$request->input('bil_remarks');
                $serum->s_calcium=$request->input('s_calcium');
                $serum->cal_remarks=$request->input('cal_remarks');
                $serum->s_gamma=$request->input('s_gamma');
                $serum->gam_remarks=$request->input('gam_remarks');
                $serum->troponin=$request->input('troponin');
                $serum->u_micro=$request->input('u_micro');
                $serum->micro_remarks=$request->input('micro_remarks');
                $serum->vdrl=$request->input('vdrl');
                $serum->norfloxacin=$request->input('s_potassium');
                $serum->nitrofurantoin=$request->input('pot_remarks');

                if(!$serum->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$serum);
            }else if($request->input('type')==38 | $request->input('type')==39 | $request->input('type')==40 | $request->input('type')==41 | $request->input('type')==42 | $request->input('type')==43 | $request->input('type')==44 | $request->input('type')==45 | $request->input('type')==46 | $request->input('type')==47 | $request->input('type')==48 | $request->input('type')==49 | $request->input('type')==50){
                $esr=new esr;
                $esr->report_id=$report->id;
                $esr->b_uria=$request->input('b_uria');
                $esr->esr=$request->input('esr');
                $esr->fbs=$request->input('fbs');
                $esr->rbs=$request->input('rbs');
                $esr->rh_f=$request->input('rh_f');
                $esr->s_creat=$request->input('s_creat');
                $esr->t_cholesterol=$request->input('t_cholesterol');
                $esr->tri_g=$request->input('tri_g');
                $esr->hb=$request->input('hb');
                $esr->ppbs=$request->input('ppbs');
                $esr->sgot=$request->input('sgot');
                $esr->sgot_r=$request->input('sgot_r');
                $esr->sgpt=$request->input('sgpt');
                $esr->sgpt_r=$request->input('sgpt_r');

                if(!$esr->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$esr);
            }else if($request->input('type')==51 | $request->input('type')==52 | $request->input('type')==53 | $request->input('type')==54 ){
                $hb=new hb;
                $hb->report_id=$report->id;
                $hb->hb=$request->input('hb');
                $hb->wbc=$request->input('wbc');
                $hb->poly=$request->input('poly');
                $hb->lym=$request->input('lym');
                $hb->eso=$request->input('eso');
                $hb->bas=$request->input('bas');
                $hb->mon=$request->input('mon');
                $hb->malaria=$request->input('malaria');
                $hb->platelets=$request->input('platelets');
                $hb->remarks=$request->input('remarks');

                if(!$hb->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$hb);
            }else if($request->input('type')==55 | $request->input('type')==56 | $request->input('type')==57 | $request->input('type')==58| $request->input('type')==59| $request->input('type')==60| $request->input('type')==61| $request->input('type')==62){
                $misc=new misc;
                $misc->report_id=$report->id;
                $misc->bt=$request->input('bt');
                $misc->ct=$request->input('ct');
                $misc->crp=$request->input('crp');
                $misc->sodium=$request->input('sodium');
                $misc->potassium=$request->input('potassium');
                $misc->chloride=$request->input('chloride');
                $misc->fil_m=$request->input('fil_m');
                $misc->fil_g=$request->input('fil_g');
                $misc->g_hb=$request->input('g_hb');
                $misc->g_hb_r=$request->input('g_hb_r');
                $misc->pcv=$request->input('pcv');
                $misc->platelets=$request->input('platelets');
                $misc->p_time=$request->input('p_time');
                $misc->p_time_r=$request->input('p_time_r');
                $misc->n_control=$request->input('n_control');
                $misc->n_control_r=$request->input('n_control_r');
                $misc->inr=$request->input('inr');
                $misc->p_time=$request->input('p_time');
                $misc->p_time_r=$request->input('p_time_r');
                $misc->n_control=$request->input('n_control');
                $misc->n_control_r=$request->input('n_control_r');
                $misc->stp=$request->input('stp');
                $misc->globulin=$request->input('globulin');
                $misc->agr=$request->input('agr');

                if(!$misc->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$misc);
            }else if($request->input('type')==63 | $request->input('type')==64 | $request->input('type')==65 | $request->input('type')==66){
                $ufr_plus=new ufr_plus;
                $ufr_plus->report_id=$report->id;
                $ufr_plus->fbs=$request->input('fbs');
                $ufr_plus->hb=$request->input('hb');
                $ufr_plus->ppbs=$request->input('ppbs');
                $ufr_plus->rbs=$request->input('rbs');
                $ufr_plus->appearance=$request->input('appearance');
                $ufr_plus->reaction=$request->input('reaction');
                $ufr_plus->albumen=$request->input('albumen');
                $ufr_plus->sugar=$request->input('sugar');
                $ufr_plus->acetone=$request->input('acetone');
                $ufr_plus->bile=$request->input('bile');
                $ufr_plus->urobilino=$request->input('urobilino');
                $ufr_plus->u_pus=$request->input('u_pus');
                $ufr_plus->u_rbc=$request->input('u_rbc');
                $ufr_plus->fpi=$request->input('fpi');
                $ufr_plus->cast=$request->input('cast');
                $ufr_plus->o_deposit=$request->input('o_deposit');
                $ufr_plus->crystals=$request->input('crystals');

                if(!$ufr_plus->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$ufr_plus);
            }else if($request->input('type')==67 | $request->input('type')==68 | $request->input('type')==69 ){
                $d_col=new d_col;
                $d_col->report_id=$report->id;

                $d_col->appearance=$request->input('appearance');
                $d_col->sg=$request->input('sg');
                $d_col->reaction=$request->input('reaction');
                $d_col->albumen=$request->input('albumen');
                $d_col->sugar=$request->input('sugar');
                $d_col->acetone=$request->input('acetone');
                $d_col->bile=$request->input('bile');
                $d_col->urobilino=$request->input('urobilino');
                $d_col->u_pus=$request->input('u_pus');
                $d_col->u_rbc=$request->input('u_rbc');
                $d_col->fpi=$request->input('fpi');
                $d_col->cast=$request->input('cast');
                $d_col->o_deposit=$request->input('o_deposit');
                $d_col->crystals=$request->input('crystals');

                $d_col->hwo=$request->input('hwo');
                $d_col->rwo=$request->input('rwo');
                $d_col->ameba=$request->input('ameba');
                $d_col->cysts=$request->input('cysts');
                $d_col->clc=$request->input('clc');
                $d_col->s_pus=$request->input('s_pus');
                $d_col->s_rbc=$request->input('s_rbc');
                $d_col->mucus=$request->input('mucus');
                $d_col->macrophags=$request->input('macrophags');
                $d_col->consistens=$request->input('consistens');
                $d_col->r_substances=$request->input('r_substances');

                $d_col->hb=$request->input('hb');
                $d_col->wbc=$request->input('wbc');
                $d_col->poly=$request->input('poly');
                $d_col->lym=$request->input('lym');
                $d_col->eso=$request->input('eso');
                $d_col->bas=$request->input('bas');
                $d_col->mon=$request->input('mon');
                $d_col->malaria=$request->input('malaria');
                $d_col->platelets=$request->input('platelets');

                $d_col->fbs=$request->input('fbs');

                if(!$d_col->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$d_col);
            }else if($request->input('type')==70 | $request->input('type')==71 | $request->input('type')==72 | $request->input('type')==73 | $request->input('type')==74 | $request->input('type')==75 ){
                $d_by=new d_by;
                $d_by->report_id=$report->id;

                $d_by->d_by=$request->input('d_by');
                $d_by->asot=$request->input('asot');
                $d_by->rh_fac=$request->input('rh_fac');
                $d_by->sal_h=$request->input('sal_h');
                $d_by->sal_o=$request->input('sal_o');
                $d_by->sal_ah=$request->input('sal_ah');
                $d_by->sal_bh=$request->input('sal_bh');
                $d_by->sodium=$request->input('sodium');
                $d_by->potassium=$request->input('potassium');
                $d_by->chloride=$request->input('chloride');
                $d_by->sgot=$request->input('sgot');
                $d_by->sgpt=$request->input('sgpt');
                $d_by->tsh=$request->input('tsh');
                $d_by->tsh_rem=$request->input('tsh_rem');

                if(!$d_by->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$d_by);
            }else if($request->input('type')==70 | $request->input('type')==71 | $request->input('type')==72 | $request->input('type')==73 | $request->input('type')==74 | $request->input('type')==75 ){
                $sfa=new sfa;
                $sfa->report_id=$report->id;

                $sfa->qty=$request->input('qty');
                $sfa->viscosity=$request->input('viscosity');
                $sfa->slt=$request->input('slt');
                $sfa->colour=$request->input('colour');
                $sfa->reaction=$request->input('reaction');
                $sfa->ph=$request->input('ph');
                $sfa->micro=$request->input('micro');
                $sfa->a_mot=$request->input('a_mot');
                $sfa->s_mot=$request->input('s_mot');
                $sfa->inactive=$request->input('inactive');
                $sfa->count=$request->input('count');
                $sfa->tas=$request->input('tas');
                $sfa->pnc=$request->input('pnc');
                $sfa->rbc=$request->input('rbc');

                if(!$sfa->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$sfa);
            }
        }
    }

    public function submit_edit_form(Request $request){
//        dd($request);
        $this->validate($request, [
            'name' => 'required',
            'date' => 'required',
        ]);
        $report=Report::where('id',$request->input('id'))->first();
        $report->name_front=$request->input('name_front');
        $report->name=$request->input('name');
        $report->gender=$request->input('gender');
        $report->age_years=$request->input('age_years');
        $report->age_months=$request->input('age_months');
        $report->age_days=$request->input('age_days');
        $report->type=$request->input('type');
        $report->specimen=$request->input('specimen');
        if($request->input('date')==null){
            $report->date=$request->input('date-early');
        }else{
            $report->date=Carbon::createFromFormat('m/d/Y',$request->input('date'));
        }
        if($report->update()){
            if($request->input('type')==1 or $request->input('type')==2 or $request->input('type')==3 ){
                $bsst=Bsst::where('report_id',$request->input('id'))->first();
                $bsst->report_id=$report->id;
                $bsst->fbs=$request->input('fbs');
                $bsst->pre_breakfast=$request->input('pre_breakfast');
                $bsst->post_breakfast=$request->input('post_breakfast');
                $bsst->pre_lunch=$request->input('pre_lunch');
                $bsst->post_lunch=$request->input('post_lunch');
                $bsst->pre_dinner=$request->input('pre_dinner');
                $bsst->post_dinner=$request->input('post_dinner');

                if(!$bsst->update()){
                    $report->delete();
                    return $this->index()->with('message','Error occured,task failed!');
                }
//                return view('Dashboard.view_report')->with('user',Auth::user())->with('report',$report)->with('det',$bsst)->with('types',Type::all());
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$bsst);
            }else if($request->input('type')==4 or $request->input('type')==5 or $request->input('type')==6 ){
                $fbs=fbs::where('report_id',$request->input('id'))->first();
                $fbs->report_id=$report->id;
                $fbs->fbs=$request->input('fbs');
                $fbs->ppbs=$request->input('ppbs');
                $fbs->urine_sugar=$request->input('urine_sugar');
                $fbs->urine_albumen=$request->input('urine_albumen');
                if(!$fbs->update()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$fbs);
            }else if($request->input('type')==7 or $request->input('type')==8){
                $ufr=ufr::where('report_id',$request->input('id'))->first();
                $ufr->report_id=$report->id;
                $ufr->appearance=$request->input('appearance');
                $ufr->sg=$request->input('sg');
                $ufr->reaction=$request->input('reaction');
                $ufr->albumen=$request->input('albumen');
                $ufr->sugar=$request->input('sugar');
                $ufr->sugar=$request->input('acetone');
                $ufr->bile=$request->input('bile');
                $ufr->urobilino=$request->input('urobilino');
                $ufr->u_pus=$request->input('u_pus');
                $ufr->u_rbc=$request->input('u_rbc');
                $ufr->fpi=$request->input('fpi');
                $ufr->cast=$request->input('cast');
                $ufr->o_deposit=$request->input('o_deposit');
                $ufr->crystals=$request->input('crystals');
                $ufr->hwo=$request->input('hwo');
                $ufr->rwo=$request->input('rwo');
                $ufr->ameba=$request->input('ameba');
                $ufr->cysts=$request->input('cysts');
                $ufr->clc=$request->input('clc');
                $ufr->s_pus=$request->input('s_pus');
                $ufr->s_rbc=$request->input('s_rbc');
                $ufr->mucus=$request->input('mucus');
                $ufr->macrophags=$request->input('macrophags');
                $ufr->consistens=$request->input('consistens');
                $ufr->r_substances=$request->input('r_substances');

                if(!$ufr->update()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$ufr);
            }else if($request->input('type')==9 or $request->input('type')==10){
                $hcg=hcg::where('report_id',$request->input('id'))->first();
                $hcg->report_id=$report->id;
                $hcg->hcg=$request->input('hcg');
                $hcg->repeat=$request->input('repeat');
                $hcg->appearance=$request->input('appearance');
                $hcg->sg=$request->input('sg');
                $hcg->reaction=$request->input('reaction');
                $hcg->albumen=$request->input('albumen');
                $hcg->sugar=$request->input('sugar');
                $hcg->acetone=$request->input('acetone');
                $hcg->bile=$request->input('bile');
                $hcg->urobilino=$request->input('urobilino');
                $hcg->u_pus=$request->input('u_pus');
                $hcg->u_rbc=$request->input('u_rbc');
                $hcg->fpi=$request->input('fpi');
                $hcg->cast=$request->input('cast');
                $hcg->o_deposit=$request->input('o_deposit');
                $hcg->crystals=$request->input('crystals');

                if(!$hcg->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$hcg);
            }else if($request->input('type')==11){
                $blood_group=blood_group::where('report_id',$request->input('id'))->first();
                $blood_group->report_id=$report->id;
                $blood_group->group=$request->input('group');

                if(!$blood_group->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$blood_group);
            }else if($request->input('type')==12){
                $lipidp=lipidp::where('report_id',$request->input('id'))->first();
                $lipidp->report_id=$report->id;
                $lipidp->c_total=$request->input('c_total');
                $lipidp->c_hdl=$request->input('c_hdl');
                $lipidp->triglycerides=$request->input('triglycerides');
                $lipidp->c_ldl=$request->input('c_ldl');
                $lipidp->c_total_hdl=$request->input('c_total_hdl');

                if(!$lipidp->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$lipidp);
            }else if($request->input('type')==13|$request->input('type')==14|$request->input('type')==15){
                $lipidp=s_creatinine::where('report_id',$request->input('id'))->first();
                $lipidp->report_id=$report->id;
                $lipidp->s_creatinine=$request->input('s_creatinine');
                $lipidp->egfr=$request->input('egfr');
                $lipidp->b_urea=$request->input('b_urea');

                if(!$lipidp->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$lipidp);
            }else if($request->input('type')==16|$request->input('type')==17|$request->input('type')==18|$request->input('type')==19){
                $glucose=glucose::where('report_id',$request->input('id'))->first();
                $glucose->report_id=$report->id;
                $glucose->f_b_sugar=$request->input('f_b_sugar');
                $glucose->half_fasting_b_sugar=$request->input('half_fasting_b_sugar');
                $glucose->one_b_sugar=$request->input('one_b_sugar');
                $glucose->one_half_fasting_b_sugar=$request->input('one_half_fasting_b_sugar');
                $glucose->one_fasting_b_sugar=$request->input('one_fasting_b_sugar');

                if(!$glucose->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$glucose);
            }else if($request->input('type')==20|$request->input('type')==21|$request->input('type')==22|$request->input('type')==23){
                $ppbs=ppbs::where('report_id',$request->input('id'))->first();
                $ppbs->report_id=$report->id;
                $ppbs->ppbs=$request->input('ppbs');
                $ppbs->rbs=$request->input('rbs');
                $ppbs->ppbs_p_breakfast=$request->input('ppbs_p_breakfast');
                $ppbs->ppbs_p_lunch=$request->input('ppbs_p_lunch');
                $ppbs->ppbs_p_dinner=$request->input('ppbs_p_dinner');

                if(!$ppbs->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$ppbs);
            }else if($request->input('type')==24){
                $u_culture=u_culture::where('report_id',$request->input('id'))->first();
                $u_culture->report_id=$report->id;
                $u_culture->p_cells=$request->input('p_cells');
                $u_culture->r_cells=$request->input('r_cells');
                $u_culture->e_cells=$request->input('e_cells');
                $u_culture->c_report=$request->input('c_report');
                $u_culture->b_count=$request->input('b_count');
                $u_culture->a_test=$request->input('a_test');
                $u_culture->augmentin=$request->input('augmentin');
                $u_culture->ampicillin=$request->input('ampicillin');
                $u_culture->amikacin=$request->input('amikacin');
                $u_culture->amoxycilin=$request->input('amoxycilin');
                $u_culture->ciprofloxacin=$request->input('ciprofloxacin');
                $u_culture->cephalexin=$request->input('cephalexin');
                $u_culture->ceftazidime=$request->input('ceftazidime');
                $u_culture->cefoxitin=$request->input('cefoxitin');
                $u_culture->cefuroxime=$request->input('cefuroxime');
                $u_culture->gentamici=$request->input('gentamicin');
                $u_culture->meropenem=$request->input('meropenem');
                $u_culture->norfloxacin=$request->input('norfloxacin');
                $u_culture->nitrofurantoin=$request->input('nitrofurantoin');
                $u_culture->nalidixic=$request->input('nalidixic');

                if(!$u_culture->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$u_culture);
            }else if($request->input('type')==25 | $request->input('type')==26 | $request->input('type')==27 | $request->input('type')==28 | $request->input('type')==29 | $request->input('type')==30 | $request->input('type')==31 | $request->input('type')==32 | $request->input('type')==33 | $request->input('type')==34 | $request->input('type')==35 | $request->input('type')==36 | $request->input('type')==37){
                $serum=serum::where('report_id',$request->input('id'))->first();
                $serum->report_id=$report->id;
                $serum->esr=$request->input('esr');
                $serum->hiv=$request->input('hiv');
                $serum->ion_r=$request->input('ion_r');
                $serum->ion_remarks=$request->input('ion_remarks');
                $serum->malaria=$request->input('malaria');
                $serum->platelets=$request->input('platelets');
                $serum->s_amylase=$request->input('s_amylase');
                $serum->amy_remarks=$request->input('amy_remarks');
                $serum->s_bilirubin=$request->input('s_bilirubin');
                $serum->bil_remarks=$request->input('bil_remarks');
                $serum->s_calcium=$request->input('s_calcium');
                $serum->cal_remarks=$request->input('cal_remarks');
                $serum->s_gamma=$request->input('s_gamma');
                $serum->gam_remarks=$request->input('gam_remarks');
                $serum->troponin=$request->input('troponin');
                $serum->u_micro=$request->input('u_micro');
                $serum->micro_remarks=$request->input('micro_remarks');
                $serum->vdrl=$request->input('vdrl');
                $serum->norfloxacin=$request->input('s_potassium');
                $serum->nitrofurantoin=$request->input('pot_remarks');

                if(!$serum->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$serum);
            }else if($request->input('type')==38 | $request->input('type')==39 | $request->input('type')==40 | $request->input('type')==41 | $request->input('type')==42 | $request->input('type')==43 | $request->input('type')==44 | $request->input('type')==45 | $request->input('type')==46 | $request->input('type')==47 | $request->input('type')==48 | $request->input('type')==49 | $request->input('type')==50){
                $esr=esr::where('report_id',$request->input('id'))->first();
                $esr->report_id=$report->id;
                $esr->b_uria=$request->input('b_uria');
                $esr->esr=$request->input('esr');
                $esr->fbs=$request->input('fbs');
                $esr->rbs=$request->input('rbs');
                $esr->rh_f=$request->input('rh_f');
                $esr->s_creat=$request->input('s_creat');
                $esr->t_cholesterol=$request->input('t_cholesterol');
                $esr->tri_g=$request->input('tri_g');
                $esr->hb=$request->input('hb');
                $esr->ppbs=$request->input('ppbs');
                $esr->sgot=$request->input('sgot');
                $esr->sgot_r=$request->input('sgot_r');
                $esr->sgpt=$request->input('sgpt');
                $esr->sgpt_r=$request->input('sgpt_r');

                if(!$esr->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$esr);
            }else if($request->input('type')==51 | $request->input('type')==52 | $request->input('type')==53 | $request->input('type')==54 ){
                $hb=hb::where('report_id',$request->input('id'))->first();
                $hb->report_id=$report->id;
                $hb->hb=$request->input('hb');
                $hb->wbc=$request->input('wbc');
                $hb->poly=$request->input('poly');
                $hb->lym=$request->input('lym');
                $hb->eso=$request->input('eso');
                $hb->bas=$request->input('bas');
                $hb->mon=$request->input('mon');
                $hb->malaria=$request->input('malaria');
                $hb->platelets=$request->input('platelets');
                $hb->remarks=$request->input('remarks');

                if(!$hb->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$hb);
            }else if($request->input('type')==55 | $request->input('type')==56 | $request->input('type')==57 | $request->input('type')==58| $request->input('type')==59| $request->input('type')==60| $request->input('type')==61| $request->input('type')==62){
                $misc=misc::where('report_id',$request->input('id'))->first();
                $misc->report_id=$report->id;
                $misc->bt=$request->input('bt');
                $misc->ct=$request->input('ct');
                $misc->crp=$request->input('crp');
                $misc->sodium=$request->input('sodium');
                $misc->potassium=$request->input('potassium');
                $misc->chloride=$request->input('chloride');
                $misc->fil_m=$request->input('fil_m');
                $misc->fil_g=$request->input('fil_g');
                $misc->g_hb=$request->input('g_hb');
                $misc->g_hb_r=$request->input('g_hb_r');
                $misc->pcv=$request->input('pcv');
                $misc->platelets=$request->input('platelets');
                $misc->p_time=$request->input('p_time');
                $misc->p_time_r=$request->input('p_time_r');
                $misc->n_control=$request->input('n_control');
                $misc->n_control_r=$request->input('n_control_r');
                $misc->inr=$request->input('inr');
                $misc->p_time=$request->input('p_time');
                $misc->p_time_r=$request->input('p_time_r');
                $misc->n_control=$request->input('n_control');
                $misc->n_control_r=$request->input('n_control_r');
                $misc->stp=$request->input('stp');
                $misc->globulin=$request->input('globulin');
                $misc->agr=$request->input('agr');

                if(!$misc->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$misc);
            }else if($request->input('type')==63 | $request->input('type')==64 | $request->input('type')==65 | $request->input('type')==66){
                $ufr_plus=ufr_plus::where('report_id',$request->input('id'))->first();
                $ufr_plus->report_id=$report->id;
                $ufr_plus->fbs=$request->input('fbs');
                $ufr_plus->hb=$request->input('hb');
                $ufr_plus->ppbs=$request->input('ppbs');
                $ufr_plus->rbs=$request->input('rbs');
                $ufr_plus->appearance=$request->input('appearance');
                $ufr_plus->reaction=$request->input('reaction');
                $ufr_plus->albumen=$request->input('albumen');
                $ufr_plus->sugar=$request->input('sugar');
                $ufr_plus->acetone=$request->input('acetone');
                $ufr_plus->bile=$request->input('bile');
                $ufr_plus->urobilino=$request->input('urobilino');
                $ufr_plus->u_pus=$request->input('u_pus');
                $ufr_plus->u_rbc=$request->input('u_rbc');
                $ufr_plus->fpi=$request->input('fpi');
                $ufr_plus->cast=$request->input('cast');
                $ufr_plus->o_deposit=$request->input('o_deposit');
                $ufr_plus->crystals=$request->input('crystals');

                if(!$ufr_plus->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$ufr_plus);
            }else if($request->input('type')==67 | $request->input('type')==68 | $request->input('type')==69 ){
                $d_col=d_col::where('report_id',$request->input('id'))->first();
                $d_col->report_id=$report->id;

                $d_col->appearance=$request->input('appearance');
                $d_col->sg=$request->input('sg');
                $d_col->reaction=$request->input('reaction');
                $d_col->albumen=$request->input('albumen');
                $d_col->sugar=$request->input('sugar');
                $d_col->sugar=$request->input('acetone');
                $d_col->bile=$request->input('bile');
                $d_col->urobilino=$request->input('urobilino');
                $d_col->u_pus=$request->input('u_pus');
                $d_col->u_rbc=$request->input('u_rbc');
                $d_col->fpi=$request->input('fpi');
                $d_col->cast=$request->input('cast');
                $d_col->o_deposit=$request->input('o_deposit');
                $d_col->crystals=$request->input('crystals');

                $d_col->hwo=$request->input('hwo');
                $d_col->rwo=$request->input('rwo');
                $d_col->ameba=$request->input('ameba');
                $d_col->cysts=$request->input('cysts');
                $d_col->clc=$request->input('clc');
                $d_col->s_pus=$request->input('s_pus');
                $d_col->s_rbc=$request->input('s_rbc');
                $d_col->mucus=$request->input('mucus');
                $d_col->macrophags=$request->input('macrophags');
                $d_col->consistens=$request->input('consistens');
                $d_col->r_substances=$request->input('r_substances');

                $d_col->hb=$request->input('hb');
                $d_col->wbc=$request->input('wbc');
                $d_col->poly=$request->input('poly');
                $d_col->lym=$request->input('lym');
                $d_col->eso=$request->input('eso');
                $d_col->bas=$request->input('bas');
                $d_col->mon=$request->input('mon');
                $d_col->malaria=$request->input('malaria');
                $d_col->platelets=$request->input('platelets');

                $d_col->fbs=$request->input('fbs');

                if(!$d_col->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$d_col);
            }else if($request->input('type')==70 | $request->input('type')==71 | $request->input('type')==72 | $request->input('type')==73 | $request->input('type')==74 | $request->input('type')==75 ){
                $d_by=d_by::where('report_id',$request->input('id'))->first();
                $d_by->report_id=$report->id;

                $d_by->d_by=$request->input('d_by');
                $d_by->asot=$request->input('asot');
                $d_by->rh_fac=$request->input('rh_fac');
                $d_by->sal_h=$request->input('sal_h');
                $d_by->sal_o=$request->input('sal_o');
                $d_by->sal_ah=$request->input('sal_ah');
                $d_by->sal_bh=$request->input('sal_bh');
                $d_by->sodium=$request->input('sodium');
                $d_by->potassium=$request->input('potassium');
                $d_by->chloride=$request->input('chloride');
                $d_by->sgot=$request->input('sgot');
                $d_by->sgpt=$request->input('sgpt');
                $d_by->tsh=$request->input('tsh');
                $d_by->tsh_rem=$request->input('tsh_rem');

                if(!$d_by->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$d_by);
            }else if($request->input('type')==70 | $request->input('type')==71 | $request->input('type')==72 | $request->input('type')==73 | $request->input('type')==74 | $request->input('type')==75 ){
                $sfa=sfa::where('report_id',$request->input('id'))->first();
                $sfa->report_id=$report->id;

                $sfa->qty=$request->input('qty');
                $sfa->viscosity=$request->input('viscosity');
                $sfa->slt=$request->input('slt');
                $sfa->colour=$request->input('colour');
                $sfa->reaction=$request->input('reaction');
                $sfa->ph=$request->input('ph');
                $sfa->micro=$request->input('micro');
                $sfa->a_mot=$request->input('a_mot');
                $sfa->s_mot=$request->input('s_mot');
                $sfa->inactive=$request->input('inactive');
                $sfa->count=$request->input('count');
                $sfa->tas=$request->input('tas');
                $sfa->pnc=$request->input('pnc');
                $sfa->rbc=$request->input('rbc');

                if(!$sfa->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$sfa);
            }
        }
    }

    public function browse(Request $request){
        $reports=Report::paginate(10);
        return view('Dashboard.browse')->with('user',Auth::user())->with('reports',$reports)->with('types',Type::all())->with('req',$request);
    }

    public function detailed(Request $request){
        $reports=Report::paginate(10);
        return view('Dashboard.detailed')->with('user',Auth::user())->with('reports',$reports)->with('types',Type::all())->with('req',$request);
    }

    public function browse_filter(Request $request){
        if($request->input()!=[]){
            if($request->input('gender')=='all'){
                $reports=Report::whereIn('gender',array('male','female','other'));
            }else {
                $reports = Report::where('gender', $request->input('gender'));
            }
            if($request->input('name')){
                $reports=$reports->where('name','LIKE','%'.$request->input('name').'%');
            }
            if($request->input('age')){
                $reports=$reports->where('age',$request->input('age'));
            }
            if($request->input('type')!='null'){
                $reports=$reports->where('type',$request->input('type'));
            }
            if($request->input('date')){
                $reports=$reports->where('date',Carbon::createFromFormat('m/d/Y',$request->input('date'))->toDateString());
            }
            $reports=$reports->paginate(10);
        }else{
            $reports=Report::paginate(10);
        }
        return view('Dashboard.browse')->with('user',Auth::user())->with('reports',$reports)->with('types',Type::all())->with('req',$request);
    }
    public function detailed_filter(Request $request){
        if($request->input()!=[]){
            if($request->input('gender')=='all'){
                $reports=Report::whereIn('gender',array('male','female','other'));
            }else {
                $reports = Report::where('gender', $request->input('gender'));
            }
            if($request->input('name')){
                $reports=$reports->where('name','LIKE','%'.$request->input('name').'%');
            }
            if($request->input('age')){
                $reports=$reports->where('age',$request->input('age'));
            }
            if($request->input('type')!='null'){
                $reports=$reports->where('type',$request->input('type'));
            }
            if($request->input('date')){
                $reports=$reports->where('date',Carbon::createFromFormat('m/d/Y',$request->input('date'))->toDateString());
            }
            $reports=$reports->paginate(10);
        }else{
            $reports=Report::paginate(10);
        }
        return view('Dashboard.detailed')->with('user',Auth::user())->with('reports',$reports)->with('types',Type::all())->with('req',$request);
    }

    public function report_print(Request $request){
        $report=Report::where('id',$request->input('id'))->first();
        $det=$report->getObject();
        return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$det);
    }
    
    public function report_view(Request $request){
        $report=Report::where('id',$request->input('id'))->first();
//        if($report->type=='1' or $report->type=='2' or $report->type=='3'){
            $det=$report->getObject();
        return view('Dashboard.view_report')->with('user',Auth::user())->with('report',$report)->with('det',$det)->with('types',Type::all());
    }

    public function delete_form(Request $request){
        $report=Report::find($request->input('id'));
        $report_oth=$report->getObject();
        if($report_oth->delete()){
            $report->delete();
            $message="Report Deleted Successfully";
        }else{
            $message="Task failed";
        }
        $reports=Report::paginate(10);
        return redirect(route('browse'))->with('user',Auth::user())->with('reports',$reports)->with('types',Type::all())->with('req',$request)->with('message',$message);

    }
}
