@extends('layouts.app')

@section('content')
    <h1>ایجاد پست جدید</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>عنوان:</label>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title')
        <div>{{ $message }}</div>
        @enderror

        <label>متن پست:</label>
        <textarea name="body">{{ old('body') }}</textarea>
        @error('body')
        <div>{{ $message }}</div>
        @enderror

        <button type="submit">ذخیره</button>
    </form>
@endsection
