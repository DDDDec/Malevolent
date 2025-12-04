<div>
    <div class="border border-radius padding-two">
        <form method="POST" action="{{ route('auth.login') }}">
            @csrf

            <input type="email" name="email" placeholder="Please insert your email" class="width-100-percent border border-radius background-none padding-two box-sizing-border-box font-color font-weight-six-hundred font-family default-outline">

            <div class="checkbox margin-top font-color font-weight-six-hundred">
                <input name="remember" type="checkbox">
                <label>Terms & Conditions</label>
            </div>

            <button type="submit" class="link transition width-100-percent border-none border-radius background-color-six padding-two box-sizing-border-box font-color font-weight-six-hundred font-family margin-top">Submit</button>
        </form>
    </div>
</div>
