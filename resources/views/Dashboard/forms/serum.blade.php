<div class="box box-primary">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <input hidden="true" value="{{$req->input('type')}}" name="type">
    <div class="box-body">
        @if($req->input('type')=='25')
            <div class="form-group">
                <label for="esr">E.S.R 1 hr</label>
                <input @if($req_old->esr)value={{$req_old->esr}}@endif  type="number" name="esr" class="form-control" id="esr" placeholder="mm">
            </div>
        @endif
        @if($req->input('type')=='26')
            <div class="form-group">
                <label for="hiv">HIV 1 & 2 ANTIBODIES</label>
                <input @if($req_old->hiv)value={{$req_old->hiv}}@endif  type="text" list="hiv_set" name="hiv" class="form-control" id="hiv" placeholder="">
                <datalist id="hiv_set">
                    <option>nil</option>
                    <option>Trace</option>
                    <option>0.5 g%</option>
                    <option>1.0 g%</option>
                    <option>1.5 g%</option>
                    <option>2.0 g%</option>
                    <option>>2.0 g%</option>
                </datalist>
            </div>
        @endif
        @if($req->input('type')=='27')
            <div class="form-group">
                <label for="ion_r">Result</label>
                <input @if($req_old->ion_r)value={{$req_old->ion_r}}@endif  type="number" name="ion_r" class="form-control" id="ion_r" placeholder="mmol/L">
            </div>
            <div class="form-group">
                <label for="ion_remarks">Remarks</label>
                <input @if($req_old->ion_remarks)value={{$req_old->ion_remarks}}@endif  type="text" list="ion_remarks_set" name="ion_remarks" class="form-control" id="ion_remarks" placeholder="">
                <datalist id="ion_remarks_set">
                    <option>NORMAL</option>
                    <option>HIGH</option>
                    <option>LOW</option>
                </datalist>
            </div>
        @endif
        @if($req->input('type')=='28')
            <div class="form-group">
                <label for="malaria">Malaria Parasites</label>
                <input @if($req_old->malaria)value={{$req_old->malaria}}@endif  type="text" name="malaria" class="form-control" id="malaria" placeholder="/mm3">
            </div>
        @endif
        @if($req->input('type')=='29')
            <div class="form-group">
                <label for="platelets">Platelets</label>
                <input @if($req_old->platelets)value={{$req_old->platelets}}@endif  type="text" name="platelets" class="form-control" id="platelets" placeholder="/mm3">
            </div>
        @endif
        @if($req->input('type')=='30')
            <div class="form-group">
                <label for="s_amylase">Serum Amylase</label>
                <input @if($req_old->s_amylase)value={{$req_old->s_amylase}}@endif  type="text" name="s_amylase" class="form-control" id="s_amylase" placeholder="U /L at 37 ">
            </div>
            <div class="form-group">
                <label for="amy_remarks">Remarks</label>
                <input @if($req_old->amy_remarks)value={{$req_old->amy_remarks}}@endif  type="text" list="amy_remarks_set" name="amy_remarks" class="form-control" id="amy_remarks" placeholder="">
                <datalist id="amy_remarks_set">
                    <option>NORMAL</option>
                    <option>HIGH</option>
                    <option>LOW</option>
                </datalist>
            </div>
        @endif
        @if($req->input('type')=='31')
            <div class="form-group">
                <label for="s_bilirubin">Serum Bilirubin</label>
                <input @if($req_old->s_bilirubin)value={{$req_old->s_bilirubin}}@endif  type="text" name="s_bilirubin" class="form-control" id="s_bilirubin" placeholder="mg/dl">
            </div>
            <div class="form-group">
                <label for="bil_remarks">Remarks</label>
                <input @if($req_old->bil_remarks)value={{$req_old->bil_remarks}}@endif  type="text" list="bil_remarks_set" name="bil_remarks" class="form-control" id="bil_remarks" placeholder="">
                <datalist id="bil_remarks_set">
                    <option>NORMAL</option>
                    <option>HIGH</option>
                    <option>LOW</option>
                </datalist>
            </div>
        @endif
        @if($req->input('type')=='32')
            <div class="form-group">
                <label for="s_calcium">Serum Calcium</label>
                <input @if($req_old->s_calcium)value={{$req_old->s_calcium}}@endif  type="text" name="s_calcium" class="form-control" id="s_calcium" placeholder="mg/dl">
            </div>
            <div class="form-group">
                <label for="cal_remarks">Remarks</label>
                <input @if($req_old->cal_remarks)value={{$req_old->cal_remarks}}@endif  type="text" list="cal_remarks_set" name="cal_remarks" class="form-control" id="cal_remarks" placeholder="">
                <datalist id="cal_remarks_set">
                    <option>NORMAL</option>
                    <option>HIGH</option>
                    <option>LOW</option>
                </datalist>
            </div>
        @endif
        @if($req->input('type')=='33')
            <div class="form-group">
                <label for="s_gamma">Serum Gamma G.T</label>
                <input @if($req_old->s_gamma)value={{$req_old->s_gamma}}@endif  type="text" name="s_gamma" class="form-control" id="s_gamma" placeholder="U/L">
            </div>
            <div class="form-group">
                <label for="gam_remarks">Remarks</label>
                <input @if($req_old->gam_remarks)value={{$req_old->gam_remarks}}@endif  type="text" list="gam_remarks_set" name="gam_remarks" class="form-control" id="gam_remarks" placeholder="">
                <datalist id="gam_remarks_set">
                    <option>NORMAL</option>
                    <option>HIGH</option>
                    <option>LOW</option>
                </datalist>
            </div>
        @endif
        @if($req->input('type')=='34')
            <div class="form-group">
                <label for="troponin">TROPONIN I</label>
                <input @if($req_old->troponin)value={{$req_old->troponin}}@endif  type="text" name="troponin" class="form-control" id="troponin" placeholder="">
            </div>
        @endif
        @if($req->input('type')=='35')
                <div class="form-group">
                    <label for="u_micro">Urine Microalbumin</label>
                    <input @if($req_old->u_micro)value={{$req_old->u_micro}}@endif  type="text" name="u_micro" class="form-control" id="u_micro" placeholder="mg/L">
                </div>
            <div class="form-group">
                <label for="micro_remarks">Remarks</label>
                <input @if($req_old->micro_remarks)value={{$req_old->micro_remarks}}@endif  type="text" list="micro_remarks_set" name="micro_remarks" class="form-control" id="micro_remarks" placeholder="">
                <datalist id="micro_remarks_set">
                    <option>NORMAL</option>
                    <option>HIGH</option>
                    <option>LOW</option>
                </datalist>
            </div>
        @endif
        @if($req->input('type')=='36')
            <div class="form-group">
                <label for="vdrl">V.D.R.L</label>
                <input @if($req_old->vdrl)value={{$req_old->vdrl}}@endif  type="text" list="vdrl_set" name="vdrl" class="form-control" id="vdrl" placeholder="">
                <datalist id="vdrl_set">
                    <option>Reactive</option>
                    <option>Non Reactive</option>
                </datalist>
            </div>
        @endif
        @if($req->input('type')=='37')
            <div class="form-group">
                <label for="s_potassium">Serum Potassium</label>
                <input @if($req_old->s_potassium)value={{$req_old->s_potassium}}@endif  type="text" name="s_potassium" class="form-control" id="s_potassium" placeholder="mmol/l">
            </div>
            <div class="form-group">
                <label for="pot_remarks">Remarks</label>
                <input @if($req_old->pot_remarks)value={{$req_old->pot_remarks}}@endif  type="text" list="pot_remarks_set" name="pot_remarks" class="form-control" id="pot_remarks" placeholder="">
                <datalist id="pot_remarks_set">
                    <option>NORMAL</option>
                    <option>HIGH</option>
                    <option>LOW</option>
                </datalist>
            </div>
        @endif

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
<!-- /.box -->

</form>