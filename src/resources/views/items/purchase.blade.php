@extends ('layouts.app')

@section ('content')
    <form action="/create-checkout-session" method="post">
        @csrf
        <img src="{{ asset('images/sample.jpg') }}" alt="商品画像">
        <div class="name">商品名</div>
        <div class="price"><span>¥</span><span>47,000</span></div>

        <div>
            <span>支払方法</span>
            <select name="payment">
                <option selected disabled>選択してください</option>
                <option value="convenience">コンビニ払い</option>
                <option value="card">カード支払い</option>
            </select>
            @error ('payment')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <span>配送先</span>
            <div>
                <span>〒</span>
                <span name="post_code" value="{{ old('post_code') }}">100-0001</span>
            </div>
            <div>
                <span name="address" value="{{ old('address') }}">東京都千代田区千代田1-1</span><br>
                <span name="building" value="{{ old('building') }}">千代田ビル</span>
            </div>
            @error ('payment')
                <div>{{ $message }}</div>
            @enderror
            <a href="">変更する</a>
        </div>

        <table>
            <tr>
                <th>商品代金</th>
                <td>¥47,000</td>
            </tr>
            <tr>
                <th>支払い方法</th>
                <td>コンビニ払い</td>
            </tr>
        </table>

        <button type="submit">購入する</button>
    </form>
@endsection
