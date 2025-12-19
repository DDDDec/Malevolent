<div wire:poll.visible="poll">
    <div class="border border-radius padding-two">
        <select wire:model.live="selectedStatistic" class="width-100-percent border border-radius background-none padding-two box-sizing-border-box font-color font-weight-six-hundred font-family default-outline" name="map" id="map" required>
            <option class="font-color-two background-color-three" value="server_kills">Kills</option>
            <option class="font-color-two background-color-three" value="server_downs">Downs</option>
            <option class="font-color-two background-color-three" value="server_revives">Revives</option>
            <option class="font-color-two background-color-three" value="server_headshots">Headshots</option>
        </select>
    </div>
    <div class="border padding-two border-radius margin-top">
        @forelse($serverLeaderboards as $index => $leaderboard)
            <div class="padding-seven background-color-six border-radius border {{ !$loop->first ? 'margin-top-three' : '' }}">
                <div class="width-100-percent grid grid-custom">
                    <div class="width-fit-content background-color-five padding-two border-radius display-inline-block font-color font-weight-six-hundred">
                        <i class="fa-solid fa-server"></i>
                    </div>
                    <div class="font-color font-weight-six-hundred margin-top-three">
                        Map
                        <div class="font-weight-normal font-color-three font-size-two">
                            {{ $leaderboard->server_map }}
                        </div>
                    </div>
                    <div class="font-color font-weight-six-hundred margin-top-three">
                        Round
                        <div class="font-weight-normal font-color-three font-size-two">
                            {{ $leaderboard->server_round }}
                        </div>
                    </div>
                    <div class="font-color font-weight-six-hundred margin-top-three">
                        Players Count
                        <div class="font-weight-normal font-color-three font-size-two">
                            {{ $leaderboard->server_player_count }}
                        </div>
                    </div>
                    <div class="font-color font-weight-six-hundred margin-top-three">
                        Players
                        <div class="font-weight-normal font-color-three font-size-two">
                            {{ $leaderboard->server_players }}
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="padding-seven font-color text-center"> No leaderboard data found for this map.</div>
        @endforelse
    </div>
</div>
