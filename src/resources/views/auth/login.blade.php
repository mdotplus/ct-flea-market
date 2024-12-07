@extends ('layouts.app')

@section ('content')
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div>
            <label for="email">ユーザー名/メールアドレス</label>
            <input type="email" name="email" class="email" value="{{ old('email') }}">
            @error ('email')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="password">パスワード</label>
            <input type="password" name="password" class="password">
            @error ('password')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">ログインする</button>
    </form>
    <a href="{{ route('register') }}">会員登録はこちら</a>
@endsection
