<div class="box box-primary">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <input hidden="true" value="{{$req->input('type')}}" name="type">
    <div class="box-body">
        <div class="form-group">
            <label for="p_cells">Pus cells </label>
            <input @if($req_old->p_cells)value={{$req_old->p_cells}}@else{{'-'}}@endif type="text" list="p_cells_set" name="p_cells" class="form-control" id="p_cells" >
            <datalist id="p_cells_set">
                <option>+</option>
                <option>-</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="r_cells">Red cells </label>
            <input @if($req_old->r_cells)value={{$req_old->r_cells}}@else{{'-'}}@endif type="text" list="r_cells_set" name="r_cells" class="form-control" id="r_cells" >
            <datalist id="r_cells_set">
                <option>+</option>
                <option>-</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="e_cells">Epi cells </label>
            <input @if($req_old->e_cells)value={{$req_old->e_cells}}@else{{'-'}}@endif type="text" list="e_cells_set" name="e_cells" class="form-control" id="e_cells" >
            <datalist id="e_cells_set">
                <option>+</option>
                <option>-</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="c_report">Culture Report</label>
            <input @if($req_old->c_report)value={{$req_old->c_report}}@else{{'No Growth'}}@endif type="text" list="c_report_set" name="c_report" class="form-control" id="c_report" >
            <datalist id="c_report_set">
                <option>No Growth</option>
                <option>Mixed Growth</option>
                <option>Insignificant growth of coliforms isolated</option>
                <option>Pure growth of coliforms isolated</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="b_count">Bacterial Colony Count</label>
            <input @if($req_old->b_count)value={{$req_old->b_count}}@else{{'Not applicable'}}@endif type="text" list="b_count_set" name="b_count" class="form-control" id="b_count" >
            <datalist id="b_count_set">
                <option>Not applicable</option>
                <option>> 10 CFU / ml of urine</option>
                <option>10 - 10 CFU / ml of urine</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="a_test">Anti-Biotic Susceptibility Test</label>
            <input @if($req_old->a_test)value={{$req_old->a_test}}@else{{'Not done'}}@endif type="text" list="a_test_set" name="a_test" class="form-control" id="a_test" >
            <datalist id="a_test_set">
                <option>Not done</option>
            </datalist>
        </div>

        <h5>Antibiotics</h5>

        <div class="form-group">
            <label for="augmentin">Augmentin</label>
            <input @if($req_old->augmentin)value={{$req_old->augmentin}}@endif type="text" list="augmentin_set" name="augmentin" class="form-control" id="augmentin" >
            <datalist id="augmentin_set">
                <option>Resistant</option>
                <option>Sensitive</option>
                <option>Slightly Sensitive</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="ampicillin">Ampicillin</label>
            <input @if($req_old->ampicillin)value={{$req_old->ampicillin}}@endif type="text" list="ampicillin_set" name="ampicillin" class="form-control" id="ampicillin" >
            <datalist id="ampicillin_set">
                <option>Resistant</option>
                <option>Sensitive</option>
                <option>Slightly Sensitive</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="amikacin">Amikacin</label>
            <input @if($req_old->amikacin)value={{$req_old->amikacin}}@endif type="text" list="amikacin_set" name="amikacin" class="form-control" id="amikacin" >
            <datalist id="amikacin_set">
                <option>Resistant</option>
                <option>Sensitive</option>
                <option>Slightly Sensitive</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="amoxycilin">Amoxycilin</label>
            <input @if($req_old->amoxycilin)value={{$req_old->amoxycilin}}@endif type="text" list="amoxycilin_set" name="amoxycilin" class="form-control" id="amoxycilin" >
            <datalist id="amoxycilin_set">
                <option>Resistant</option>
                <option>Sensitive</option>
                <option>Slightly Sensitive</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="ciprofloxacin">Ciprofloxacin</label>
            <input @if($req_old->ciprofloxacin)value={{$req_old->ciprofloxacin}}@endif type="text" list="ciprofloxacin_set" name="ciprofloxacin" class="form-control" id="ciprofloxacin" >
            <datalist id="ciprofloxacin_set">
                <option>Resistant</option>
                <option>Sensitive</option>
                <option>Slightly Sensitive</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="cephalexin">Cephalexin</label>
            <input @if($req_old->cephalexin)value={{$req_old->cephalexin}}@endif type="text" list="cephalexin_set" name="cephalexin" class="form-control" id="cephalexin" >
            <datalist id="cephalexin_set">
                <option>Resistant</option>
                <option>Sensitive</option>
                <option>Slightly Sensitive</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="ceftazidime">Ceftazidime</label>
            <input @if($req_old->ceftazidime)value={{$req_old->ceftazidime}}@endif type="text" list="ceftazidime_set" name="ceftazidime" class="form-control" id="ceftazidime" >
            <datalist id="ceftazidime_set">
                <option>Resistant</option>
                <option>Sensitive</option>
                <option>Slightly Sensitive</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="cefoxitin">Cefoxitin</label>
            <input @if($req_old->cefoxitin)value={{$req_old->cefoxitin}}@endif type="text" list="cefoxitin_set" name="cefoxitin" class="form-control" id="cefoxitin" >
            <datalist id="cefoxitin_set">
                <option>Resistant</option>
                <option>Sensitive</option>
                <option>Slightly Sensitive</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="cefuroxime">Cefuroxime</label>
            <input @if($req_old->cefuroxime)value={{$req_old->cefuroxime}}@endif type="text" list="cefuroxime_set" name="cefuroxime" class="form-control" id="cefuroxime" >
            <datalist id="cefuroxime_set">
                <option>Resistant</option>
                <option>Sensitive</option>
                <option>Slightly Sensitive</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="gentamicin">Gentamicin</label>
            <input @if($req_old->gentamicin)value={{$req_old->gentamicin}}@endif type="text" list="gentamicin_set" name="gentamicin" class="form-control" id="gentamicin" >
            <datalist id="gentamicin_set">
                <option>Resistant</option>
                <option>Sensitive</option>
                <option>Slightly Sensitive</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="meropenem">Meropenem</label>
            <input @if($req_old->meropenem)value={{$req_old->meropenem}}@endif type="text" list="meropenem_set" name="meropenem" class="form-control" id="meropenem" >
            <datalist id="meropenem_set">
                <option>Resistant</option>
                <option>Sensitive</option>
                <option>Slightly Sensitive</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="norfloxacin">Norfloxacin</label>
            <input @if($req_old->norfloxacin)value={{$req_old->norfloxacin}}@endif type="text" list="norfloxacin_set" name="norfloxacin" class="form-control" id="norfloxacin" >
            <datalist id="norfloxacin_set">
                <option>Resistant</option>
                <option>Sensitive</option>
                <option>Slightly Sensitive</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="nitrofurantoin">Nitrofurantoin</label>
            <input @if($req_old->nitrofurantoin)value={{$req_old->nitrofurantoin}}@endif type="text" list="nitrofurantoin_set" name="nitrofurantoin" class="form-control" id="nitrofurantoin" >
            <datalist id="nitrofurantoin_set">
                <option>Resistant</option>
                <option>Sensitive</option>
                <option>Slightly Sensitive</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="nalidixic">Nalidixic Acid</label>
            <input @if($req_old->nalidixic)value={{$req_old->nalidixic}}@endif type="text" list="nalidixic_set" name="nalidixic" class="form-control" id="nalidixic" >
            <datalist id="nalidixic_set">
                <option>Resistant</option>
                <option>Sensitive</option>
                <option>Slightly Sensitive</option>
            </datalist>
        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
<!-- /.box -->

</form>