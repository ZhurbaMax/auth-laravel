@foreach($items as $item)
        <li>
            <p class="user">{{ $item->user->name}}</p>
            <span>{{ $item->created_at }}</span>
            <div>{{ $item->comment}}</div>
            <form method="POST" id="{{$item->id}}" style="display: none;" action="{{ route('layout.home') }}">
                @csrf
                <div>Ответ:</div>
                <textarea name="comment" class="new-comment"> </textarea>
                <input type="hidden"  name="parent_id" value="{{ $item->id }}">
                <div><input type="submit" class="btn-home" name="submit" value="Написать"></div>
            </form>
            <input type="button" value="Ответить / Отменить" onclick="disp(document.getElementById('{{$item->id}}'))" />
            @if(isset($com[$item->id]))
                <ul class="children">
                    @include('layouts.comment', ['items' => $com[$item->id]])
                </ul>
            @endif
        </li>
@endforeach
