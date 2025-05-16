@extends('layouts.app')

@section('content')
    <h1>لیست پست‌ها</h1>

    <a href="{{ route('posts.create') }}">ایجاد پست جدید</a>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('posts.edit', $post->id) }}">{{ $post->title }}</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">حذف</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
