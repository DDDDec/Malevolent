<div class="border border-radius padding-two">
    <form method="POST" action="{{ route('auth.register') }}">
        @csrf

        <input type="email" name="email" placeholder="Please insert your email" class="width-100-percent border border-radius background-none padding-two box-sizing-border-box font-color font-weight-six-hundred font-family default-outline">
        <input type="email" name="email_confirmation" placeholder="Please confirm your email" class="width-100-percent border border-radius background-none padding-two box-sizing-border-box font-color font-weight-six-hundred font-family default-outline margin-top">
        <input type="password" name="password" placeholder="Please insert your password" class="width-100-percent border border-radius background-none padding-two box-sizing-border-box font-color font-weight-six-hundred font-family default-outline margin-top">
        <input type="password" name="password_confirmation" placeholder="Please confirm your password" class="width-100-percent border border-radius background-none padding-two box-sizing-border-box font-color font-weight-six-hundred font-family default-outline margin-top">
        <input type="password" name="guid" placeholder="Please insert plutonium guid" class="width-100-percent border border-radius background-none padding-two box-sizing-border-box font-color font-weight-six-hundred font-family default-outline margin-top">

        <div class="checkbox margin-top font-color font-weight-six-hundred">
            <input id="c1-13" name="terms" type="checkbox">
            <label for="c1-13">Terms & Conditions</label>
        </div>

        <button type="submit" class="link transition width-100-percent border-none border-radius background-color-six padding-two box-sizing-border-box font-color font-weight-six-hundred font-family margin-top">Register</button>
    </form>
</div>
