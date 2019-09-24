@extends('layouts.backend')

@section('content')

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
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
                        <a href="{{url('/logout')}}">
                            <i class="fa fa-sign-out"></i> Deconnexion
                        </a>
                    </li>
                </ul>

            </nav>
        </div>

        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-md-6">
                    {!! $age->html() !!}
                </div>
                <div class="col-md-6">
                    {!! $dure->html() !!}
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    {!! $flux->html() !!}
                </div>
                <div class="col-md-6">
                    {!! $budget->html() !!}
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    {!! $efficace->html() !!}
                </div>
                <div class="col-md-6">
                    {!! $simple->html() !!}
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    {!! $confortable->html() !!}
                </div>
                <div class="col-md-6">
                    {!! $securite->html() !!}
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    {!! $achat->html() !!}
                </div>
                <div class="col-md-6">
                    {!! $preference->html() !!}
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    {!! $recommandation->html() !!}
                </div>
                <div class="col-md-6">
                    {!! $change->html() !!}
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    {!! $status->html() !!}
                </div>
                <div class="col-md-6">
                    {!! $change->html() !!}
                </div>
            </div>
        </div>
        <div class="footer">
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2018
            </div>
        </div>
    </div>

    {!! Charts::scripts() !!}
    {!! $age->script() !!}
    {!! $dure->script() !!}
    {!! $flux->script() !!}
    {!! $budget->script() !!}
    {!! $efficace->script() !!}
    {!! $simple->script() !!}
    {!! $confortable->script() !!}
    {!! $securite->script() !!}
    {!! $achat->script() !!}
    {!! $preference->script() !!}
    {!! $recommandation->script() !!}
    {!! $change->script() !!}
    {!! $status->script() !!}
@endsection

