@extends ('layouts.app')

@section ('content')
    <div>
        <ul class="tabs">
            <li class="tab__recommend"><a href="{{ route('home') }}">おすすめ</a></li>
            <li class="tab__mylist"><a href="{{ route('home', ['tab' => 'mylist']) }}">マイリスト</a></li>
        </ul>

        @if ($tab === 'recommend')
            <div class="tab-content__recommend">
                @foreach ($items as $item)
                    @if (auth()->check() && auth()->user()->id === $item['item']->user_id)
                        @continue
                    @else
                        <div class="item">
                            @if ($item['is_purchased'])
                                <p>購入済</p>
                            @endif
                            @if ($item['item']->image_url)
                                <img src="{{ $item['item']->image_url }}" alt="商品画像">
                            @else
                                <p>画像なし</p>
                            @endif
                            <p>{{ $item['item']->name }}</p>
                        </div>
                    @endif
                @endforeach
            </div>
        @elseif ($tab === 'mylist')
            <div class="tab-content__mylist">
                @foreach ($items as $item)
                    @if (auth()->check() && in_array($item['item']->id, $likes[auth()->user()->id]))
                        <div class="item">
                            @if ($item['is_purchased'])
                                <p>購入済</p>
                            @endif
                            @if ($item['item']->image_url)
                                <img src="{{ $item['item']->image_url }}" alt="商品画像">
                            @else
                                <p>画像なし</p>
                            @endif
                            <p>{{ $item['item']->name }}</p>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif
    </div>
@endsection
