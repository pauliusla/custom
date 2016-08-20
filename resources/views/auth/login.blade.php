@extends('main')

@section('title', '| Login')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open(['data-parsley-validate' => '']) !!}
            
            {{ Form::label('email', 'Email:')}}
            {{ Form::email('email', null, ['class' => 'form-control', 'required' => '']) }}
            
            {{ Form::label('password', "Password:")}}
            {{ Form::password('password', ['class' => 'form-control', 'required' => '', 'minlength' =>'8']) }}
            
            {{ Form::checkbox('remember') }} {{ Form::label('remember', "Remember Me") }}
            
            {{ Form::submit('Login', ['class' => 'btn btn-primary btn-block form-spacing-top']) }}
            
            {!! Form::close() !!}
        </div>
    </div>

@endsection
@section('scripts')

    {!! Html::script('js/parsley.min.js')!!}

@endsection