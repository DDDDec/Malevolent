<div class="border border-radius padding-two grid grid-four-columns grid-template-areas grid-gap">
    <div style="height: 235px; width: 235px;" class="grid-area-one background-color-six border-radius overflow-hidden">
        <img class="width-100-percent border-radius" src="{{ Avatar::create('Dec')->setShape('square')->setDimension(300)->setFontSize(62)->setChars(3)->toBase64() }}"/>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">Username</div>
        <div class="font-weight-six-hundred font-color">{{ Auth()->User()->name }}</div>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">Rank</div>
        <div class="font-weight-six-hundred font-color">{{ Auth()->User()->user_rank }}</div>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">Joined</div>
        <div class="font-weight-six-hundred font-color">{{ \Carbon\Carbon::parse(Auth()->User()->created_at)->diffForHumans() }}</div>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">GUID</div>
        <div class="font-weight-six-hundred font-color">{{ Auth()->User()->id }}</div>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">Prestige</div>
        <div class="font-weight-six-hundred font-color">{{ Auth()->User()->user_prestige }}</div>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">Last Played</div>
        <div class="font-weight-six-hundred font-color">{{ \Carbon\Carbon::parse(Auth()->User()->updated_at)->diffForHumans() }}</div>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">Email</div>
        <div class="font-weight-six-hundred font-color">{{ str_pad(strrchr(Auth()->User()->email, '@'), strlen(Auth()->User()->email), "*", STR_PAD_LEFT) }}</div>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">Level</div>
        <div class="font-weight-six-hundred font-color">{{ number_format(Auth()->User()->user_level) }}</div>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">Status</div>
        <div class="font-weight-six-hundred font-color">{{ Auth()->User()->user_banned ? 'Banned' : 'Unbanned' }}</div>
    </div>
</div>
