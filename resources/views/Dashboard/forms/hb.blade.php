<div class="box box-primary">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <input hidden="true" value="{{$req->input('type')}}" name="type">
    <div class="box-body">
        <div class="form-group">
            <label for="hb">Hb (Haemoglobin)</label>
            <input @if($req_old->hb)value={{$req_old->hb}}@endif  type="number" name="hb" class="form-control" id="hb" placeholder="g/dl">
        </div>
        @if($req->input('type')=='52' | $req->input('type')=='54')
            <div class="form-group">
                <label for="esr">E.S.R 1 hr</label>
                <input @if($req_old->esr)value={{$req_old->esr}}@endif  type="number" name="esr" class="form-control" id="esr" placeholder="mm">
            </div>
        @endif
        @if($req->input('type')=='53' | $req->input('type')=='54')
            <div class="form-group">
                <label for="wbc">W.B.C</label>
                <input @if($req_old->wbc)value={{$req_old->wbc}}@endif  type="number" name="wbc" class="form-control" id="wbc" placeholder="/mm3">
            </div>
            <label>D.C</label><br>
            <div class="form-group">
                <label for="poly">Poly</label>
                <input @if($req_old->poly)value={{$req_old->poly}}@endif  type="number" name="poly" class="form-control" id="poly" placeholder="%">
            </div>
            <div class="form-group">
                <label for="lym">Lym</label>
                <input @if($req_old->lym)value={{$req_old->lym}}@endif  type="number" name="lym" class="form-control" id="lym" placeholder="%">
            </div>
            <div class="form-group">
                <label for="eso">Eso</label>
                <input @if($req_old->eso)value={{$req_old->eso}}@endif  type="number" name="eso" class="form-control" id="eso" placeholder="%">
            </div>
            <div class="form-group">
                <label for="bas">Bas</label>
                <input @if($req_old->bas)value={{$req_old->bas}}@endif  type="number" name="bas" class="form-control" id="bas" placeholder="">
            </div>
            <div class="form-group">
                <label for="mon">Mon</label>
                <input @if($req_old->mon)value={{$req_old->mon}}@endif  type="number" name="mon" class="form-control" id="mon" placeholder="">
            </div>
            <div class="form-group">
                <label for="pcv">Pcv</label>
                <input @if($req_old->pcv)value={{$req_old->pcv}}@endif  type="number" name="pcv" class="form-control" id="pcv" placeholder="">
            </div>
            <div class="form-group">
                <label for="malaria">Malaria Parasites</label>
                <input @if($req_old->malaria)value={{$req_old->malaria}}@endif  type="number" name="malaria" class="form-control" id="malaria" placeholder="">
            </div>
            <div class="form-group">
                <label for="platelets">Platelets</label>
                <input @if($req_old->platelets)value={{$req_old->platelets}}@endif  type="number" name="platelets" class="form-control" id="platelets" placeholder="/mm3">
            </div>
            <div class="form-group">
                <label for="remarks">Remarks</label>
                <input @if($req_old->remarks)value={{$req_old->remarks}}@endif  type="text" list="remarks_set" name="remarks" class="form-control" id="remarks" placeholder="">
                <datalist id="remarks_set">
                    <option>* Neutrophils With Toxic Granuls</option>
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