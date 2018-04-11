@if($report->type=='16')
    -After 50g of Glucose -
@endif
<table class="weight table table-responsive">
    <tr style="height:70px;background-color: lightgrey;">
        <th style="font-weight: 500;">Description</th>
        <th style="font-weight: 500;">Result</th>
        <th style="font-weight: 500;">Unit</th>
        <th style="font-weight: 500;">Reference Range</th>
    </tr>
    @if($req->input('type')==18 | $req->input('type')==19)
    <tr style="height: 70px">
        <td>F.B.S<br>( Fasting Blood Sugar )</td>
        <td>{{$det->f_b_sugar}}</td>
        <td>mg/dl</td>
        <td>75.0-115.0</td>
    </tr>
    @endif
    @if($req->input('type')==19)
        <tr style="height: 70px;">
            <td>1/2 hr Blood Sugar</td>
            <td>{{$det->half_fasting_b_sugar}}</td>
            <td>mg/dl</td>
            <td></td>
        </tr>
    @endif
    @if($req->input('type')==16 | $req->input('type')==18 | $req->input('type')==19)
        <tr style="height: 70px;">
            <td>1st hr Blood Sugar</td>
            <td>{{$det->one_b_sugar}}</td>
            <td>mg/dl</td>
            <td></td>
        </tr>
    @endif
    @if($req->input('type')==19)
        <tr style="height: 70px;">
            <td>1 1/2 hr Blood Sugar</td>
            <td>{{$det->one_half_fasting_b_sugar}}</td>
            <td>mg/dl</td>
            <td></td>
        </tr>
    @endif
    @if($req->input('type')==17 | $req->input('type')==18 | $req->input('type')==19)
        <tr style="height: 70px;">
            <td>2nd hr Blood Sugar</td>
            <td>{{$det->one_fasting_b_sugar}}</td>
            <td>mg/dl</td>
            <td></td>
        </tr>
    @endif
</table>