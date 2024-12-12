@extends ('layouts.app')

@section ('content')
    <div class="card">
        <div class="card__contents verify-body">
            <div class="verify-contents">
                <p>ログイン認証メールを送信しました</p>
                <p>60分以内に認証を行ってください</p>
            </div>
            <div class="verify-again">
                <p>メールが届いていませんか？</p>
                <p>もう一度認証メールを送信する場合は<br>こちらをクリック</p>
                <form action="/email/verification-notification" method="post">
                    @csrf
                    <button class="button-resend" type="submit">認証メールを再送信</button>
                </form>
            </div>
        </div>
    </div>
@endsection
