<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('adminlte::page')
@section('content_header')
    <!-- <div class="container">
        <h3>Suppliers</h3>
    </div> -->
@stop

@section('content')
    <div class="container-fluid">
        <div class="box box-primary">

            <div class="box-header">
                <div class="row">
                    <div class="col-md-12">
                        <h4>
                            User Details
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
                            <table class="table table-striped mb-0">
                                <tr>
                                    <th scope="row">Name</th>
                                    <td>{{$user->name}}</td>
                                    
                                    <th scope="row">Email</th>
                                    <td>{{$user->email}}</td>
                                </tr>
                                
                                <tr>
                                    <th scope="row">User Role</th>
                                    <td colspan="3">{{isset($role->name)?$role->name:'-'}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <!-- </div> -->
            </div>

        </div>
    </div>

@stop

<script src="{{asset('js/app.js')}}"></script>