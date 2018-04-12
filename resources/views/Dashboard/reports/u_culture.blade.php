<table class="weight table table-responsive">
    <tr style="height: 70px">
        <th><strong>MICROSCOPIC EXAMINATION</strong></th>
        <th></th>
    </tr>
    <tr style="height: 70px">
        <th></th>
        <th>Pus cells : {{$det->p_cells}} / HPF </th>
    </tr>
    <tr style="height: 70px">
        <th></th>
        <th>Red cells : {{$det->r_cells}} / HPF </th>
    </tr>
    <tr style="height: 70px">
        <th></th>
        <th>Epi cells : {{$det->e_cells}} / HPF </th>
    </tr>
</table>
<table class="weight table table-responsive">
    <tr style="height: 70px">
        <th><strong>Culture Report</strong></th>
        <th>{{$det->c_report}}</th>
    </tr>
    <tr style="height: 70px">
        <th>Bacterial Colony Count</th>
        <th>{{$det->b_count}}</th>
    </tr>
    <tr style="height: 70px">
        <th>Anti-Biotic Susceptibility Test</th>
        <th>{{$det->a_test}}</th>
    </tr>
</table>
<table class="weight table table-responsive">
    <tr style="height:70px;background-color: lightgrey;">
        <th style="font-weight: 500;"></th>
        <th style="font-weight: 500;"></th>
        <th style="font-weight: 500;"></th>
        <th style="font-weight: 500;"></th>
    </tr>
    <tr style="height: 70px">
        <td>Augmentin</td>
        <td>{{$det->augmentin}}</td>
        <td>Cefoxitin</td>
        <td>{{$det->cefoxitin}}</td>
    </tr>
    <tr style="height: 70px">
        <td>Ampicillin</td>
        <td>{{$det->ampicillin}}</td>
        <td>Cefuroxime</td>
        <td>{{$det->cefuroxime}}</td>
    </tr>
    <tr style="height: 70px">
        <td>Amikacin</td>
        <td>{{$det->amikacin}}</td>
        <td>Gentamicin</td>
        <td>{{$det->gentamicin}}</td>
    </tr>
    <tr style="height: 70px">
        <td>Amoxycilin</td>
        <td>{{$det->amoxycilin}}</td>
        <td>Meropenem</td>
        <td>{{$det->meropenem}}</td>
    </tr>
    <tr style="height: 70px">
        <td>Ciprofloxacin</td>
        <td>{{$det->ciprofloxacin}}</td>
        <td>Norfloxacin</td>
        <td>{{$det->norfloxacin}}</td>
    </tr>
    <tr style="height: 70px">
        <td>Cephalexin</td>
        <td>{{$det->cephalexin}}</td>
        <td>Nitrofurantoin</td>
        <td>{{$det->nitrofurantoin}}</td>
    </tr>
    <tr style="height: 70px">
        <td>Ceftazidime</td>
        <td>{{$det->ceftazidime}}</td>
        <td>Nalidixic Acid</td>
        <td>{{$det->nalidixic}}</td>
    </tr>
</table>