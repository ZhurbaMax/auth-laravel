@extends('layouts.app')

@section('content')
<div id="comments-header">
    <h1>Страница Комментариев</h1>
</div>
@if(Auth::check())
    <div id="comments-form">
        <h3>Пожалуйста оставте свой коментарий</h3>
        <form method="POST" action="{{ route('layout.home') }}">
            @csrf
            <div>
                <label>Оставте коментарий</label>
                <div>
                    <textarea name="comment" class="new-comment"> </textarea>
                </div>
            </div>
            <div>
                <br>
                <input type="submit" class="btn-home" name="submit" value="Написать">
            </div>
        </form>
    </div>
@endif
<div class="comments_wrap2">
    <h2>Комментарии:</h2>
    @foreach($comments as $comment)
        <ul>
            <li>
                <p class="user">{{ $comment->user->name}}</p>
                <span>{{ $comment->created_at }}</span>
                <div>{{ $comment->comment}}</div>
                <input type="submit" name="submit" value="Ответить">
            </li>
        </ul>
    @endforeach

</div>
@endsection
