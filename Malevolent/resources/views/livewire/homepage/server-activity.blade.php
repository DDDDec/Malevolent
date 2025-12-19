<div class="border padding-two box-sizing-border-box border-radius grid grid-one-column grid-gap margin-top" wire:poll.visible="poll">
    @foreach($serverActions as $action)
        <div class="padding-seven background-color-six border-radius border {{ in_array($action['id'], $newActionIds) ? 'activity-slide-in' : '' }}" wire:key="server-activity-{{ $action['id'] }}">
            <div class="font-color font-weight-six-hundred margin-top-two">
                <img class="position-absolute margin-minus-top" src="{{ Avatar::create($action['server_map'])->setDimension(30)->setFontSize(15)->setChars(1)->toBase64() }}"/>
                <a class="margin-left margin-top-two">{{ $action['server_map'] }}</a>
                <p class="font-color-three font-weight-normal font-size-two margin-bottom">
                    {{ $action['server_action'] }}
                </p>
            </div>
        </div>
    @endforeach
</div>
