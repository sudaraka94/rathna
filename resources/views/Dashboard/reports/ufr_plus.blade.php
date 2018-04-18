<table class="weight table table-responsive">
    <tr style="height: 70px;background-color: lightgrey;">
        <th style="font-weight: 500;"></th>
        <th style="font-weight: 500;"></th>
        <th style="font-weight: 500;"></th>
        <th style="font-weight: 500;">Reference Range</th>
    </tr>
    @if($report->type=='55')
        <tr style="height: 70px;">
            <td>F.B.S [Fasting Blood Sugar]</td>
            <td>{{$det->fbs}}</td>
            <td>mg/dL</td>
            <td>75.0 - 115.0</td>
        </tr>
    @endif
    @if($report->type=='56')
        <tr style="height: 70px;">
            <td>Hb [Haemoglobin]</td>
            <td>{{$det->hb}}</td>
            <td>g /dl</td>
            <td>12.0 - 17.5</td>
        </tr>
    @endif
    @if($report->type=='57')
        <tr style="height: 70px;">
            <td>P.P.B.S [Post Parandial Blood Sugar]</td>
            <td>{{$det->ppbs}}</td>
            <td>mg/dL</td>
            <td>80.0 - 140.0</td>
        </tr>
    @endif
    @if($report->type=='58')
        <tr style="height: 70px;">
            <td>R.B.S [Random Blood Sugar]</td>
            <td>{{$det->rbs}}</td>
            <td>mg/dL</td>
            <td>60.0 - 140.0</td>
        </tr>
    @endif
</table>
<br>
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



<table>

</table>