@extends('main')

@section('title', '| Edit User data')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    
@endsection


@section('content')

    <div class="row">
        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT', 'data-parsley-validate' => ''])!!}
        <div class="col-md-8">
            {{ Form::label('vardas', "Name:") }}
            {{ Form::text('vardas', null, ['class' => 'form-control', 'required' => '', 'maxlenght' => '255']) }}
            
            {{ Form::label('pavarde', "Surname:") }}
            {{ Form::text('pavarde', null, ['class' => 'form-control', 'required' => '', 'maxlenght' => '255']) }}
            
                        <label>Select Country:</label>
                            <div id="prm">
                                @include('partials._countrie')
                        <label>Select City:</label>
                                <select id="city" name="miestas" class="form-control" required="">
                                </select>
                            </div>
            {{ Form::label('email', "Email:") }}
            {{ Form::email('email', null, ['class' => 'form-control', 'required' => '', 'maxlenght' => '255']) }}
            
            {{ Form::label('old_password', "Old Password:") }}
            {{ Form::password('old_password', ['class' => 'form-control', 'maxlenght' => '60']) }}
            
            {{ Form::label('password', "New password:") }}
            {{ Form::password('password', ['class' => 'form-control', 'maxlenght' => '60']) }}
            
            {{ Form::label('password_confirmation', "Confirm Password:") }}
            {{ Form::password('password_confirmation', ['class' => 'form-control', 'maxlenght' => '60']) }}
        </div>
            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($user->created_at)) }}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt>Last Updated At:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($user->updated_at)) }}</dd>
                    </dl>
                    <hr />
                    <div class="row">
                        <div class="col-sm-6">
                        {!!Html::linkRoute('welcome', 'Cancel', array(), array('class' => "btn btn-danger btn-block"))!!}
                        </div>
                        <div class="col-sm-6">
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>

@stop

@section('scripts')

    {!! Html::script('js/city_state.js')!!}
    {!! Html::script('js/parsley.min.js')!!}

@endsection