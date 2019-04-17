@extends('layouts.app')
@section('content')
<div class="container" id="tourpackages-carousel">
    <div class="row">
        <div class="col-lg-9">
            <nav class="navbar navbar-default" id="navbarA">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <p class="navbar-brand" p>Building</p>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false"><i class="glyphicon glyphicon-plus"></i> Add new</a>
                                <div class="dropdown-menu form-login stop-propagation" role="menu">
                                    <form action="">
                                        <div class="form-group">
                                            <label for="buildingName"><i class="glyphicon glyphicon-envelope"></i> Building Name</label>
                                            <input type="text" class="form-control" placeholder="Enter email" />
                                        </div>
                                        <div class="form-group">
                                            <label for="Total Room"><i class="glyphicon glyphicon-lock"></i> Total Room</label>
                                            <input type="number" class="form-control" placeholder="Total Room" />
                                        </div>
                                        <button type="submit" class="btn btn-success btn-block"><i class="glyphicon glyphicon-ok"></i> Submit</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        {{-- foreach --}}
        <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="thumbnail">
                <a href="/">
                    <div class="caption">
                        <div class='col-lg-12 well well-add-card'>
                            <h4>building A</h4>
                        </div>
                    </div>
                </a>
                <a class="btn btn-primary glyphicon glyphicon-cog"></a>
                <a class="btn btn-danger glyphicon glyphicon-trash"></a>
            </div>
        </div>
        {{-- endforeach --}}
    </div>
</div>
@endsection