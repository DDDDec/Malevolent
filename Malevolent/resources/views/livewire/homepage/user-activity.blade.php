<div class="border padding-two box-sizing-border-box border-radius grid grid-one-column grid-gap" wire:poll.visible="poll">
    @foreach($userActions as $action)
        <div class="padding-seven background-color-six border-radius border {{ in_array($action['id'], $newActionIds) ? 'activity-slide-in' : '' }}" wire:key="activity-{{ $action['id'] }}">
            <div class="font-color font-weight-six-hundred margin-top-two">
                <img class="position-absolute margin-minus-top"
                     src="{{ Avatar::create($action['user_name'])->setDimension(30)->setFontSize(15)->setChars(1)->toBase64() }}"/>
                <a class="margin-left margin-top-two">{{ $action['user_name']}}</a>
                <p class="font-color-three font-weight-normal font-size-two margin-bottom">
                    {{ $action['user_action']}}
                </p>
            </div>
        </div>
    @endforeach
</div>
