<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <input hidden="true" value="{{$req->input('type')}}" name="type">
    <div class="box-body">
        @if($req->input('type')=='38')
            <div class="form-group">
                <label for="b_uria">Blood Urea</label>
                <input @if($req_old->b_uria)value={{$req_old->b_uria}}@endif type="text" name="b_uria" class="form-control" id="b_uria" placeholder="mg/dl">
            </div>
        @endif
        @if($req->input('type')=='39' | $req->input('type')=='40' | $req->input('type')=='41' )
            <div class="form-group">
                <label for="esr">E.S.R 1<sup>st</sup>hr</label>
                <input @if($req_old->esr)value={{$req_old->esr}}@endif type="text" name="esr" class="form-control" id="esr" placeholder="mm">
            </div>
        @endif
        @if($req->input('type')=='39' | $req->input('type')=='42' | $req->input('type')=='43' | $req->input('type')=='44' | $req->input('type')=='45')
            <div class="form-group">
                <label for="fbs">F.B.S (Fasting Blood Sugar)</label>
                <input @if($req_old->fbs)value={{$req_old->fbs}}@endif type="text" name="fbs" class="form-control" id="fbs" placeholder="mg/dl">
            </div>
        @endif
        @if($req->input('type')=='40' | $req->input('type')=='47')
            <div class="form-group">
                <label for="rbs">R.B.S (Random Blood Sugar)</label>
                <input @if($req_old->rbs)value={{$req_old->rbs}}@endif type="text" name="rbs" class="form-control" id="rbs" placeholder="mg/dl">
            </div>
        @endif
        @if($req->input('type')=='41')
           <div class="form-group">
               <label for="rh_f">Rheumatoid Factor</label>
               <input @if($req_old->rh_f)value={{$req_old->rh_f}}@endif type="text" list="rh_f_set" name="rh_f" class="form-control" id="rh_f" placeholder="IU/ml">
               <datalist id="rh_f_set">
                   <option>< 10.0  (Negative)</option>
                   <option>Positive</option>
               </datalist>
           </div>
        @endif
        @if($req->input('type')=='42')
           <div class="form-group">
               <label for="s_creat">Serum Creatinine</label>
               <input @if($req_old->s_creat)value={{$req_old->s_creat}}@endif type="text" name="s_creat" class="form-control" id="s_creat" placeholder="mg/dl">
           </div>
        @endif
        @if($req->input('type')=='43' | $req->input('type')=='44' | $req->input('type')=='50')
           <div class="form-group">
               <label for="t_cholesterol">Total Cholesterol</label>
               <input @if($req_old->t_cholesterol)value={{$req_old->t_cholesterol}}@endif type="text" name="t_cholesterol" class="form-control" id="t_cholesterol" placeholder="mg/dl">
           </div>
        @endif
        @if($req->input('type')=='44')
           <div class="form-group">
               <label for="tri_g">Triglycerides</label>
               <input @if($req_old->tri_g)value={{$req_old->tri_g}}@endif type="text" name="tri_g" class="form-control" id="tri_g" placeholder="mg/dl">
           </div>
        @endif
        @if($req->input('type')=='45' | $req->input('type')=='46' | $req->input('type')=='47')
           <div class="form-group">
               <label for="hb">H.b ( Haemoglobin )</label>
               <input @if($req_old->hb)value={{$req_old->hb}}@endif type="text" name="hb" class="form-control" id="hb" placeholder="g/dl">
           </div>
        @endif
        @if($req->input('type')=='46')
            <div class="form-group">
                <label for="ppbs">P.P.B.S ( Post parandial Blood Sugar )</label>
                <input @if($req_old->ppbs)value={{$req_old->ppbs}}@endif type="text" name="ppbs" class="form-control" id="ppbs" placeholder="mg/dl">
            </div>
        @endif
        @if($req->input('type')=='48')
            <div class="form-group">
                <label for="sgot">S.G.O.T / A.S.T</label>
                <input @if($req_old->sgot)value={{$req_old->sgot}}@endif type="text" name="sgot" class="form-control" id="sgot" placeholder="U/L">
            </div>
            <div class="form-group">
                <label for="sgot_r">Remarks</label>
                <input @if($req_old->sgot_r)value={{$req_old->sgot_r}}@endif  type="text" list="sgot_r_set" name="sgot_r" class="form-control" id="sgot_r" placeholder="">
                <datalist id="sgot_r_set">
                    <option>NORMAL</option>
                    <option>HIGH</option>
                    <option>LOW</option>
                </datalist>
            </div>
            @endif
        @if($req->input('type')=='49')
            <div class="form-group">
                <label for="sgpt">S.G.P.T / A.L.T</label>
                <input @if($req_old->sgpt)value={{$req_old->sgpt}}@endif type="text" name="sgpt" class="form-control" id="sgpt" placeholder="U/L">
            </div>
            <div class="form-group">
                <label for="sgpt_r">Remarks</label>
                <input @if($req_old->sgpt_r)value={{$req_old->sgpt_r}}@endif  type="text" list="sgpt_r_set" name="sgpt_r" class="form-control" id="sgpt_r" placeholder="">
                <datalist id="sgpt_r_set">
                    <option>NORMAL</option>
                    <option>HIGH</option>
                    <option>LOW</option>
                </datalist>
            </div>
        @endif

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</div>
<!-- /.box -->
</form>