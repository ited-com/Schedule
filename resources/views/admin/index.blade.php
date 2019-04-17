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
                                    {!! Form::open(['action'=>'Admin\HomeController@store','method'=>'POST']) !!}
                                        <div class="form-group">
                                            {{Form::label('title','Building Name')}}
                                            {{Form::text('name','',['class' => 'form-control','placeholder' =>'Name'])}}
                                        </div>
                                        <div class="form-group">
                                            {{Form::label('total','Total')}}
                                            {{Form::number('number','',['class' => 'form-control','placeholder' =>'Total Room'])}}
                                        </div>
                                        <div class="form-group">
                                            {{Form::label('title','Total Floor')}}
                                            {{Form::number('floor','',['class' => 'form-control','placeholder' =>'Room per floor'])}}
                                        </div>
                                        {{Form::submit('Add',['class' => 'btn btn-primary btn-block'])}}
                                    {!! Form::close() !!}
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
        @if (count($buildings)>0)
            @foreach ($buildings as $buidling)
                <div class="col-lg-3 col-sm-4 col-xs-6">
                    <div class="thumbnail">
                        <a href="/admin/{{$buidling->id}}">
                            <div class="caption">
                                <div class='col-lg-12 well well-add-card'>
                                    <h4>{{$buidling->building_name}}</h4>
                                </div>
                            </div>
                        </a>
                        {!! Form::open(['action'=>['Admin\HomeController@destroy',$buidling->id],'method'=>'POST']) !!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::button('',['class'=>'btn btn-danger glyphicon glyphicon-trash pull-left','type'=>'submit'])}}
                        {!! Form::close() !!}
                        <a class="btn btn-primary glyphicon glyphicon-cog"></a>
                    </div>
                </div>    
            @endforeach
        @else
            <p>No Building</p>
        @endif
        {{-- endforeach --}}
    </div>
</div>
@endsection
{{--  --}}