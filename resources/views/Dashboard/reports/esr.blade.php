<table class="weight table table-responsive">
    <tr style="height: 70px;background-color: lightgrey;">
        <th style="font-weight: 500;">Description</th>
        <th style="font-weight: 500;">Result</th>
        <th style="font-weight: 500;">Unit</th>
        @if($report->type=='38'| $report->type=='30' | $report->type=='41' | $report->type=='42' | $report->type=='43' | $report->type=='44'| $report->type=='48' | $report->type=='49' | $report->type=='50')
            <th style="font-weight: 500;">Reference Range</th>
        @endif
        @if($report->type=='49'| $report->type=='48')
            <th style="font-weight: 500;">Remarks</th>
        @endif
    </tr>

    @if($report->type=='38')
        <tr style="height: 70px;">
            <td>Blood Urea</td>
            <td>{{$det->b_uria}}</td>
            <td>mg/dl</td>
            <td>10.0 - 50.0</td>
        </tr>
    @endif
    @if($report->type=='39' | $report->type=='40' | $report->type=='41')
        <tr style="height: 70px;">
            <td>E.S.R 1<sup>st</sup>hr</td>
            <td>{{$det->esr}}</td>
            <td>mm</td>
        </tr>
    @endif
    @if($report->type=='39' | $report->type=='42' | $report->type=='43' | $report->type=='44' | $report->type=='45')
        <tr style="height: 70px;">
            <td>F.B.S (Fasting Blood Sugar)</td>
            <td>{{$det->fbs}}</td>
            <td>mg/dl</td>
            @if($report->type=='42' | $report->type=='43' | $report->type=='44')
                <td>75.0 - 115.0</td>
            @endif
        </tr>
    @endif
    @if($report->type=='40' | $report->type=='47')
        <tr style="height: 70px;">
            <td>R.B.S (Random Blood Sugar)</td>
            <td>{{$det->rbs}}</td>
            <td>mg/dl</td>
        </tr>
    @endif
    @if($report->type=='41')
        <tr style="height: 70px;">
            <td>Rheumatoid Factor</td>
            <td>{{$det->rh_f}}</td>
            <td>IU/ml</td>
            <td>< 10.0 IU/ml</td>
        </tr>
    @endif
    @if($report->type=='42')
        <tr style="height: 70px;">
            <td>Serum Creatinine</td>
            <td>{{$det->s_creat}}</td>
            <td>mg / dl</td>
            <td>0.50 - 1.30</td>
        </tr>
    @endif
    @if($report->type=='43' | $report->type=='44' )
        <tr style="height: 70px;">
            <td>Total Cholesterol</td>
            <td>{{$det->t_cholesterol}}</td>
            <td>mg / dl</td>
            <td>150.0 - 240.0</td>
        </tr>
    @endif
    @if($report->type=='44')
        <tr style="height: 70px;">
            <td>Triglycerides</td>
            <td>{{$det->tri_g}}</td>
            <td>mg / dl</td>
            <td> 40.0 - 157.0</td>
        </tr>
    @endif
    @if($report->type=='45' | $report->type=='46' | $report->type=='47')
        <tr style="height: 70px;">
            <td>H.b ( Haemoglobin )</td>
            <td>{{$det->hb}}</td>
            <td>g/dl</td>
        </tr>
    @endif
    @if($report->type=='46')
        <tr style="height: 70px;">
            <td>P.P.B.S ( Post parandial Blood Sugar )</td>
            <td>{{$det->ppbs}}</td>
            <td>mg/dl</td>
        </tr>
    @endif
    @if($report->type=='48')
        <tr style="height: 70px;">
            <td>S.G.O.T / A.S.T</td>
            <td>{{$det->sgot}}</td>
            <td>U/L</td>
            <td>Up to 35</td>
            <td>{{$det->sgot_r}}</td>
        </tr>
    @endif
    @if($report->type=='49')
        <tr style="height: 70px;">
            <td>S.G.P.T / A.L.T</td>
            <td>{{$det->sgpt}}</td>
            <td>U/L</td>
            <td>Up to 40</td>
            <td>{{$det->sgpt_r}}</td>
        </tr>
    @endif

</table>