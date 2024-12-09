@extends ('layouts.app')

@section ('content')
    <h1>商品の出品</h1>
    <form action="{{ route('items.create') }}" method="post">
        @csrf
        <div>
            <label for="image">商品画像</label>
            <input type="file" name="image" class="image">
            @error ('image')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <h2>商品の詳細</h2>
        {{-- オンオフを検出するカテゴリーボタンを全てならべ、複数同時に選択可能にしておく --}}
        <div>
            <span>カテゴリー</span>
            <div>
                <input type="checkbox" name="category[]" value="1">
                <span>ファッション</span>
            </div>
            <div>
                <input type="checkbox" name="category[]" value="1">
                <span>家電</span>
            </div>
            <div>
                <input type="checkbox" name="category[]" value="2">
                <span>インテリア</span>
            </div>
            <div>
                <input type="checkbox" name="category[]" value="3">
                <span>レディース</span>
            </div>
            <div>
                <input type="checkbox" name="category[]" value="3">
                <span>メンズ</span>
            </div>
            <div>
                <input type="checkbox" name="category[]" value="3">
                <span>コスメ</span>
            </div>
            <div>
                <input type="checkbox" name="category[]" value="3">
                <span>本</span>
            </div>
            <div>
                <input type="checkbox" name="category[]" value="3">
                <span>ゲーム</span>
            </div>
            <div>
                <input type="checkbox" name="category[]" value="3">
                <span>スポーツ</span>
            </div>
            <div>
                <input type="checkbox" name="category[]" value="3">
                <span>キッチン</span>
            </div>
            <div>
                <input type="checkbox" name="category[]" value="3">
                <span>ハンドメイド</span>
            </div>
            <div>
                <input type="checkbox" name="category[]" value="3">
                <span>アクセサリー</span>
            </div>
            <div>
                <input type="checkbox" name="category[]" value="3">
                <span>おもちゃ</span>
            </div>
            <div>
                <input type="checkbox" name="category[]" value="4">
                <span>ベビー・キッズ</span>
            </div>
            @error ('category')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <span>商品の状態</span>
            <select name="condition">
                <option selected disabled>選択してください</option>
                <option value="1">良好</option>
                <option value="2">目立った傷や汚れなし</option>
                <option value="3">やや傷や汚れあり</option>
                <option value="4">状態が悪い</option>
            </select>
            @error ('condition')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <h2>商品名と説明</h2>
        <div>
            <label for="name">商品名</label>
            <input type="text" name="name" class="name" value="{{ old('name') }}">
            @error ('name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">商品の説明</label>
            <textarea name="description" class="description">{{ old('description') }}</textarea>
            @error ('description')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="price">販売価格</label>
            <input type="text" name="price" class="price" value="{{ old('price') }}">
            @error ('price')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">出品する</button>
    </form>
@endsection
