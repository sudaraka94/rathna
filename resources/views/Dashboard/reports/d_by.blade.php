<table class="weight table table-responsive">
    <tr style="height: 70px;background-color: lightgrey;">
        <th style="font-weight: 500;">Description</th>
        <th style="font-weight: 500;">Result</th>
        @if($report->type!='72')
            <th style="font-weight: 500;">Unit</th>
            <th style="font-weight: 500;">Reference Range</th>
        @endif
        @if($report->type=='75')
            <th style="font-weight: 500;">Remarks</th>
        @endif
    </tr>
    @if($report->type=='70')
        <tr style="height: 70px;">
            <td>Anti Streptolysin "O" Level<br>(ASOT)</td>
            <td>{{$det->asot}}</td>
            <td>IU/ml</td>
            <td>Up to 200</td>
        </tr>
    @endif
    @if($report->type=='71')
        <tr style="height: 70px;">
            <td>Rheumatoid Factor</td>
            <td>{{$det->rh_fac}}</td>
            <td>IU/ml</td>
            <td>< 10.0 IU/ml</td>
        </tr>
    @endif
    @if($report->type=='72')
        <tr style="height: 70px;">
            <td>Salmonella typhi "H"</td>
            <td>{{$det->sal_h}}</td>
        </tr>
        <tr style="height: 70px;">
            <td>Salmonella typhi "O"</td>
            <td>{{$det->sal_o}}</td>
        </tr>
        <tr style="height: 70px;">
            <td>Salmonella paratyphi "AH"</td>
            <td>{{$det->sal_ah}}</td>
        </tr>
        <tr style="height: 70px;">
            <td>Salmonella paratyphi "BH"</td>
            <td>{{$det->sal_bh}}</td>
        </tr>
    @endif
    @if($report->type=='73')
    <tr style="height: 70px;">
        <td>Serum Electrolytes</td>
        <td></td>
        <td></td>
    </tr>
    <tr style="height: 70px;">
        <td><br><br>Sodium</td>
        <td>{{$det->sodium}}</td>
        <td>mmol/L</td>
        <td>136.0 - 148.0</td>
    </tr>
    <tr style="height: 70px;">
        <td><br><br>Potassium</td>
        <td>{{$det->potassium}}</td>
        <td>mmol/L</td>
        <td>3.50 - 5.00</td>
    </tr>
    <tr style="height: 70px;">
        <td><br><br>Chloride</td>
        <td>{{$det->chloride}}</td>
        <td>mmol/L</td>
        <td>95.0 - 105.0</td>
    </tr>
    @endif
    @if($report->type=='74')
    <tr style="height: 70px;">
        <td>S.G.O.T / A.S.T</td>
        <td>{{$det->sgot}}</td>
        <td>U/L</td>
        <td>Up to 35</td>
    </tr>
    <tr style="height: 70px;">
        <td>S.G.P.T / A.L.T</td>
        <td>{{$det->sgpt}}</td>
        <td>U/L</td>
        <td>Up to 40</td>
    </tr>
    @endif
    @if($report->type=='75')
    <tr style="height: 70px;">
        <td>3 rd Generation TSH</td>
        <td>uIU/ml</td>
        <td>0.30 - 4.20</td>
        <td>{{$det->tsh_rem}}</td>
    </tr>
    @endif
</table>

<br><br><br>
@if($report->type=='72')
    <div>
        <p>
            ( Normal : Less than 1 / 40 Dilution )
        </p>
    </div>
@endif