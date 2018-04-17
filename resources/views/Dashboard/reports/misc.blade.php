<table class="weight table table-responsive">
    <tr style="height: 70px;background-color: lightgrey;">
        <th style="font-weight: 500;">Description</th>
        <th style="font-weight: 500;">Result</th>
        @if($report->type!='58' | $report->type!='60')
            <th style="font-weight: 500;">Unit</th>
        @endif
        @if($report->type=='57' | $report->type=='59' | $report->type=='61' | $report->type=='62')
            <th style="font-weight: 500;">Reference Range</th>
        @endif
        @if($report->type=='59' | $report->type=='61')
            <th style="font-weight: 500;">Remarks</th>
        @endif
    </tr>
    @if($report->type=='55')
        <tr style="height: 70px;">
            <td>Bleeding Time</td>
            <td>{{$det->bt}}</td>
            <td>minutes</td>
        </tr>
        <tr style="height: 70px;">
            <td>Clotting Time</td>
            <td>{{$det->ct}}</td>
            <td>minutes</td>
        </tr>
    @endif
    @if($report->type=='56')
        <tr style="height: 70px;">
            <td>C - Reactive Protein ( CRP )</td>
            <td>{{$det->crp}}</td>
            <td>mg/L</td>
        </tr>
        <tr style="height: 70px;">
            <td>Reference Range : < 6.0 mg/L</td>
            <td></td>
            <td></td>
        </tr>
    @endif
    @if($report->type=='57')
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
    @if($report->type=='58')
        <tr style="height: 70px;">
            <td>FILARIAL 1gM</td>
            <td>{{$det->fil_m}}</td>
        </tr>
        <tr style="height: 70px;">
            <td>FILARIAL 1gG</td>
            <td>{{$det->fil_g}}</td>
        </tr>
    @endif
    @if($report->type=='59')
        <tr style="height: 70px;">
            <td>Glyco - Haemoglobin (HBA1C)</td>
            <td>{{$det->g_hb}}</td>
            <td>%</td>
            <td></td>
            <td>{{$det->g_hb_r}}</td>
        </tr>
        <tr style="height: 70px;">
            <td>EXPECTED VALUES</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="height: 70px;">
            <td><td>Normal Range</td><td>4.6 - 6.2</td></td>
            <td></td>
            <td>%</td>
            <td></td>
            <td></td>
        </tr>
        <tr style="height: 70px;">
            <td>Diabetic,</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="height: 70px;">
            <td><td>Good Control</td><td>5.5 - 6.8</td></td>
            <td></td>
            <td>%</td>
            <td></td>
            <td></td>
        </tr>
        <tr style="height: 70px;">
            <td><td>Fair Control</td><td>6.8 - 7.6</td></td>
            <td></td>
            <td>%</td>
            <td></td>
            <td></td>
        </tr>
        <tr style="height: 70px;">
            <td><td>Poor Control</td><td>Above 7.6</td></td>
            <td></td>
            <td>%</td>
            <td></td>
            <td></td>
        </tr>
    @endif
    @if($report->type=='60')
        <tr style="height: 70px;">
            <td>Pcv</td>
            <td>{{$det->pcv}}%</td>
        </tr>
        <tr style="height: 70px;">
            <td>Platelets</td>
            <td>{{$det->platelets}} /mm<sup>3</sup></td>
        </tr>
    @endif
    @if($report->type=='61')
        <tr style="height: 70px;">
            <td>Prothrombin Time</td>
            <td>{{$det->p_time}}</td>
            <td>Seconds</td>
            <td>11.0 - 15.0</td>
            <td>{{$det->p_time_r}}</td>
        </tr>
        <tr style="height: 70px;">
            <td>Normal Control</td>
            <td>{{$det->n_control}}</td>
            <td>Seconds</td>
            <td>11.0 - 15.0</td>
            <td>{{$det->n_control_r}}</td>
        </tr>
        <tr style="height: 70px;">
            <td>I.N.R</td>
            <td>{{$det->inr}}</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <br>
        <br>
        <tr style="height: 70px;">
            <td>ISI Value</td>
            <td>1.20</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    @endif
    @if($report->type=='62')
        <tr style="height: 70px;">
            <td>Serum Total Protein</td>
            <td>{{$det->stp}}</td>
            <td>mg/dL</td>
            <td>6.20 - 8.20</td>
        </tr>
        <tr style="height: 70px;">
            <td>Albumin</td>
            <td>{{$det->albumin}}</td>
            <td>mg/dL</td>
            <td>3.50 - 5.30</td>
        </tr>
        <tr style="height: 70px;">
            <td>Globulin</td>
            <td>{{$det->globulin}}</td>
            <td>mg/dL</td>
            <td></td>
        </tr>
        <tr style="height: 70px;">
            <td>Albumin / Globulin Ratio</td>
            <td>{{$det->agr}}</td>
            <td></td>
            <td></td>
        </tr>
    @endif
</table>