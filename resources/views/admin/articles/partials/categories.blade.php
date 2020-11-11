@foreach($categories as $catogory)

    <option value="{{ $catogory->id ?? "" }}"
        @isset($article->id)
            @foreach ($article->catogories as $catogory_article)
                @if ($catogory->id == $catogory_article->id)
                    selected="selected"
                @endif
            @endforeach
        @endisset
    >
    {{ $catogory->title ?? "" }}
    </option>

@endforeach
