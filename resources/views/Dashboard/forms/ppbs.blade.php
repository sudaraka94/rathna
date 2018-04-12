<div class="box box-primary">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <input hidden="true" value="{{$req->input('type')}}" name="type">
    <div class="box-body">
        @if($req->input('type')=='20')
        <div class="form-group">
            <label for="ppbs">P.P.B.S ( Post parandial Blood Sugar )</label>
            <input @if($req_old->ppbs)value={{$req_old->ppbs}}@endif  type="number" name="ppbs" class="form-control" id="ppbs" placeholder="mg/dl">
        </div>
        @endif
        @if($req->input('type')=='21')
        <div class="form-group">
            <label for="rbs">R.B.S ( Random Blood Sugar )</label>
            <input @if($req_old->rbs)value={{$req_old->rbs}}@endif  type="number" name="rbs" class="form-control" id="rbs" placeholder="mg/dl">
        </div>
        @endif
        @if($req->input('type')=='22')
        <div class="form-group">
            <label for="ppbs_p_breakfast">P.P.B.S ( Post Breakfast )</label>
            <input @if($req_old->ppbs_p_breakfast)value={{$req_old->ppbs_p_breakfast}}@endif  type="number" name="ppbs_p_breakfast" class="form-control" id="ppbs_p_breakfast" placeholder="mg/dl">
        </div>
        <div class="form-group">
            <label for="ppbs_p_lunch">P.P.B.S ( Post Lunch )</label>
            <input @if($req_old->ppbs_p_lunch)value={{$req_old->ppbs_p_lunch}}@endif  type="number" name="ppbs_p_lunch" class="form-control" id="ppbs_p_lunch" placeholder="mg/dl">
        </div>
        <div class="form-group">
            <label for="ppbs_p_dinner">P.P.B.S ( Post Dinner )</label>
            <input @if($req_old->ppbs_p_dinner)value={{$req_old->ppbs_p_dinner}}@endif  type="number" name="ppbs_p_dinner" class="form-control" id="ppbs_p_dinner" placeholder="mg/dl">
        </div>
        @endif
        @if($req->input('type')=='23')
            <div class="form-group">
                <label for="u_sugar">Urine Sugar</label>
                <input @if($req_old->u_sugar)value={{$req_old->u_sugar}}@endif type="text" list="sugar_set" name="u_sugar" class="form-control" id="u_sugar" >
                <datalist id="sugar_set">
                    <option>nil</option>
                    <option>Trace</option>
                    <option>0.5 g%</option>
                    <option>1.0 g%</option>
                    <option>1.5 g%</option>
                    <option>2.0 g%</option>
                    <option>>2.0 g%</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="u_albumen">Albumen</label>
                <input type="text" @if($req_old->u_albumen)value={{$req_old->u_albumen}}@endif  name="albumen_set" class="form-control" id="u_albumen"  list="u_albumen">
                <datalist id="albumen_set">
                    <option>nil</option>
                    <option>Trace</option>
                    <option>Faint Trace</option>
                    <option>+</option>
                    <option>++</option>
                    <option>+++</option>
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