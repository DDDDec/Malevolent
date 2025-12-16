<div class="border padding-two box-sizing-border-box border-radius margin-top grid grid-four-columns grid-gap" wire:poll.visible="poll">
    @foreach($statistics as $label => $value)
        <div class="padding-eight background-color-six border-radius border">
            <div class="flex flex-justify-center font-color-three">
                {{ ucfirst(str_replace('_', ' ', $label)) }}
            </div>
            <div class="flex flex-justify-center font-weight-six-hundred font-color">
                {{ number_format($value) }}
            </div>
        </div>
    @endforeach
</div>
