<div class="border padding-two box-sizing-border-box border-radius" wire:poll.visible>
    <div class="grid grid-four-columns grid-gap">
        @foreach($servers as $server)
            <div class="padding-seven background-color-six border-radius border">
                <div class="font-color font-weight-six-hundred">
                    <i class="fa-solid fa-circle font-color-two padding-six pulse border-radius-two"></i> {{ $server['server_ip'] }}:{{ $server['server_port'] }}
                    <div class="font-color-three font-weight-normal font-size-two padding-nine padding-nine">{{ $server['server_map'] }}</div>
                </div>
                <progress class="border-radius width-100-percent" value="{{ $server['server_players_count'] }}" max="{{ $server['server_players_max'] }}"></progress>
            </div>
        @endforeach
    </div>
</div>

