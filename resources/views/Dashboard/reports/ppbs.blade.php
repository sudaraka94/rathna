@if($report->type=='16')
    <div style="padding: 10px;font-weight: 800;">
        -After 50g of Glucose -
    </div>
@endif
<table class="weight table table-responsive">
    <tr style="height:70px;background-color: lightgrey;">
        <th style="font-weight: 500;">Description</th>
        <th style="font-weight: 500;">Result</th>
        @if($report->type==20 | $report->type==21| $report->type==22)
            <th style="font-weight: 500;">Unit</th>
        @endif
        @if($report->type==20 | $report->type==21)
            <th style="font-weight: 500;">Reference Range</th>
        @endif
    </tr>
    @if($report->type==20)
        <tr style="height: 70px">
            <td>P.P.B.S<br>( Post parandial Blood Sugar )</td>
            <td>{{$det->ppbs}}</td>
            <td>mg/dl</td>
            <td>80.0 - 140.0</td>
        </tr>
    @endif
    @if($report->type==21)
        <tr style="height: 70px;">
            <td>R.B.S</td>
            <td>{{$det->rbs}}</td>
            <td>mg/dl</td>
            <td> 60.0 - 140.0</td>
        </tr>
    @endif
    @if($report->type==22)
        <tr style="height: 70px;">
            <td>P.P.B.S ( Post Breakfast )</td>
            <td>{{$det->ppbs_p_breakfast}}</td>
            <td>mg/dl</td>
        </tr>
        <tr style="height: 70px;">
            <td>P.P.B.S ( Post Lunch )</td>
            <td>{{$det->ppbs_p_lunch}}</td>
            <td>mg/dl</td>
        </tr>
        <tr style="height: 70px;">
            <td>P.P.B.S ( Post Dinner )</td>
            <td>{{$det->ppbs_p_dinner}}</td>
            <td>mg/dl</td>
        </tr>
    @endif
    @if($report->type==23)
        <tr style="height: 70px;">
            <td>Urine Sugar</td>
            <td>{{$det->u_sugar}}</td>
        </tr>
        <tr style="height: 70px;">
            <td>Urine Albumen</td>
            <td>{{$det->u_albumen}}</td>
        </tr>
    @endif
</table>