@extends('main')
@section('title', '| User Posts')
@section('content')

@foreach($posts as $post)
@if (Auth::user()->id == $post->user_id)
{{$post->title}}
@endif
@endforeach
@endsection