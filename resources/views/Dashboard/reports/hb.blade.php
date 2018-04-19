<table class="weight table table-responsive">
    <tr style="height: 70px;background-color: lightgrey;">
        <th style="font-weight: 500;"></th>
        <th style="font-weight: 500;"></th>
    </tr>
    <tr style="height: 70px;">
        <td><h4>Macroscopic Examination</h4></td>
        <td></td>
    </tr>
    <tr style="height: 70px;">
        <td>&nbsp;&nbsp;Quantity</td>
        <td>:{{$det->quantity}}</td>
    </tr>
    <tr style="height: 70px;">
        <td>&nbsp;&nbsp;Viscosity</td>
        <td>:{{$det->viscosity}}</td>
    </tr>
    <tr style="height: 70px;">
        <td>&nbsp;&nbsp;Self Liquefaction Time</td>
        <td>:{{$det->slt}}</td>
    </tr>
    <tr style="height: 70px;">
        <td>&nbsp;&nbsp;Colour</td>
        <td>:{{$det->colour}}</td>
    </tr>
    <tr style="height: 70px;">
        <td>&nbsp;&nbsp;Reaction</td>
        <td>:{{$det->reaction}}</td>
    </tr>
    <tr style="height: 70px;">
        <td>&nbsp;&nbsp;P.H.</td>
        <td>:{{$det->ph}}</td>
    </tr>
    <tr style="height: 70px;">
        <td>Microscopic Examination</td>
        <td>:{{$det->micro}}</td>
    </tr>
    <tr style="height: 70px;">
        <td><h4>Motility</h4></td>
        <td></td>
    </tr>
    <tr style="height: 70px;">
        <td>&nbsp;&nbsp;Actively Motile</td>
        <td>:{{$det->a_mot}}</td>
    </tr>
    <tr style="height: 70px;">
        <td>&nbsp;&nbsp;Slugglishly Motile</td>
        <td>:{{$det->s_mot}}</td>
    </tr>
    <tr style="height: 70px;">
        <td>&nbsp;&nbsp;Inactive</td>
        <td>:{{$det->inactive}}</td>
    </tr>
    <tr style="height: 70px;">
        <td>Count</td>
        <td>:{{$det->count}}x 10<sup>6</sup></td>
    </tr>
    <tr style="height: 70px;">
        <td><h4>Mophological Examination</h4></td>
        <td></td>
    </tr>
    <tr style="height: 70px;">
        <td>Stained Smear of Semen</td>
        <td></td>
    </tr>
    <tr style="height: 70px;">
        <td>&nbsp;&nbsp;Total Abnormal Sperms</td>
        <td>:{{$det->tas}}</td>
    </tr>
    <tr style="height: 70px;">
        <td>&nbsp;&nbsp;Polymorpho Nuclear Cells</td>
        <td>:{{$det->pnc}}</td>
    </tr>
    <tr style="height: 70px;">
        <td><h4>Others</h4></td>
        <td></td>
    </tr>
    <tr style="height: 70px;">
        <td>&nbsp;&nbsp;R.B.C.</td>
        <td>:{{$det->rbc}}</td>
    </tr>
    <tr style="height: 70px;">
        <td>&nbsp;&nbsp;Globulus</td>
        <td>:{{$det->globulus}}</td>
    </tr>
</table>