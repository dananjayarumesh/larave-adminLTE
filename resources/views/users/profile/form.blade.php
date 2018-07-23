<div class="row">
    <div class="form-group col-md-6 {{ $errors->has('name') ? 'has-error' : ''}}">
        {!!  Html::decode(Form::label('name', 'Full Name <span class="req_star">*</span>', ['class' => 'control-label col-md-12']) ) !!}
        <div class="col-md-12">
            {!!  Form::text('name', null , ['class' => 'form-control'] ) !!}
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6 {{ $errors->has('email') ? 'has-error' : ''}}">
        {!! Html::decode(Form::label('email', 'Email <span class="req_star">*</span>', ['class' => 'control-label col-md-12']) ) !!}
        <div class="col-md-12">
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div {{ isset($submitButtonText) ? "style=display:none" : "style=display:block" }} class="form-group col-md-6 {{ $errors->has('password') ? 'has-error' : ''}}">
        {!! Html::decode(Form::label('password', 'Password <span class="req_star">*</span>', ['class' => 'control-label col-md-12']) ) !!}
        <div class="col-md-12">
            {!! Form::text('password', null , ['class' => 'form-control']) !!}
            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-12">
        <div class="col-md-12"> 
            {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Submit', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->