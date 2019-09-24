<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sondage | Dashboard </title>
    <link href="{{asset('back/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('back/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('back/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('back/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('back/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="{{asset('front/css/font-awesome.css')}}" rel="stylesheet">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="{{URL::to('front/img/favicon.ico')}}" type="image/x-icon" />

</head>

<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="img/profile_small.jpg"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">{{session('admin_name')}}</span>
                            <span class="text-muted text-xs block">Administrateur<b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{route('logout')}}">Deconnexion</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href="{{route('dashboard')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> </a>
                </li>
                <li>
                    <a href="{{route('back-sondage')}}"><i class="fa fa-random"></i> <span class="nav-label">Sondage</span></a>
                </li>
                <li>
                    <a href="{{route('stats')}}"><i class="fa fa-line-chart"></i> <span class="nav-label">Statistique</span></a>
                </li>

            </ul>

        </div>
    </nav>
    @include('includes.validator')
    @yield('content')
</div>

<!-- Mainly scripts -->
<script src="{{asset('back/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('back/js/popper.min.js')}}"></script>
<script src="{{asset('back/js/bootstrap.js')}}"></script>
<!-- jQuery UI -->
<script src="{{asset('back/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('back/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('back/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('back/js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{asset('back/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page-Level Scripts -->
<script>
    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print',
                    customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]

        });

    });

</script>

<!-- Custom and plugin javascript -->
<script src="{{asset('back/js/inspinia.js')}}"></script>
<script src="{{asset('back/js/plugins/pace/pace.min.js')}}"></script>




</body>
</html>


