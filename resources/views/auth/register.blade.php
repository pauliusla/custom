@extends('main')

@section('title', '| Register')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    
@endsection

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {!! Form::open(['data-parsley-validate' => '']) !!}
            
            {{ Form::label('vardas', "Vardas:") }}
            {{ Form::text('vardas', null, ['class' => 'form-control', 'required' => '', 'maxlenght' => '255']) }}
            
            {{ Form::label('pavarde', "Pavarde:") }}
            {{ Form::text('pavarde', null, ['class' => 'form-control', 'required' => '', 'maxlenght' => '255']) }}
            
                        <label>Pasirinkti Sali:</label>
                            <div id="prm">
                                @include('partials._countrie')
                        <label>Pasirinkti Miesta:</label>
                                <select id="city" name="miestas" class="form-control" required="">
                                </select>
                            </div>
            {{ Form::label('email', "El Pastas:") }}
            {{ Form::email('email', null, ['class' => 'form-control', 'required' => '', 'maxlenght' => '255']) }}
            
            {{ Form::label('password', "Slaptazodis:") }}
            {{ Form::password('password', ['class' => 'form-control', 'required' => '', 'minlenght' =>'8' , 'maxlenght' => '60']) }}
            
            {{ Form::label('password_confirmation', "Patvirtinti slaptazodi:") }}
            {{ Form::password('password_confirmation', ['class' => 'form-control', 'minlenght' =>'8'  ,'required' => '', 'maxlenght' => '60']) }}
            
            {{ Form::submit('Register', ['class' => 'btn btn-primary btn-block form-spacing-top']) }}
        
        {!! Form::close() !!}
    </div>
</div>

@endsection

@section('scripts')

    {!! Html::script('js/city_state.js')!!}
    {!! Html::script('js/parsley.min.js')!!}

@endsection