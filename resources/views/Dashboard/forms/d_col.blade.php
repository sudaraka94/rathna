<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <input hidden="true" value="{{$req->input('type')}}" name="type">
    <div class="box-body">
        @if($req->input('type')=='68')
            <div class="form-group">
                <label for="fbs">F.B.S [Fasting Blood Sugar]</label>
                <input type="fbs" @if($req_old->fbs)value={{$req_old->fbs}}@endif name="fbs" class="form-control" id="fbs" placeholder="mg/dL">
            </div>
        @endif
        @if($req->input('type')=='67')
            <h4>FULL BLOOD COUNT</h4>
            <div class="form-group">
                <label for="hb">Hb (Haemoglobin)</label>
                <input @if($req_old->hb)value={{$req_old->hb}}@endif  type="number" name="hb" class="form-control" id="hb" placeholder="g/dl">
            </div>
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
        @endif
            <br>
            <h4>Urine Full Report (U.F.R)</h4>
            <div class="form-group">
                <label for="appearance">Appearance</label>
                <input @if($req_old->appearance)value={{$req_old->appearance}}@endif type="text" list="appearance_set" name="appearance" class="form-control" id="appearance" placeholder="">
                <datalist id="appearance_set">
                    <option>Clear</option>
                    <option>Yellow</option>
                    <option>Turbid</option>
                    <option>S.Turbid</option>
                    <option>Straw Colour</option>
                    <option>Blood Stain</option>
                    <option>Grossly Blood Stain</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="reaction">Reaction</label>
                <input type="reaction" @if($req_old->reaction)value={{$req_old->reaction}}@endif name="reaction" class="form-control" id="reaction" placeholder="">
            </div>
            <div class="form-group">
                <label for="albumen">Albumen</label>
                <input type="text" @if($req_old->albumen)value={{$req_old->albumen}}@endif  name="albumen" class="form-control" id="albumen"  list="albumen_set">
                <datalist id="albumen_set">
                    <option>nil</option>
                    <option>Trace</option>
                    <option>Faint Trace</option>
                    <option>+</option>
                    <option>++</option>
                    <option>+++</option>
                </datalist>
            </div>

            <div class="form-group">
                <label for="sugar">Sugar</label>
                <input @if($req_old->sugar)value={{$req_old->sugar}}@endif type="text" list="sugar" name="sugar" class="form-control" id="sugar" >
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
                <label for="acetone">Acetone</label>
                <input @if($req_old->acetone)value={{$req_old->acetone}}@endif type="text" name="acetone" class="form-control" id="acetone" placeholder="">
            </div>
            <div class="form-group">
                <label for="bile">Bile Pigment</label>
                <input type="bile" name="bile" class="form-control" id="bile" @if($req_old->bile)value={{$req_old->bile}} @endif placeholder="">
            </div>
            <div class="form-group">
                <label for="urobilino">Urobilino gen</label>
                <input @if($req_old->urobilino)value={{$req_old->urobilino}}@endif type="text" name="urobilino" class="form-control" id="urobilino" placeholder="">
            </div>
            <h4>Deposits</h4>
            <div class="form-group">
                <label for="u_pus">Pus Cells</label>
                <input @if($req_old->u_pus)value={{$req_old->u_pus}}@endif list="u_pus_set" type="text" name="u_pus" class="form-control" id="u_pus" placeholder="">
                <datalist id="u_pus_set">
                    <option>nil</option>
                    <option>+ ( 1-2/field )</option>
                    <option>+ ( 1-3/field )</option>
                    <option>+ ( Occasional )</option>
                    <option>+ + + ( field  full )</option>
                    <option>+ (3-5/field) , Clustures  of  pus  cells</option>
                    <option>+ + (Moderatly  field  full)</option>
                    <option>++ (10-15/field)</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="u_rbc">R.B.Cs</label>
                <input @if($req_old->u_rbc)value={{$req_old->u_rbc}}@endif type="text" list="u_rbc_set" name="u_rbc" class="form-control" id="u_rbc" placeholder="">
                <datalist id="u_rbc_set">
                    <option>nil</option>
                    <option>+</option>
                    <option>+ +</option>
                    <option>+ ( 1-2/field )</option>
                    <option>+ ( Occasional )</option>
                    <option>+ + (Moderatly  field  full)</option>
                    <option>+ + + (field  full)</option>
                    <option>+ (2-3/field)</option>
                    <option>+ ( 1-3/field )</option>
                    <option>+ + (10-15/field)</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="fpi">Fpi Cells</label>
                <input @if($req_old->fpi)value={{$req_old->fpi}}@endif type="text" list="fpi_set" name="fpi" class="form-control" id="fpi" placeholder="">
                <datalist id="fpi_set">
                    <option>+ few</option>
                    <option>++</option>
                    <option>+++</option>
                    <option>nil</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="cast">Cast</label>
                <input @if($req_old->cast)value={{$req_old->cast}}@endif type="text" list="cast_set" name="cast" class="form-control" id="cast" placeholder="">
                <datalist id="cast_set">
                    <option>nil</option>
                    <option>Granular  casts</option>
                    <option>Moderatly  field  full</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="o_deposit">Organized Diposits</label>
                <input @if($req_old->o_deposit)value={{$req_old->o_deposit}}@endif type="text" list="o_deposit_set" name="o_deposit" class="form-control" id="o_deposit" placeholder="">
                <datalist id="o_deposit_set">
                    <option>nil</option>
                    <option>Ammorphus  phosphetes +</option>
                    <option>Organisam +</option>
                    <option>Monilia +</option>
                    <option>Yeast  Cells</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="crystals">Crystals</label>
                <input @if($req_old->crystals)value={{$req_old->crystals}}@endif type="text" list="crystals_set" name="crystals" class="form-control" id="crystals" placeholder="">
                <datalist id="crystals_set">
                    <option>nil</option>
                    <option>Calcium  oxalates +</option>
                    <option>few  Calcium oxalates</option>
                    <option>Monilia +</option>
                    <option>Triple  phosphetes</option>
                </datalist>
            </div>
            @if($req->input('type')=='68' | $req->input('type')=='69')
                <br>
                <h4>Stool Full Report (S.F.R)</h4>
                <div class="form-group">
                    <label for="hwo">H.W.O</label>
                    <input @if($req_old->hwo)value={{$req_old->hwo}}@endif type="text" list="hwo_set" name="hwo" class="form-control" id="hwo" placeholder="">
                    <datalist id="hwo_set">
                        <option>nil</option>
                        <option>+</option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="rwo">R.W.O</label>
                    <input @if($req_old->rwo)value={{$req_old->rwo}}@endif type="text" list="rwo_set" name="rwo" class="form-control" id="rwo" placeholder="">
                    <datalist id="rwo_set">
                        <option>nil</option>
                        <option>+</option>
                    </datalist>
                </div>
                <h4>Other Data</h4>
                <div class="form-group">
                    <label for="ameba">Ameba</label>
                    <input @if($req_old->ameba)value={{$req_old->ameba}}@endif type="text" list="ameba_set" name="ameba" class="form-control" id="ameba" placeholder="">
                    <datalist id="ameba_set">
                        <option>nil</option>
                        <option>+</option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="cysts">Cysts</label>
                    <input @if($req_old->cysts)value={{$req_old->cysts}}@endif type="text" list="cysts_set" name="cysts" class="form-control" id="cysts" placeholder="">
                    <datalist id="cysts_set">
                        <option>nil</option>
                        <option>+</option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="clc">C.L. Cristal</label>
                    <input @if($req_old->clc)value={{$req_old->clc}}@endif type="text" list="clc_set" name="clc" class="form-control" id="clc" placeholder="">
                    <datalist id="clc_set">
                        <option>nil</option>
                        <option>+</option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="s_pus">Puss Cells</label>
                    <input @if($req_old->s_pus)value={{$req_old->s_pus}}@endif list="s_pus_set" type="text" name="s_pus" class="form-control" id="s_pus" placeholder="">
                    <datalist id="s_pus_set">
                        <option>nil</option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="s_rbc">R.B.Cs</label>
                    <input @if($req_old->s_rbc)value={{$req_old->s_rbc}}@endif type="text" list="s_rbc_set" name="s_rbc" class="form-control" id="s_rbc" placeholder="">
                    <datalist id="s_rbc_set">
                        <option>nil</option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="mucus">Mucus</label>
                    <input @if($req_old->mucus)value={{$req_old->mucus}}@endif type="text" list="mucus_set" name="mucus" class="form-control" id="mucus" placeholder="">
                    <datalist id="mucus_set">
                        <option>nil</option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="macrophags">Macrophags</label>
                    <input @if($req_old->macrophags)value={{$req_old->macrophags}}@endif type="text" list="macrophags_set" name="macrophags" class="form-control" id="macrophags" placeholder="">
                    <datalist id="macrophags_set">
                        <option>nil</option>
                        <option>+</option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="consistens">Consistens</label>
                    <input @if($req_old->consistens)value={{$req_old->consistens}}@endif type="text" name="consistens" class="form-control" id="consistens" placeholder="">
                </div>
                <div class="form-group">
                    <label for="r_substances">Reducin Substances</label>
                    <input @if($req_old->r_substances)value={{$req_old->r_substances}}@endif type="text" list="r_substances_set" name="r_substances" class="form-control" id="r_substances" placeholder="">
                    <datalist id="r_substances_set"><option>nil</option>
                        <option>Trace</option>
                        <option>0.5 g%</option>
                        <option>1.0 g%</option>
                        <option>1.5 g%</option>
                        <option>2.0 g%</option>
                        <option>>2.0 g%</option>
                    </datalist>
                </div>
            @endif


    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</div>

</div>
<!-- /.box -->

</form>