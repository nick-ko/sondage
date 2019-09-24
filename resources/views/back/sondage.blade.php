@extends('layouts.backend')

@section('content')
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">

                    <li>
                        <a href="{{route('logout')}}">
                            <i class="fa fa-sign-out"></i> Deconnexion
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Resultat Sondage</h2>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>resultat sondage</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                    <tr>
                                        <th>Contact</th>
                                        <th>Age</th>
                                        <th>Enfant</th>
                                        <th>Fonction</th>
                                        <th>Efficacité</th>
                                        <th>Simplicité</th>
                                        <th>Confortabilité</th>
                                        <th>Achat</th>
                                        <th>Preference</th>
                                        <th>Amelioration</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($result as $r)
                                      <tr class="gradeA">
                                        <td>{{$r->telephone}}</td>
                                        <td>{{$r->age}}</td>
                                        <td>{{$r->enfant}} </td>
                                        <td>{{$r->statut}}</td>
                                        <td class="center">{{$r->efficace}}</td>
                                        <td class="center">{{$r->simple}}</td>
                                        <td class="center">{{$r->confortable}}</td>
                                        <td class="center">{{$r->securite}}</td>
                                        <td class="center">{{$r->preference}}</td>
                                        <td>{{$r->modifier}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Contact</th>
                                        <th>Age</th>
                                        <th>Enfant</th>
                                        <th>Fonction</th>
                                        <th>Efficacité</th>
                                        <th>Simplicité</th>
                                        <th>Confortabilité</th>
                                        <th>Achat</th>
                                        <th>Preference</th>
                                        <th>Amelioration</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">

            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2017
            </div>
        </div>

    </div>
@endsection
