<div class="border padding-two box-sizing-border-box border-radius grid grid-one-column grid-gap margin-top" wire:poll.visible="poll">
    @foreach($userActivity as $activity)
        <div class="padding-seven background-color-six border-radius border">
            <div class="font-color font-weight-six-hundred margin-top-two">
                <img class="position-absolute margin-minus-top" src="{{ Avatar::create($user['name'])->setDimension(30)->setFontSize(15)->setChars(1)->toBase64() }}"/>
                <a class="margin-left margin-top-two">{{ $activity['user_name'] }}</a>
                <p class="font-color-three font-weight-normal font-size-two margin-bottom">{{ $activity['user_action'] }}</p>
            </div>
        </div>
    @endforeach
</div>
