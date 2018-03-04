
<table class="weight table table-responsive">
    <col width="40%">
    <col width="60%">
    <tr style="background-color: lightgrey;">
        <th style="font-weight: 500;">Description</th>
        <th style="font-weight: 500;">Result</th>
    </tr>
    <tr>
        <td style="padding: 5px">Pregnancy Test (H.C.G)</td>
        <td style="padding: 5px">{{$det->hcg}}</td>
    </tr>
    @if($report->type=='9')
        <tr style="height: 100px">

        </tr>
    @endif
    {{--@if($det->hcg=="Positive")--}}
        {{--<tr>--}}
            {{--<td>ඔබ ප්‍රදේශයේ පවුල් සෞඛ්‍ය සෙවා නිලධාරිණිය අමතන්න</td>--}}
            {{--<td></td>--}}
        {{--</tr>--}}
    {{--@endif--}}
    @if($det->repeat!=null & $report->type!='10')
        <tr>
            <td style="padding: 5px">* Please Repeat On</td>
            <td style="padding: 5px">{{$det->repeat}}</td>
        </tr>
    @endif
    @if($report->type=='10')
    <tr>
        <td style="padding: 5px"><h4 class="invoice-font" style="margin: 1px">Urine Full Report (U.F.R)</h4></td>
        <td style="padding: 5px"></td>
    </tr>
    <tr>
        <td style="padding: 5px">Appearance</td>
        <td style="padding: 5px">{{$det->appearance}}</td>
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
        <td style="padding: 5px"><h4 class="invoice-font" style="margin: 1px">Deposits</h4></td>
        <td style="padding: 5px"></td>
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
        @endif
</table>



<table>

</table>