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
<pre>
    </pre>
<div class="comments_wrap2">
    <h2>Комментарии:</h2>
        <ul>
            @foreach($com as $k => $comments)
                @if($k)
                    @break
                @endif
                @include('layouts.comment', ['items' => $comments])
            @endforeach

        </ul>
</div>
@endsection


