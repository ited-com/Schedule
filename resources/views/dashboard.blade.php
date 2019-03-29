@extends('layouts.app')
@section('content')
   
    <div class="container" id="tourpackages-carousel">
        <div class="row">
<div class="col-lg-9">               
  <nav class="navbar navbar-default" id="navbarA">
    <div class="container-fluid">
      <div class="navbar-header">
      <p class="navbar-brand"p>Building</p></div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false"><i class="glyphicon glyphicon-plus"></i> Add new</a>
            <div class="dropdown-menu form-login stop-propagation" role="menu">
              <div class="form-group">
              <label for="exampleInputEmail1"><i class="glyphicon glyphicon-envelope"></i> Email address</label> 
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" /></div>
              <div class="form-group">
              <label for="exampleInputPassword1"><i class="glyphicon glyphicon-lock"></i> Password</label> 
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" /></div>
              <button type="submit" class="btn btn-success btn-block"><i class="glyphicon glyphicon-ok"></i> Submit</button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

           </div>
    <div class="row">
        <div class="col-xs-8 col-sm-3 col-md-3 col-lg-3">
            <div class="thumbnail">
                <div class="caption">
                    <div class='col-lg-12 well well-add-card'>
                        <h4>building A</h4>
                    </div>
                    <button type="button" class="btn btn-primary glyphicon glyphicon-cog"></button>
                    <button type="button" class="btn btn-danger glyphicon glyphicon-trash"></button>
                </div>
            </div>
        </div>
        <div class="col-xs-8 col-sm-3 col-md-3 col-lg-3">
            <div class="thumbnail">
                <div class="caption">
                    <div class='col-lg-12 well well-add-card'>
                        <h4>building A</h4>
                    </div>
                    <button type="button" class="btn btn-primary glyphicon glyphicon-cog"></button>
                    <button type="button" class="btn btn-danger glyphicon glyphicon-trash"></button>
                </div>
            </div>
        </div>
        <div class="col-xs-8 col-sm-3 col-md-3 col-lg-3">
            <div class="thumbnail">
                <div class="caption">
                    <div class='col-lg-12 well well-add-card'>
                        <h4>building A</h4>
                    </div>
                    <button type="button" class="btn btn-primary glyphicon glyphicon-cog"></button>
                    <button type="button" class="btn btn-danger glyphicon glyphicon-trash"></button>
                </div>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-xs-8 col-sm-3 col-md-3 col-lg-3">
            <div class="thumbnail">
                <div class="caption">
                    <div class='col-lg-12 well well-add-card'>
                        <h4>building A</h4>
                    </div>
                    <button type="button" class="btn btn-primary glyphicon glyphicon-cog"></button>
                    <button type="button" class="btn btn-danger glyphicon glyphicon-trash"></button>
                </div>
            </div>
        </div>
        <div class="col-xs-8 col-sm-3 col-md-3 col-lg-3">
            <div class="thumbnail">
                <div class="caption">
                    <div class='col-lg-12 well well-add-card'>
                        <h4>building A</h4>
                    </div>
                    <button type="button" class="btn btn-primary glyphicon glyphicon-cog"></button>
                    <button type="button" class="btn btn-danger glyphicon glyphicon-trash"></button>
                </div>
            </div>
        </div>
        <div class="col-xs-8 col-sm-3 col-md-3 col-lg-3">
            <div class="thumbnail">
                <div class="caption">
                    <div class='col-lg-12 well well-add-card'>
                        <h4>building A</h4>
                    </div>
                    <button type="button" class="btn btn-primary glyphicon glyphicon-cog"></button>
                    <button type="button" class="btn btn-danger glyphicon glyphicon-trash"></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End row -->
</div>
<!-- End container -->
@endsection