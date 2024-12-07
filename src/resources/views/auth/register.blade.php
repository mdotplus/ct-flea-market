@extends ('layouts.app')

@section ('content')
    <h1>会員登録</h1>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div>
            <label for="name">ユーザー名</label>
            <input type="text" name="name" class="name" value="{{ old('name') }}">
            @error ('name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email">メールアドレス</label>
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
        <div>
            <label for="password_confirmation">確認用パスワード</label>
            <input type="password" name="password_confirmation" class="password">
        </div>
        <button type="submit">登録する</button>
    </form>
    <a href="{{ route('login') }}">ログインはこちら</a>
@endsection
