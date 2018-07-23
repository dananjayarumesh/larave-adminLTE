<meta name="csrf-token" content="{{ csrf_token() }}">
@include('layouts.alerts')
@extends('adminlte::page')

@section('content')
    <div class="container-fluid">
        <div class="box box-primary">

            <div class="box-header">
                <div class="row">
                    <div class="col-md-12">
                        <h4>
                            My Profile 
                            <div class="pull-right">
                                <!-- <a class="btn btn-info" href="#">Change Password</a> -->
                                <a class="btn btn-primary" href="{{url('dashboard/profile/edit')}}">Edit Profile</a>
                                <!-- <a class="btn btn-default" href="{{url('dashboard/staff')}}">Back</a>  -->
                            </div>
                        </h4>
                    </div>
                </div>
            </div> 
            <div class="box-body im-box-body">
                <!-- <div class="well well-lg"> -->
                    <div class="row">
                        <div class="col-md-2">
                            <div  align="left"> 
                                <img alt="User Pic" 
                                    src="{{ asset('/images/nobody.jpg') }}" 
                                    id="profile-image" class="img-circle img-responsive profile-image" /> 
                            </div>                            
                        </div>
                        <div class="col-md-10">
                            <br>
                            <div  align="left">
                                <p><i class="fa fa-fw fa-user-circle-o"></i> &nbsp;&nbsp; {{ $user->name }}</p>
                                <p><i class="fa fa-fw fa-envelope"></i> &nbsp;&nbsp; {{ $user->email }}</p>
                                <p><i class="fa fa-fw fa-key"></i> &nbsp;&nbsp; <a class="btn btn-info btn-xs" href="{{url('dashboard/profile/psw/change')}}">Change Password</a></p>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </div>

        </div>
    </div>

@stop

<script src="{{asset('js/app.js')}}"></script> 