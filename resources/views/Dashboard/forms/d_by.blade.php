<div class="box box-primary">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <input hidden="true" value="{{$req->input('type')}}" name="type">
    <div class="box-body">
        <div class="form-group">
            <label for="d_by">Done By</label>
            <input @if($req_old->d_by)value={{$req_old->d_by}}@elseif($req->input('type')!='74' | $req->input('type')!='75') value="Balasooriya Hospital - Puttalam" @endif  type="number" list="d_by_set" name="d_by" class="form-control" id="d_by" placeholder="">
            <datalist id="d_by_set">
                <option>Balasooriya Hospital - Puttalam</option>
                <option>Rathna Medical Laboratory</option>
                <option>Durdans Laboratory</option>
                <option>Wayamba Laboratory</option>
            </datalist>
        </div>
        @if($req->input('type')=='70')
            <div class="form-group">
                <label for="asot">Anti Streptolysin "O" Level (ASOT)</label>
                <input @if($req_old->asot)value={{$req_old->asot}}@endif  type="number" name="asot" class="form-control" id="asot" placeholder="IU/ml">
            </div>
        @endif
        @if($req->input('type')=='71')
            <div class="form-group">
                <label for="rh_fac">Rheumatoid Factor</label>
                <input @if($req_old->rh_fac)value={{$req_old->rh_fac}}@endif list="rh_fac_set"  type="number" name="rh_fac" class="form-control" id="rh_fac" placeholder="IU/ml">
                <datalist id="rh_fac_set">
                    <option>< 10.0  (Negative)</option>
                </datalist>
            </div>
        @endif
        @if($req->input('type')=='72')
            <div class="form-group">
                <label for="sal_h">Salmonella typhi "H"</label>
                <input @if($req_old->sal_h)value={{$req_old->sal_h}}@endif  type="text" name="sal_h" class="form-control" id="sal_h" placeholder="">
            </div>
            <div class="form-group">
                <label for="sal_o">Salmonella typhi "O"</label>
                <input @if($req_old->sal_o)value={{$req_old->sal_o}}@endif  type="text" name="sal_o" class="form-control" id="sal_o" placeholder="">
            </div>
            <div class="form-group">
                <label for="sal_ah">Salmonella paratyphi "AH"</label>
                <input @if($req_old->sal_ah)value={{$req_old->sal_ah}}@endif  type="text" name="sal_ah" class="form-control" id="sal_ah" placeholder="">
            </div>
            <div class="form-group">
                <label for="sal_bh">Salmonella paratyphi "BH"</label>
                <input @if($req_old->sal_bh)value={{$req_old->sal_bh}}@endif  type="text" name="sal_bh" class="form-control" id="sal_bh" placeholder="">
            </div>
        @endif
        @if($req->input('type')=='73')
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
        @if($req->input('type')=='74')
            <div class="form-group">
                <label for="sgot">S.G.O.T / A.S.T</label>
                <input @if($req_old->sgot)value={{$req_old->sgot}}@endif  type="number" name="sgot" class="form-control" id="sgot" placeholder="U/L">
            </div>
            <div class="form-group">
                <label for="sgpt">S.G.P.T / A.L.T</label>
                <input @if($req_old->sgpt)value={{$req_old->sgpt}}@endif  type="number" name="sgpt" class="form-control" id="sgpt" placeholder="U/L">
            </div>
        @endif
        @if($req->input('type')=='75')
            <div class="form-group">
                <label for="tsh">3<sup>rd</sup> Generation TSH</label>
                <input @if($req_old->tsh)value={{$req_old->tsh}}@endif  type="number" name="tsh" class="form-control" id="tsh" placeholder="uIU/ml">
            </div>
            <div class="form-group">
                <label for="tsh_rem">Remarks</label>
                <input @if($req_old->tsh_rem)value={{$req_old->tsh_rem}}@endif list="tsh_rem_set"  type="number" name="tsh_rem" class="form-control" id="tsh_rem" placeholder="">
                <datalist id="rh_fac_set">
                    <option>Normal</option>
                    <option>High</option>
                    <option>Low</option>
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