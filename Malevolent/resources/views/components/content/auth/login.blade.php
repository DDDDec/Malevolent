<div>
    <div class="border border-radius padding-two">
        <form method="POST" action="{{ route('auth.login') }}">
            @csrf

            <input type="text" name="name" placeholder="Please insert your username" class="width-100-percent border border-radius background-none padding-two box-sizing-border-box font-color font-weight-six-hundred font-family default-outline">
            <input type="password" name="password" placeholder="Please insert your password" class="width-100-percent border border-radius background-none padding-two box-sizing-border-box margin-top font-color font-weight-six-hundred font-family default-outline">

            <div class="checkbox margin-top font-color font-weight-six-hundred">
                <input id="c1-13" name="remember" type="checkbox">
                <label for="c1-13">Remember Me</label>
            </div>

            <button type="submit" class="link transition width-100-percent border-none border-radius background-color-six padding-two box-sizing-border-box font-color font-weight-six-hundred font-family margin-top">Login</button>
        </form>
    </div>

    <div class="border border-radius padding-two margin-top">
        <a href="/discord/redirect" class="link border-none border-radius padding-two width-100-percent box-sizing-border-box background-color-six transition font-align-center font-size-two font-weight-six-hundred">Login via Discord</a>
    </div>
</div>
