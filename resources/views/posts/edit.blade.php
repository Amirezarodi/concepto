@extends('layouts.app')

@section('content')
    <h1>ویرایش پست</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>عنوان:</label>
        <input type="text" name="title" value="{{ old('title', $post->title) }}">
        @error('title')
        <div>{{ $message }}</div>
        @enderror

        <label>متن پست:</label>
        <textarea name="body">{{ old('body', $post->body) }}</textarea>
        @error('body')
        <div>{{ $message }}</div>
        @enderror

        <button type="submit">بروزرسانی</button>
    </form>
@endsection
