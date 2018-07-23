<meta name="csrf-token" content="{{ csrf_token() }}">
<style type="text/css">

</style>

@include('layouts.alerts')
@extends('adminlte::page')

@section('content')
    <div class="container-fluid">
        <div class="box box-primary">
            <div class="box-header">
                <div class="row">
                    <div class="col-md-12">
                        <h4>
                            Add New User
                            <div class="pull-right">
                                <a class="btn btn-default" href="{{url('dashboard/staff')}}">Back</a>
                            </div>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="box-body im-box-body">
                <!-- <div class="well well-lg"> -->
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::open(['url' => '/dashboard/staff', 'class' => 'form-users-create', 'files' => true]) !!}
                            @include ('users.form')
                            {!! Form::close() !!}
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
@stop

<script src="{{asset('js/app.js')}}"></script>
<script>

</script>


