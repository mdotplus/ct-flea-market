@extends ('layouts.app')

@section ('content')
    <h1>住所の変更</h1>
    <form action="{{ route('address.update', ['item_id' => 1]) }}" method="post">
        @csrf
        <div>
            <label for="postal_code">郵便番号</label>
            <input type="text" name="postal_code" class="postal_code" value="{{ old('postal_code') }}">
            @error ('postal_code')
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
