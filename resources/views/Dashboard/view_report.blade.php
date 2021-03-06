<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rathna|Browse Reports</title>
    <!-- Tell the browser to be responsive to screen width -->
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{asset('/plugins/datepicker/datepicker3.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('/plugins/iCheck/all.css')}}">

    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('/dist/css/skins/_all-skins.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include("Templates.Components.nav_bar")
@include("Templates.Components.sidebar")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissable" style="margin-bottom: 3px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <ul>
                        <li>{{ $error }}</li>
                    </ul>
                </div>
            @endforeach
        @endif
        @if (!empty($message))
            <div class="alert alert-danger alert-dismissable" style="margin-bottom: 3px;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <ul>
                    <li>{{ $message }}</li>
                </ul>
            </div>
    @endif
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div clas="row" style="height: 40px">
            <div class="col-md-1">
                <!-- Indicates a successful or positive action -->
                <form action="{{url('dashboard/reports/print')}}" target="_blank" method="get">{!! csrf_field() !!}<input hidden="true" value="{{$report->id}}" name="id"><button type="submit" class="btn btn-success">Print</button></form>
            </div>
            <div class="col-md-1">
                <form action="{{url('dashboard/reports/edit')}}" method="get">{!! csrf_field() !!}<input hidden="true" value="{{$report->id}}" name="id"><input hidden="true" value="{{$report->type}}" name="type"><button type="submit" class="btn btn-primary">Edit</button></form>
            </div>
            <div class="col-md-1">
                <form action="{{url('dashboard/reports/delete')}}" method="get">{!! csrf_field() !!}<input hidden="true" value="{{$report->id}}" name="id"><button type="submit" class="btn btn-danger">Delete</button></form>
            </div>

        </div>
        </section>

        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-globe"></i>RATHNA
                        <small class="pull-right">Date: {{$report->getDate()}}</small>
                    </h2>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-12 ">
                    <address>
                        <strong>Patient Name : {{$report->name_front}} {{$report->name}}<br>
                            Age : @if($report->age_years>0){{$report->age_years}} Years @endif @if($report->age_months>0){{$report->age_months}} Months @endif @if($report->age_days>0){{$report->age_days}} Days @endif<br>
                            Sex :{{$report->gender}}<br>
                            Specimen :{{$report->specimen}}</strong>
                    </address>
                </div>
            </div>
            <!-- /.row -->
            <div class="container" style="padding: 30px">
                <h3 align="center">{{$report->getType()}}</h3>
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
                    @elseif($report->type=='12')
                        @include('Dashboard.reports.lipidp')
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
                    @elseif($report->type=='51' | $report->type=='55' | $report->type=='56' | $report->type=='57'| $report->type=='58' | $report->type=='59' | $report->type=='60' | $report->type=='61' | $report->type=='62')
                        @include('Dashboard.reports.misc')
                    @elseif($report->type=='63' | $report->type=='64' | $report->type=='65' | $report->type=='66' )
                        @include('Dashboard.reports.ufr_plus')
                    @elseif($report->type=='66' | $report->type=='67' | $report->type=='69')
                        @include('Dashboard.reports.d_col')
                    @elseif($report->type=='70' | $report->type=='71' | $report->type=='72' | $report->type=='73' | $report->type=='74' | $report->type=='75')
                        @include('Dashboard.reports.d_by')
                    @elseif($report->type=='76')
                        @include('Dashboard.reports.sfa')
                    @endif

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
        <div class="clearfix"></div>
    </div>
    <!-- /.content-wrapper -->
  @include('Templates.Components.footer')
<!-- Modal -->
    <div class="modal fade" id="editReport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">New Report</h4>
                </div>
                <div class="modal-body">
                    <!-- general form elements -->
                    <div>
                        <!-- /.box-header -->
                        <!-- form start -->

                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/app.min.js')}}"></script>
</body>
</html>