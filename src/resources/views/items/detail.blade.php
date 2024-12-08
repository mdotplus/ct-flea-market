@extends ('layouts.app')

@section ('content')
    <div class="flex-left">
        <img src="{{ asset('images/sample.jpg') }}" alt="商品画像">
    </div>
    <div class="flex-right">
        <div class="name">商品名がここに入る</div>
        <div class="brand">ブランド名</div>
        <div class="price"><span>¥</span><span>47,000</span><span>(税込)</span></div>
        <div class="icon-group">
            <div class="icon-group__like">
                <img src="{{ asset('images/star.svg') }}" alt="星のマーク">
                <span>3</span>
            </div>
            <div class="icon-group__comment">
                <img src="{{ asset('images/comment.svg') }}" alt="コメントのマーク">
                <span>1</span>
            </div>
        </div>
        <button type="submit">購入手続きへ</button>

        <div class="description">
            <span>商品説明<span>
            商品の説明が入ります。
        </div>
        <div class="info">
            <span>商品の情報</span>
            <div class="category">
                <span>カテゴリー</span>
                レディース
            </div>
            <div class="status">
                <span>商品の状態</span>
                良好
            </div>
        </div>

        <div class="comment-list">
            <span>コメント(1)</span>
            <div class="comment-list__items">
                <img class="comment-list__itmes--profile" src="{{ asset('images/profile.jpg') }}" alt="アイコン画像">
                <div class="comment-list__itmes--user">ユーザー名</div>
                <div class="comment-list__itmes--comment">こちらにコメントが入ります。</div>
            </div>
        </div>
        <div class="comment-form">
            <span>商品へのコメント</span>
            <form action="">
                <textarea type="text" name="comment"></textarea>
                <button type="submit">コメントを送信する</button>
            </form>
        </div>
    </div>
@endsection
