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
                            Edit Profile
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
                                'url' => ['dashboard/profile/edit'],
                                'class' => 'form-profile-edit',
                                'files' => true
                            ]) !!}

                            @include ('users.profile.form', ['submitButtonText' => 'Update'])

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


