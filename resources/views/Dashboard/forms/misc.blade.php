<div class="box box-primary">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <input hidden="true" value="{{$req->input('type')}}" name="type">
    <div class="box-body">
        @if($req->input('type')=='55')
            <div class="form-group">
                <label for="bt">Bleeding Time</label>
                <input @if($req_old->bt)value={{$req_old->bt}}@endif  type="number" name="bt" class="form-control" id="bt" placeholder="minutes">
            </div>
            <div class="form-group">
                <label for="ct">Clotting Time</label>
                <input @if($req_old->ct)value={{$req_old->ct}}@endif  type="number" name="ct" class="form-control" id="ct" placeholder="minutes">
            </div>
        @endif
        @if($req->input('type')=='56')
            <div class="form-group">
                <label for="crp">C - Reactive Protein ( CRP )</label>
                <input @if($req_old->crp)value={{$req_old->crp}}@endif  type="number" list="crp_set" name="crp" class="form-control" id="crp" placeholder="minutes">
                <datalist id="crp_set">
                    <option><6.0</option>
                    <option>6.0</option>
                    <option>12.0</option>
                    <option>24.0</option>
                    <option>48.0</option>
                    <option>>48.0</option>
                    <option>96.0</option>
                    <option>192.0</option>
                </datalist>
            </div>
        @endif
        @if($req->input('type')=='57')
            <div class="form-group">
                <label for="sodium">Sodium</label>
                <input @if($req_old->sodium)value={{$req_old->sodium}}@endif  type="number" name="sodium" class="form-control" id="sodium" placeholder="mmol/L">
            </div>
            <div class="form-group">
                <label for="potassium">Potassium</label>
                <input @if($req_old->potassium)value={{$req_old->potassium}}@endif  type="number" name="potassium" class="form-control" id="potassium" placeholder="mmol/L">
            </div>
            <div class="form-group">
                <label for="chloride">Chloride</label>
                <input @if($req_old->chloride)value={{$req_old->chloride}}@endif  type="number" name="chloride" class="form-control" id="chloride" placeholder="mmol/L">
            </div>
        @endif
        @if($req->input('type')=='58')
            <div class="form-group">
                <label for="fil_m">FILARIAL 1gM</label>
                <input @if($req_old->fil_m)value={{$req_old->fil_m}}@endif  type="text" list="fil_m_set" name="fil_m" class="form-control" id="fil_m" placeholder="">
                <datalist id="fil_m_set">
                    <option>Negative</option>
                    <option>Positive</option>
                    <option>Weakly Positive</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="fil_g">FILARIAL 1gG</label>
                <input @if($req_old->fil_g)value={{$req_old->fil_g}}@endif  type="text" list="fil_g_set" name="fil_g" class="form-control" id="fil_g" placeholder="">
                <datalist id="fil_g_set">
                    <option>Negative</option>
                    <option>Positive</option>
                </datalist>
            </div>
        @endif
        @if($req->input('type')=='59')
            <div class="form-group">
                <label for="g_hb">Glyco - Haemoglobin (HBA1C)</label>
                <input @if($req_old->g_hb)value={{$req_old->g_hb}}@endif  type="text" name="g_hb" class="form-control" id="g_hb" placeholder="">
            </div>
            <div class="form-group">
                <label for="g_hb_r">Remarks</label>
                <input @if($req_old->g_hb_r)value={{$req_old->g_hb_r}}@endif  type="text" list="g_hb_r_set" name="g_hb_r" class="form-control" id="g_hb_r" placeholder="">
                <datalist id="g_hb_r_set">
                    <option>Normal</option>
                    <option>High</option>
                    <option>Low</option>
                </datalist>
            </div>
        @endif
        @if($req->input('type')=='60')
            <div class="form-group">
                <label for="pcv">Pcv</label>
                <input @if($req_old->pcv)value={{$req_old->pcv}}@endif  type="text" name="pcv" class="form-control" id="pcv" placeholder="">
            </div>
            <div class="form-group">
                <label for="platelets">Platelets</label>
                <input @if($req_old->platelets)value={{$req_old->platelets}}@endif  type="text" name="platelets" class="form-control" id="platelets" placeholder="/mm 3">
            </div>
        @endif
        @if($req->input('type')=='61')
            <div class="form-group">
                <label for="p_time">Prothrombin Time</label>
                <input @if($req_old->p_time)value={{$req_old->p_time}}@endif  type="text" name="p_time" class="form-control" id="p_time" placeholder="Seconds">
            </div>
            <div class="form-group">
                <label for="p_time_r">Remarks</label>
                <input @if($req_old->p_time_r)value={{$req_old->p_time_r}}@endif  type="text" list="p_time_r_set" name="p_time_r" class="form-control" id="p_time_r" placeholder="">
                <datalist id="p_time_r_set">
                    <option>Normal</option>
                    <option>High</option>
                    <option>Low</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="n_control">Normal Control</label>
                <input @if($req_old->n_control)value={{$req_old->n_control}}@endif  type="text" name="n_control" class="form-control" id="n_control" placeholder="Seconds">
            </div>
            <div class="form-group">
                <label for="n_control_r">Remarks</label>
                <input @if($req_old->n_control_r)value={{$req_old->n_control_r}}@endif  type="text" list="n_control_r_set" name="n_control_r" class="form-control" id="n_control_r" placeholder="">
                <datalist id="p_time_r_set">
                    <option>Normal</option>
                    <option>High</option>
                    <option>Low</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="inr">I.N.R</label>
                <input @if($req_old->inr)value={{$req_old->inr}}@endif  type="text" name="inr" class="form-control" id="inr" placeholder="">
            </div>
        @endif
        @if($req->input('type')=='62')
            <div class="form-group">
                <label for="p_time">Prothrombin Time</label>
                <input @if($req_old->p_time)value={{$req_old->p_time}}@endif  type="text" name="p_time" class="form-control" id="p_time" placeholder="Seconds">
            </div>
            <div class="form-group">
                <label for="p_time_r">Remarks</label>
                <input @if($req_old->p_time_r)value={{$req_old->p_time_r}}@endif  type="text" list="p_time_r_set" name="p_time_r" class="form-control" id="p_time_r" placeholder="">
                <datalist id="p_time_r_set">
                    <option>Normal</option>
                    <option>High</option>
                    <option>Low</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="n_control">Normal Control</label>
                <input @if($req_old->n_control)value={{$req_old->n_control}}@endif  type="text" name="n_control" class="form-control" id="n_control" placeholder="Seconds">
            </div>
            <div class="form-group">
                <label for="n_control_r">Remarks</label>
                <input @if($req_old->n_control_r)value={{$req_old->n_control_r}}@endif  type="text" list="n_control_r_set" name="n_control_r" class="form-control" id="n_control_r" placeholder="">
                <datalist id="p_time_r_set">
                    <option>Normal</option>
                    <option>High</option>
                    <option>Low</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="inr">I.N.R</label>
                <input @if($req_old->inr)value={{$req_old->inr}}@endif  type="text" name="inr" class="form-control" id="inr" placeholder="">
            </div>
        @endif
        @if($req->input('type')=='63')
            <div class="form-group">
                <label for="stp">Serum Total Protein</label>
                <input @if($req_old->stp)value={{$req_old->stp}}@endif  type="text" name="stp" class="form-control" id="stp" placeholder="mg/dL">
            </div>
            <div class="form-group">
                <label for="albumin">Albumin</label>
                <input @if($req_old->albumin)value={{$req_old->albumin}}@endif  type="text" name="albumin" class="form-control" id="albumin" placeholder="mg/dL">
            </div>
            <div class="form-group">
                <label for="globulin">Globulin</label>
                <input @if($req_old->globulin)value={{$req_old->globulin}}@endif  type="text" name="globulin" class="form-control" id="globulin" placeholder="mg/dL">
            </div>
            <div class="form-group">
                <label for="agr">Albumin / Globulin Ratio</label>
                <input @if($req_old->agr)value={{$req_old->agr}}@endif  type="text" name="agr" class="form-control" id="agr" placeholder="">
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