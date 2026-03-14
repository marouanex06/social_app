@extends('layouts.app')

@section('content')
    <h2>Posts</h2>
    <a href="/logout">Logout</a>

    {{-- Create Post --}}
    <form method="POST" action="/posts">
        @csrf
        <textarea name="content" placeholder="What's on your mind?" required></textarea><br>
        <button type="submit">Post</button>
    </form>

    <hr>

    {{-- Posts List --}}
    @foreach($posts as $post)
        <div>
            <p><strong>{{ $post->user->name }}</strong></p>
            <p>{{ $post->content }}</p>
            <p>Likes: {{ $post->likes->count() }}</p>

            {{-- Like / Unlike --}}
            @if($post->likes->where('user_id', session('user_id'))->count())
                <form method="POST" action="/posts/{{ $post->id }}/like">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Unlike</button>
                </form>
            @else
                <form method="POST" action="/posts/{{ $post->id }}/like">
                    @csrf
                    <button type="submit">Like</button>
                </form>
            @endif

            {{-- Edit / Delete (only owner) --}}
            @if($post->user_id === session('user_id'))
                <form method="POST" action="/posts/{{ $post->id }}">
                    @csrf
                    @method('PUT')
                    <input type="text" name="content" value="{{ $post->content }}" required>
                    <button type="submit">Update</button>
                </form>

                <form method="POST" action="/posts/{{ $post->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            @endif
        </div>
        <hr>
    @endforeach
@endsection