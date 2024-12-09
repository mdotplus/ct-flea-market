@extends ('layouts.app')

@section ('content')
    <h1>プロフィール設定</h1>
    <form action="{{ route('mypage.update') }}" method="post">
        @csrf
        <div>
            <label for="name">ユーザー名</label>
            <input type="text" name="name" class="name" value="{{ old('name') }}">
            @error ('name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="post_code">郵便番号</label>
            <input type="text" name="post_code" class="post_code" value="{{ old('post_code') }}">
            @error ('post_code')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="address">住所</label>
            <input type="text" name="address" class="address" value="{{ old('address') }}">
            @error ('address')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="building">建物名</label>
            <input type="text" name="building" class="building" value="{{ old('building') }}">
            @error ('building')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">更新する</button>
    </form>
@endsection
