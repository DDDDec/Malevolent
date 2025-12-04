<div class="border border-radius padding-two grid grid-four-columns grid-template-areas grid-gap" wire:poll.visible="poll">
    <div style="height: 235px; width: 235px;" class="grid-area-one background-color-six border-radius overflow-hidden">
        <img class="width-100-percent border-radius" src="{{ Avatar::create($user->name)->setShape('square')->setDimension(300)->setFontSize(62)->setChars(3)->toBase64() }}"/>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">Username</div>
        <div class="font-weight-six-hundred font-color">{{ $user->name }}</div>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">Rank</div>
        <div class="font-weight-six-hundred font-color">{{ $user->user_rank }}</div>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">Joined</div>
        <div class="font-weight-six-hundred font-color">{{ $user->format_created_at }}</div>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">GUID</div>
        <div class="font-weight-six-hundred font-color">{{ $user->id }}</div>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">Prestige</div>
        <div class="font-weight-six-hundred font-color">{{ $user->user_prestige }}</div>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">Last Played</div>
        <div class="font-weight-six-hundred font-color">{{ $user->format_created_at }}</div>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">Bank Balance</div>
        <div class="font-weight-six-hundred font-color">£{{ $user->format_money }}</div>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">Level</div>
        <div class="font-weight-six-hundred font-color">{{ $user->format_level }}</div>
    </div>
    <div class="padding-four background-color-six border-radius border">
        <div class="font-size-two font-color-three">Status</div>
        <div class="font-weight-six-hundred font-color">{{ $user->format_banned }}</div>
    </div>
</div>
