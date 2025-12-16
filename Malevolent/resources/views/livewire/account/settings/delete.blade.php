<div class="border border-radius padding-two margin-top">
    <form method="POST" action="{{ route('settings.delete') }}">
        @csrf

        <div class="checkbox font-color font-weight-six-hundred">
            <input name="delete" type="checkbox">
            <label>I accept that my account & data will be deleted</label>
        </div>

        <button type="submit" class="link transition width-100-percent border-none border-radius background-color-six padding-two box-sizing-border-box font-color font-weight-six-hundred font-family margin-top">Delete Account</button>
    </form>
</div>
