<table class="weight table table-responsive">
    <tr style="height: 70px;background-color: lightgrey;">
        <th style="font-weight: 500;">Description</th>
        <th style="font-weight: 500;">Result</th>
        <th style="font-weight: 500;">Unit</th>
        @if($report->type=='53'| $report->type=='54')
            <th style="font-weight: 500;"></th>
        @endif
        @if($report->type=='51')
            <th style="font-weight: 500;">Reference Range</th>
        @endif
    </tr>
    <tr style="height: 70px;">
        <td> Hb (Haemoglobin)</td>
        <td>{{$det->hb}}</td>
        <td>g/dl</td>
        @if($report->type=='51')
            <td>12.0 - 17.5</td>
        @endif
    </tr>
    @if($report->type=='53' | $report->type=='54')
        <tr style="height: 70px;">
            <td>W.B.C</td>
            <td>{{$det->wbc}}</td>
            <td>/mm<sup>3</sup></td>
        </tr>
        <tr style="height: 70px;">
            <td>DC</td>
        </tr>
        <tr style="height: 70px;">
            <td><br><br>Poly</td>
            <td>{{$det->poly}}%</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>{{$det->remarks}}</td>
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
    @endif
    @if($report->type=='52' | $report->type=='54')
        <tr style="height: 70px;">
            <td>E.S.R 1<sup>st</sup>hr</td>
            <td>{{$det->esr}}</td>
            <td>mm</td>
        </tr>
    @endif
</table>