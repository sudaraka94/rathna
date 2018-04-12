<div class="box box-primary">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <input hidden="true" value="{{$req->input('type')}}" name="type">
    <div class="box-body">
        @if($req->input('type')==18 | $req->input('type')==19)
            <div class="form-group">
                <label for="group">Fasting Blood Sugar</label>
                <input @if($req_old->f_b_sugar)value={{$req_old->f_b_sugar}}@endif type="text" name="f_b_sugar" class="form-control" id="f_b_sugar" placeholder="mg/dl">
            </div>
        @endif
        @if($req->input('type')==19)
            <div class="form-group">
                <label for="group">1/2 hr Blood Sugar</label>
                <input @if($req_old->half_fasting_b_sugar)value={{$req_old->half_fasting_b_sugar}}@endif type="text" name="half_fasting_b_sugar" class="form-control" id="half_fasting_b_sugar" placeholder="mg/dl">
            </div>
        @endif
        @if($req->input('type')==16 | $req->input('type')==18 | $req->input('type')==19)
            <div class="form-group">
                <label for="group">1st hr Blood Sugar</label>
                <input @if($req_old->one_b_sugar)value={{$req_old->one_b_sugar}}@endif type="text" name="one_b_sugar" class="form-control" id="one_b_sugar" placeholder="mg/dl">
            </div>
        @endif
        @if($req->input('type')==19)
            <div class="form-group">
                <label for="group">1 1/2 hr Blood Sugar</label>
                <input @if($req_old->one_half_fasting_b_sugar)value={{$req_old->one_half_fasting_b_sugar}}@endif type="text" name="one_half_fasting_b_sugar" class="form-control" id="one_half_fasting_b_sugar" placeholder="mg/dl">
            </div>
        @endif
        @if($req->input('type')==17 | $req->input('type')==18 | $req->input('type')==19)
            <div class="form-group">
                <label for="group">2nd hr Blood Sugar</label>
                <input @if($req_old->one_fasting_b_sugar)value={{$req_old->one__fasting_b_sugar}}@endif type="text" name="one__fasting_b_sugar" class="form-control" id="one__fasting_b_sugar" placeholder="mg/dl">
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