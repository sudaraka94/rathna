<table class="weight table table-responsive">
    <tr style="height: 70px;background-color: lightgrey;">
        <th style="font-weight: 500;">Description</th>
        <th style="font-weight: 500;">Result</th>
        @if($report->type=='25' | $report->type=='27' | $report->type=='29'| $report->type=='30'| $report->type=='31' | $report->type=='32' | $report->type=='33' | $report->type=='35' | $report->type=='37' )
            <th style="font-weight: 500;">Unit</th>
        @endif
        @if($report->type=='27'| $report->type=='30'| $report->type=='31' | $report->type=='32' | $report->type=='33' | $report->type=='35' | $report->type=='37')
        <th style="font-weight: 500;">Reference Range</th>
        @endif
        @if($report->type=='27'| $report->type=='30'| $report->type=='31' | $report->type=='32' | $report->type=='33' | $report->type=='35' | $report->type=='37')
        <th style="font-weight: 500;">Remarks</th>
        @endif
    </tr>

    @if($report->type=='25')
        <tr style="height: 70px;">
            <td>E.S.R 1<sup>st</sup> hr</td>
            <td>{{$det->esr}}</td>
            <td>mm</td>
        </tr>
    @endif
    @if($report->type=='26')
        <tr style="height: 70px;">
            <td>HIV 1 & 2 ANTIBODIES</td>
            <td>{{$det->hiv}}</td>
        </tr>
    @endif
    @if($report->type=='27')
        <tr style="height: 70px;">
            <td>Ionized Calcium</td>
            <td>{{$det->ion_r}}</td>
            <td>mmol/L</td>
            <td>1.10 - 1.35</td>
            <td>{{$det->ion_remarks}}</td>
        </tr>
    @endif
    @if($report->type=='28')
        <tr style="height: 70px;">
            <td> Malaria Parasites</td>
            <td>{{$det->malaria}}</td>
        </tr>
    @endif
    @if($report->type=='29')
        <tr style="height: 70px;">
            <td>Platelets</td>
            <td>{{$det->platelets}}</td>
        </tr>
    @endif
    @if($report->type=='30')
        <tr style="height: 70px;">
            <td>Serum Amylase</td>
            <td>{{$det->s_amylase}}</td>
            <td>U /L at 37 </td>
            <td>25 - 125</td>
            <td>{{$det->amy_remarks}}</td>
        </tr>
    @endif
    @if($report->type=='31')
        <tr style="height: 70px;">
            <td>Serum Bilirubin</td>
            <td>{{$det->s_bilirubin}}</td>
            <td>mg / dl</td>
            <td>0.3 - 1.9</td>
            <td>{{$det->bil_remarks}}</td>
        </tr>
    @endif
    @if($report->type=='32')
        <tr style="height: 70px;">
            <td>Serum Calcium</td>
            <td>{{$det->s_calcium}}</td>
            <td>mg / dl</td>
            <td>8.1 - 10.4</td>
            <td>{{$det->cal_remarks}}</td>
        </tr>
    @endif
    @if($report->type=='33')
        <tr style="height: 70px;">
            <td>Serum Gamma G.T</td>
            <td>{{$det->s_gamma}}</td>
            <td> U/L</td>
            <td>12.0 - 64.0</td>
            <td>{{$det->gam_remarks}}</td>
        </tr>
    @endif
    @if($report->type=='34')
        <tr style="height: 70px;">
            <td>TROPONIN I</td>
            <td>{{$det->troponin}}</td>
        </tr>
    @endif
    @if($report->type=='35')
        <tr style="height: 70px;">
            <td>Urine Microalbumin</td>
            <td>{{$det->u_micro}}</td>
            <td>mg/L</td>
            <td>< 30</td>
            <td>{{$det->micro_remarks}}</td>
        </tr>
    @endif
    @if($report->type=='36')
        <tr style="height: 70px;">
            <td>V.D.R.L</td>
            <td>{{$det->vdrl}}</td>
        </tr>
    @endif
    @if($report->type=='37')
        <tr style="height: 70px;">
            <td>Serum Potassium</td>
            <td>{{$det->s_potassium}}</td>
            <td>mmol / l</td>
            <td>3.50 - 5.30</td>
            <td>{{$det->pot_remarks}}</td>
        </tr>
    @endif

</table>