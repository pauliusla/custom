@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    
@endsection

@section('content')

<div class="row">
            <div class="col-md-8">
                <div class="post">
                    @foreach($posts as $post)
                    <h3>{{ $post->title }}</h3>
                    <p>{{ substr($post->body, 0, 300)}} {{strlen($post->body) > 300 ? "..." : ""}}</p>
                    <a href="{{ url('posts/'.$post->id) }}" class="btn btn-primary">Read more</a>
                    <hr />
                    @endforeach
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                {!! $posts->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.min.js')!!}

@endsection