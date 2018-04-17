<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rathna Medical Laboratory </title>
    <!-- Tell the browser to be responsive to screen width -->
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('/dist/css/skins/_all-skins.min.css')}}">
    <style>
        h1 {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 24px;
            font-style: normal;
            font-variant: normal;
            font-weight: 500;
            line-height: 26.4px;
        }
        h3 {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 18px;
            font-style: normal;
            font-variant: normal;
            font-weight: 500;
            line-height: 15.4px;
        }
        p {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 14px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 20px;
        }
        blockquote {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 21px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 30px;
        }
        pre {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 13px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 18.5714px;
        }
        table{
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 14px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 20px;
        }
        .up-date{
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 20px;
        }
        .address{
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-style: normal;
            font-variant: normal;
            line-height: 2;
        }
        .weight{
            font-weight: 700;
        }
        .invoice-font{
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-style: normal;
            font-variant: normal;
            line-height: 2;
        }
        .table-reduce {
            padding: 5px !important;
        }
    </style>
</head>
<body onload="window.print();">
<div class="wrapper" >
    <!-- Main content -->
    <section class="invoice" >
        <!-- title row -->
        <div style="margin-top: 32%"></div>
        {{--<div class="row">--}}
            {{--<div class="col-xs-12">--}}
                {{--<h2 class="page-header" style="font-weight: 500;">--}}
                    {{--<i class="fa fa-globe"></i>RATHNA--}}
                    {{--<small class="pull-right">Date: {{$report->getDate()}}</small>--}}
                {{--</h2>--}}
            {{--</div>--}}
            {{--<!-- /.col -->--}}
        {{--</div>--}}
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-12 ">
                <div class="pull-right up-date" style="margin-right: 249px"><strong>Date: {{$report->getDate()}}</strong></div>
                <address class="address"> <strong>
                    Patient Name : {{$report->name_front}} {{$report->name}}<br>
                    Age : @if($report->age_years>0){{$report->age_years}} Years @endif @if($report->age_months>0){{$report->age_months}} Months @endif @if($report->age_days>0){{$report->age_days}} Days @endif<br>
                    Gender :{{$report->gender}}<br>
                    Speciemn :{{$report->specimen}}
                    </strong>
                </address>
            </div>
        </div>
        <!-- /.row -->
        <div class="container" style="@if($report->type=='10' || $report->type=='7') padding: 10px @else padding: 30px @endif ;margin-top: -50px">
            <h3 align="center" style="margin-right: 256px">{{$report->getType()}}</h3>
        </div>
        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                @if($report->type=='1'|$report->type=='2'|$report->type=='3')
                    @include('Dashboard.reports.bsst')
                @elseif($report->type=='4'|$report->type=='5'|$report->type=='6')
                    @include('Dashboard.reports.fbs')
                @elseif($report->type=='7')
                    @include('Dashboard.reports.ufr')
                @elseif($report->type=='8')
                    @include('Dashboard.reports.sfr')
                @elseif($report->type=='9'|$report->type=='10')
                    @include('Dashboard.reports.hcg')
                @elseif($report->type=='11')
                    @include('Dashboard.reports.blood_group')
                @elseif($report->type=="12")
                    @include("Dashboard.reports.lipidp")
                @elseif($report->type=='13'|$report->type=='14'|$report->type=='15')
                    @include('Dashboard.reports.s_creatinine')
                @elseif($report->type=='16'|$report->type=='17'|$report->type=='18'|$report->type=='19')
                    @include('Dashboard.reports.glucose_concentration')
                @elseif($report->type=='20'|$report->type=='21'|$report->type=='22'|$report->type=='23')
                    @include('Dashboard.reports.ppbs')
                @elseif($report->type=='24')
                    @include('Dashboard.reports.u_culture')
                @elseif($report->type=='25' | $report->type=='26' | $report->type=='27' | $report->type=='28' | $report->type=='29' | $report->type=='30' | $report->type=='31' | $report->type=='32' | $report->type=='33' | $report->type=='34' | $report->type=='35' | $report->type=='36' | $report->type=='37')
                    @include('Dashboard.reports.serum')
                @elseif($report->type=='38' | $report->type=='39' | $report->type=='40' | $report->type=='41' | $report->type=='42' | $report->type=='43' | $report->type=='44' | $report->type=='45' | $report->type=='46' | $report->type=='47' | $report->type=='48' | $report->type=='49' | $report->type=='50')
                    @include('Dashboard.reports.esr')
                @elseif($report->type=='51' | $report->type=='52' | $report->type=='53' | $report->type=='54')
                    @include('Dashboard.reports.hb')
                @endif
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
