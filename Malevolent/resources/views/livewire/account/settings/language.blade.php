<div class="border border-radius padding-two">
    <form method="POST" action="{{ route('settings.language') }}">
        @csrf

        <select name="language" id="language" required>
            <option value="english">English</option>
            <option value="french">French</option>
            <option value="swedish">Swedish</option>
        </select>

        <button type="submit" class="link transition width-100-percent border-none border-radius background-color-six padding-two box-sizing-border-box font-color font-weight-six-hundred font-family margin-top">Change Language</button>
    </form>
</div>
