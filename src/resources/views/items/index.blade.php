@extends ('layouts.app')

@section ('content')
    <div>
        <ul class="tabs">
            <li class="tab active" data-target="recommended">おすすめ</li>
            <li class="tab" data-target="mylist">マイリスト</li>
        </ul>

        <div class="tab-content active" id="recommended">
            @foreach ($items as $item)
                @if (auth()->check())
                    @if (auth()->user()->id === $item['item']->user_id)
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
        <div class="tab-content" id="mylist">
            <div class="item">商品画像<br>商品名</div>
            <div class="item">商品画像<br>商品名</div>
        </div>
    </div>
@endsection
