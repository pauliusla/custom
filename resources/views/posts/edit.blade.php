@extends('main')

@section('title', '| Edit User data')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    
@endsection


@section('content')

    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT'])!!}
        <div class="col-md-8">
            {{ Form::label('title', 'Title:')}}
            {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}
            {{ Form::label('body', "Body:", ['class' => 'form-spacing-top'])}}
            {{ Form::textarea('body', null, ['class' => 'form-control'])}}
        </div>
            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt>Last Updated At:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
                    </dl>
                    <hr />
                    <div class="row">
                        <div class="col-sm-6">
                        {!!Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => "btn btn-danger btn-block"))!!}
                        </div>
                        <div class="col-sm-6">
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{ Html::linkRoute('posts.index', '<< See All Posts', [], ['class' => 'btn btn-default btn-block btn-h1-spacing'])}}
                        </div>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>

@stop

@section('scripts')

    {!! Html::script('js/parsley.min.js')!!}

@endsection