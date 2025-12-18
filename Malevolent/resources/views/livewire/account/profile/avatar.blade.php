<div class="border border-radius padding-two grid grid-four-columns grid-template-areas grid-gap" wire:poll.visible="poll">
    <div style="height: 235px; width: 235px;" class="grid-area-one background-color-six border-radius overflow-hidden">
        <img class="width-100-percent border-radius" src="{{ Avatar::create($user->name)->setShape('square')->setDimension(300)->setFontSize(62)->setChars(3)->toBase64() }}"/>
    </div>
    @foreach($avatar as $key => $data)
        <div class="padding-four background-color-six border-radius border">
            <div class="font-size-two font-color-three">{{ $key }}</div>
            <div class="font-weight-six-hundred font-color">{{ $data }}</div>
        </div>
    @endforeach
</div>
