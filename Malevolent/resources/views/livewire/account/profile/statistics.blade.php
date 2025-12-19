<div class="border padding-two box-sizing-border-box border-radius grid grid-one-column grid-gap" wire:poll.visible="poll">
    @foreach(range(1, 5) as $index)
        <div class="padding-seven background-color-six border-radius border">
            <div class="font-color font-weight-six-hundred margin-top-two">
                <img class="position-absolute margin-minus-top" src="{{ Avatar::create('Dec')->setDimension(30)->setFontSize(15)->setChars(1)->toBase64() }}" alt="Dec"/>
                <a class="margin-left margin-top-two">Dec</a>
                <p class="font-color-three font-weight-normal font-size-two margin-bottom">
                    Dec has just started playing on the nuketown server.
                </p>
            </div>
        </div>
    @endforeach
</div>
