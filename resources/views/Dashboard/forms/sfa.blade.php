<div class="box box-primary">
    <div class="box-header with-border">
        Seminal Fluid Analysis
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <input hidden="true" value="{{$req->input('type')}}" name="type">
    <h4>Macroscopic Examination</h4>
    <div class="box-body">
        <div class="form-group">
            <label for="qty">Quantity</label>
            <input @if($req_old->qty)value={{$req_old->qty}}@endif  type="text" name="qty" class="form-control" id="qty" placeholder="">
        </div>
        <div class="form-group">
            <label for="viscosity">Viscosity</label>
            <input @if($req_old->viscosity)value={{$req_old->viscosity}}@endif  type="text" name="viscosity" class="form-control" id="viscosity" list="viscosity_set" placeholder="">
            <datalist id="viscosity_set">
                <option>+normal</option>
                <option>++</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="slt">Self Liquefaction Time</label>
            <input @if($req_old->slt)value={{$req_old->slt}}@endif  type="text" name="slt" class="form-control" id="slt" list="slt_set" placeholder="">
            <datalist id="slt_set">
                <option>> 30 min</option>
                <option>< 20 min</option>
                <option>> 1 hour</option>
                <option>> 20 min</option>
                <option>< 30 min</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="colour">Colour</label>
            <input @if($req_old->colour)value={{$req_old->colour}}@endif  type="text" name="colour" class="form-control" id="colour" placeholder="">
        </div>
        <div class="form-group">
            <label for="reaction">Reaction</label>
            <input @if($req_old->reaction)value={{$req_old->reaction}}@endif  type="text" name="reaction" class="form-control" id="reaction" placeholder="">
        </div>
        <div class="form-group">
            <label for="ph">P.H</label>
            <input @if($req_old->ph)value={{$req_old->ph}}@endif  type="text" name="ph" class="form-control" id="ph" placeholder="">
        </div>
        <div class="form-group">
            <label for="micro">Microscopic Examination</label>
            <input @if($req_old->micro)value={{$req_old->micro}}@endif  type="text" name="micro" class="form-control" id="micro" placeholder="">
        </div>
        <br>
        <h4>Motility</h4>

        <div class="form-group">
            <label for="a_mot">Actively Motile</label>
            <input @if($req_old->a_mot)value={{$req_old->a_mot}}@endif  type="text" name="a_mot" class="form-control" id="a_mot" placeholder="">
        </div>
        <div class="form-group">
            <label for="s_mot">Slugglishly Motile</label>
            <input @if($req_old->s_mot)value={{$req_old->s_mot}}@endif  type="text" name="s_mot" class="form-control" id="s_mot" placeholder="">
        </div>
        <div class="form-group">
            <label for="inactive">Inactive</label>
            <input @if($req_old->inactive)value={{$req_old->inactive}}@endif  type="text" name="inactive" class="form-control" id="inactive" placeholder="">
        </div>
        <br>
        <div class="form-group">
            <label for="count">Count</label>
            <input @if($req_old->count)value={{$req_old->count}}@endif  type="text" name="count" class="form-control" id="count" placeholder="x 10^6">
        </div>
        <br><h4>Mophological Examination</h4>
        <label>Stained Smear of Semen</label>
        <div class="form-group">
            <label for="tas">Total Abnormal Sperms</label>
            <input @if($req_old->tas)value={{$req_old->tas}}@endif  type="text" name="tas" class="form-control" id="tas" placeholder="">
        </div>
        <div class="form-group">
            <label for="pnc">Polymorpho Nuclear Cells</label>
            <input @if($req_old->pnc)value={{$req_old->pnc}}@endif  type="text" name="pnc" class="form-control" id="pnc" placeholder="">
        </div>
        <br><h4>Others</h4>
        <div class="form-group">
            <label for="rbc">R.B.C</label>
            <input @if($req_old->rbc)value={{$req_old->rbc}}@endif  type="text" name="rbc" class="form-control" id="rbc" list="rbc_set" placeholder="">
            <datalist id="rbc_set">
                <option>nil</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="globulus">Globulus</label>
            <input @if($req_old->globulus)value={{$req_old->globulus}}@endif  type="text" name="globulus" class="form-control" id="globulus" placeholder="">
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