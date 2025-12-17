<div class="border padding-two border-radius margin-top" wire:poll.visible="poll">
    <div class="grid grid-four-columns grid-gap">
        @foreach($recentlyPlayed as $recent)
            <div class="padding-two background-color-six border-radius border">
                <a>
                    <img class="position-absolute margin-minus-top-four margin-minus-left" src="{{ Avatar::create('Dec')->setDimension(60)->setFontSize(18)->setChars(3)->toBase64() }}"/>
                    <div class="margin-left-two font-color font-weight-six-hundred">
                        {{ $recent->name }}
                        <div class=" font-color-three font-weight-normal font-size-two">
                            {{ $recent->user_online ? 'Online' : 'Offline' }}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
