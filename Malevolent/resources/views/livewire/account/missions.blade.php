<div class="border padding-two box-sizing-border-box border-radius margin-top" wire:poll.visible="poll">
    <div class="grid grid-four-columns grid-gap">
        @foreach($missions as $mission)
            <div class="padding-seven background-color-six border-radius border">
                <div class="font-color font-weight-six-hundred">
                    {{ $mission['mission_name'] }}
                    <div class="font-color-three font-weight-normal font-size-two padding-nine padding-nine">{{ $mission['mission_description'] }}</div>
                </div>
                <progress class="border-radius width-100-percent" value="1" max="{{ $mission['mission_amount'] }}"></progress>
            </div>
        @endforeach
    </div>
</div>
