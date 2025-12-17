<div class="border padding-two border-radius" wire:poll.visible="poll">
    <form>
        <input wire:model.debounce.300ms="search" type="text" placeholder="Please type a players username" class="width-100-percent border border-radius background-none padding-two box-sizing-border-box font-color font-weight-six-hundred font-family default-outline">
    </form>

    <div class="grid grid-four-columns grid-gap margin-top">
        @foreach($players as $player)
            <div class="padding-two background-color-six border-radius border">
                <a>
                    <img class="position-absolute margin-minus-top-four margin-minus-left" src="{{ Avatar::create($player["name"])->setDimension(60)->setFontSize(18)->setChars(3)->toBase64() }}"/>
                    <div class="margin-left-two font-color font-weight-six-hundred">
                        {{ $player["name"] }}
                        <div class=" font-color-three font-weight-normal font-size-two">
                            {{ $player["user_online"] ? 'Online' : 'Offline' }}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
