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
                            Change Password
                            <div class="pull-right">
                                <a class="btn btn-default" href="{{url('dashboard/profile')}}">Back</a>
                            </div>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="box-body im-box-body">
                <!-- <div class="well well-lg"> -->
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::model($user, [
                                'method' => 'PATCH',
                                'url' => ['dashboard/profile/psw/change'],
                                'class' => 'form-profile-password-change',
                                'files' => true
                            ]) !!}

                                <div class="row">
                                    <div class="form-group col-md-4 {{ $errors->has('old_password') ? 'has-error' : ''}}">
                                        {!!  Html::decode(Form::label('old_password', 'Current Password <span class="req_star">*</span>', ['class' => 'control-label col-md-12']) ) !!}
                                        <div class="col-md-12">
                                            {!! Form::password('old_password', ['class' => 'form-control'] ) !!}
                                            {!! $errors->first('old_password', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4 {{ $errors->has('new_password') ? 'has-error' : ''}}">
                                        {!!  Html::decode(Form::label('new_password', 'New Password <span class="req_star">*</span>', ['class' => 'control-label col-md-12']) ) !!}
                                        <div class="col-md-12">
                                            {!! Form::password('new_password', ['class' => 'form-control'] ) !!}
                                            {!! $errors->first('new_password', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 {{ $errors->has('new_password_confirmation') ? 'has-error' : ''}}">
                                        {!!  Html::decode(Form::label('new_password_confirmation', 'Confirm Password <span class="req_star">*</span>', ['class' => 'control-label col-md-12']) ) !!}
                                        <div class="col-md-12">
                                            {!! Form::password('new_password_confirmation', ['class' => 'form-control'] )!!}
                                            {!! $errors->first('new_password_confirmation', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <div class="col-md-12">
                                            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                                        </div>
                                    </div>
                                </div>

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


