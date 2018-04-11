<header class="main-header">
    <!-- Logo -->
    <a href="{{url('dashboard')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>R</b>L</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Rathna</b>LAB</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">--}}
                        <span class="hidden-xs">{{$user->getName()}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header" style="height: 88px;">
                            {{--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">--}}

                            <p>
                                {{$user->getName()}} - System Admin
                                {{--<small>Member since Nov. 2012</small>--}}
                            </p>
                        </li>
                        <!-- Menu Body -->
                        {{--<li class="user-body">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Followers</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Sales</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Friends</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- /.row -->--}}
                        {{--</li>--}}
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            {{--<div class="pull-left">--}}
                                {{--<a href="#" class="btn btn-default btn-flat">Profile</a>--}}
                            {{--</div>--}}
                            <div class="pull-right">
                                <a href="{{url('auth/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
            </ul>
        </div>
    </nav>
</header>