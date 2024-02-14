@extends("frontEndLayout.index")

@section('content')
<div class="EEmail">
<div class="_2233">
    <div>
        <img src="" alt="">
    </div>
    <div class="verify">
        <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't recevice the email, We will gladly send you another.</p>
    </div>
    <div class="_2234 col-12">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <button class="_2235">
                    {{ __('Resend Verification Email') }}
                </button>
            </div>
        </form>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout" >
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</div>
</div>
@endsection
