@extends('layouts.app')

@section('content')
    <a href = "/posts" class="btn btn-primary">Go Back</a>
    <h1>{{$post -> title}}</h1>
    <img src="/storage/cover_images/{{$post->cover_image}}" style="width: 100%;" />
    <div>
        {!!$post -> body!!}
    </div>
    <hr />
    <small>{{$post -> created_at}} by {{$post->user->name}}</small>
    <hr />
    @if(!Auth::guest())
        @if(Auth::user() -> id == $post -> user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary"> Edit </a>

            {!!Form::open(['action' => ['PostsController@destroy', $post -> id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection