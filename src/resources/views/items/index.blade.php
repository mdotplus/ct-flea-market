@extends ('layouts.app')

@section ('content')
    <div>
        <ul class="tabs">
            <li class="tab active" data-target="recommended">おすすめ</li>
            <li class="tab" data-target="mylist">マイリスト</li>
        </ul>

        <div class="tab-content active" id="recommended">
            <div class="item">商品画像<br>商品名</div>
            <div class="item">商品画像<br>商品名</div>
            <div class="item">商品画像<br>商品名</div>
        </div>
        <div class="tab-content" id="mylist">
            <div class="item">商品画像<br>商品名</div>
            <div class="item">商品画像<br>商品名</div>
        </div>
    </div>
@endsection
