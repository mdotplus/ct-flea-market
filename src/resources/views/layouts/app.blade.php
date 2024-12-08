<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flea-market</title>
</head>

<body>
<header>
    <a href="{{ route('home') }}">
        <img src="{{ asset('images/logo.svg') }}" alt="flea-market">
    </a>
    <input type="text" name="keyword" value="{{ $keyword ?? '' }}">
    <nav>
        <ul>
            @if (Auth::check())
                <li><a href="">ログアウト</a></li>
            @else
                <li><a href="">ログイン</a></li>
            @endif
            <li><a href="">マイページ</a></li>
        </ul>
    </nav>
    <form action="{{ route('items.sell') }}" method="get">
        @csrf
        <button type="submit">出品</button>
    </form>
</header>

<main>
    @yield ('content')
</main>
</body>

</html>
