@extends ('layouts.app')

@section ('content')
    <img src="" alt="プロフィール画像">
    <div class="name">ユーザー名</div>
    <form action="{{ route('mypage.edit', ['user_id' => 2]) }}" method="get">
        @csrf
        <button type="submit">プロフィールを編集</button>
    </form>

    <div>
        <ul class="tabs">
            <li class="tab active" data-target="recommended">出品した商品</li>
            <li class="tab" data-target="mylist">購入した商品</li>
        </ul>

        <div class="tab-content active" id="sell">
            <div class="item">商品画像<br>商品名</div>
            <div class="item">商品画像<br>商品名</div>
            <div class="item">商品画像<br>商品名</div>
        </div>
        <div class="tab-content" id="purchase">
            <div class="item">商品画像<br>商品名</div>
            <div class="item">商品画像<br>商品名</div>
        </div>
    </div>
@endsection
