@if($report->type=='68')
    <table class="weight table table-responsive">
        <tr style="height: 70px;background-color: lightgrey;">
            <th style="font-weight: 500;"></th>
            <th style="font-weight: 500;"></th>
            <th style="font-weight: 500;"></th>
            <th style="font-weight: 500;">Reference Range</th>
        </tr>
        <tr style="height: 70px;">
            <td>F.B.S [Fasting Blood Sugar]</td>
            <td>{{$det->fbs}}</td>
            <td>mg/dL</td>
            <td>75.0 - 115.0</td>
        </tr>
    </table>
    <br>
@endif
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h4>Urine Full Report (U.F.R)</h4>
            <table class="weight table table-responsive">
                <tr>
                    <td style="padding: 5px">Appearance</td>
                    <td class="table-reduce">{{$det->appearance}}</td>
                </tr>
                <tr>
                    <td style="padding: 5px">S .G</td>
                    <td style="padding: 5px">{{$det->sg}}</td>
                </tr>
                <tr>
                    <td style="padding: 5px">Reaction</td>
                    <td style="padding: 5px">{{$det->reaction}}</td>
                </tr>
                <tr>
                    <td style="padding: 5px">Albumen</td>
                    <td style="padding: 5px">{{$det->albumen}}</td>
                </tr>
                <tr>
                    <td style="padding: 5px">Sugar</td>
                    <td style="padding: 5px">{{$det->sugar}}</td>
                </tr>
                <tr>
                    <td style="padding: 5px">Acetone</td>
                    <td style="padding: 5px">{{$det->acetone}}</td>
                </tr>
                <tr>
                    <td style="padding: 5px">Bile</td>
                    <td style="padding: 5px">{{$det->bile}}</td>
                </tr>
                <tr>
                    <td style="padding: 5px">Urobilino gen</td>
                    <td style="padding: 5px">{{$det->urobilino}}</td>
                </tr>
                <tr>
                    <td style="padding: 0px"><h5 class="invoice-font">Deposits</h5></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="padding: 5px">Pus Cells</td>
                    <td style="padding: 5px">{{$det->u_pus}}</td>
                </tr>
                <tr>
                    <td style="padding: 5px">R.B.Cs</td>
                    <td style="padding: 5px">{{$det->u_rbc}}</td>
                </tr>
                <tr>
                    <td style="padding: 5px">Fpi Cells</td>
                    <td style="padding: 5px">{{$det->fpi}}</td>
                </tr>
                <tr>
                    <td style="padding: 5px">Cast</td>
                    <td style="padding: 5px">{{$det->cast}}</td>
                </tr>
                <tr>
                    <td style="padding: 5px">Organized Diposits</td>
                    <td style="padding: 5px">{{$det->o_deposit}}</td>
                </tr>
                <tr>
                    <td style="padding: 5px">Crystals</td>
                    <td style="padding: 5px">{{$det->crystals}}</td>
                </tr>
            </table>
        </div>
        <div class="col-sm">
            @if($report->type=='67')
                <table class="weight table table-responsive">
                    <tr style="height: 70px;background-color: lightgrey;">
                        <th style="font-weight: 500;">Description</th>
                        <th style="font-weight: 500;">Result</th>
                        <th style="font-weight: 500;">Unit</th>
                    </tr>
                    <tr style="height: 70px;">
                        <td> Hb (Haemoglobin)</td>
                        <td>{{$det->hb}}</td>
                        <td>g/dl</td>
                    </tr>
                    <tr style="height: 70px;">
                        <td>W.B.C</td>
                        <td>{{$det->wbc}}</td>
                        <td>/mm<sup>3</sup></td>
                    </tr>
                    <tr style="height: 70px;">
                        <td>DC</td>
                        <td></td>
                    </tr>
                    <tr style="height: 70px;">
                        <td><br><br>Poly</td>
                        <td>{{$det->poly}}%</td>
                        <td></td>
                    </tr>
                    <tr style="height: 70px;">
                        <td><br><br>Lym</td>
                        <td>{{$det->lym}}%</td>
                        <td></td>
                    </tr>
                    <tr style="height: 70px;">
                        <td><br><br>Eso</td>
                        <td>{{$det->eso}}%</td>
                        <td></td>
                    </tr>
                    <tr style="height: 70px;">
                        <td><br><br>Bas</td>
                        <td>{{$det->bas}}</td>
                        <td></td>
                    </tr>
                    <tr style="height: 70px;">
                        <td><br><br>Mon</td>
                        <td>{{$det->mon}}</td>
                        <td></td>
                    </tr>
                    <tr style="height: 70px;">
                        <td>Pcv</td>
                        <td>{{$det->pcv}}</td>
                        <td></td>
                    </tr>
                    <tr style="height: 70px;">
                        <td>Malaria Parasites</td>
                        <td>{{$det->malaria}}</td>
                        <td></td>
                    </tr>
                    <tr style="height: 70px;">
                        <td>Platelets</td>
                        <td>{{$det->platelets}}</td>
                        <td>/mm<sup>3</sup></td>
                    </tr>
                </table>
            @else
                <table class="weight table table-responsive">
                    <col width="40%">
                    <col width="60%">
                    <tr>
                        <td>H.W.O</td>
                        <td>{{$det->hwo}}</td>
                    </tr>
                    <tr>
                        <td>R.W.O</td>
                        <td>{{$det->rwo}}</td>
                    </tr>
                    <tr>
                        <td><h4 class="invoice-font">Other Data</h4></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Ameba</td>
                        <td>{{$det->ameba}}</td>
                    </tr>
                    <tr>
                        <td>Cysts</td>
                        <td>{{$det->cysts}}</td>
                    </tr>
                    <tr>
                        <td>C.L Cristal</td>
                        <td>{{$det->clc}}</td>
                    </tr>
                    <tr>
                        <td>R.B.Cs</td>
                        <td>{{$det->s_rbc}}</td>
                    </tr>
                    <tr>
                        <td>Pus Cells</td>
                        <td>{{$det->s_pus}}</td>
                    </tr>
                    <tr>
                        <td>Mucus</td>
                        <td>{{$det->mucus}}</td>
                    </tr>
                    <tr>
                        <td>Macrophags</td>
                        <td>{{$det->macrophags}}</td>
                    </tr>
                    <tr>
                        <td>Consistens</td>
                        <td>{{$det->consistens}}</td>
                    </tr>
                    <tr>
                        <td>Reducin substances</td>
                        <td>{{$det->r_substances}}</td>
                    </tr>
                </table>
            @endif
        </div>
    </div>
</div>