@foreach($items as $item)
    <ul>
        <li>
            <p class="user">{{ $item->user->name}}</p>
            <span>{{ $item->created_at }}</span>
            <div>{{ $item->comment}}</div>
            <input type="submit" name="submit" value="Ответить">
            @if(isset($com[$item->id]))
                <ul class="children">
                    @include('layouts.comment', ['items' => $com[$item->id]])
                </ul>
            @endif

        </li>
    </ul>
@endforeach
