<div class="border padding-two box-sizing-border-box border-radius margin-top" wire:poll.visible="poll">
    <div class="grid grid-four-columns grid-gap">
        @foreach($achievements as $achievement)
            @php
                $claimed = $userAchievements->contains($achievement['id']);
                $userStat = $user->getStatistic($achievement['server_achievement_statistic']);
                $max = $achievement['server_achievement_statistic_amount'];
            @endphp
            <div class="padding-seven background-color-six border-radius border">
                <div class="font-color font-weight-six-hundred">
                    {{ $achievement['server_achievement_title'] }}
                    <div class="font-color-three font-weight-normal font-size-two padding-nine padding-nine">
                        {{ $achievement['server_achievement_description'] }}
                    </div>
                </div>
                @if(Auth()->User()->name == $user->name)
                    @if($claimed)
                        <button class="border-radius-three width-100-percent background-color-five border-none font-color font-weight-six-hundred padding-twelve" disabled>
                            Claimed
                        </button>
                    @elseif($userStat >= $max)
                        <button wire:click="claimAchievement({{ $achievement['id'] }})" class="border-radius-three width-100-percent background-color-five border-none font-color font-weight-six-hundred padding-twelve">
                            Claim
                        </button>
                    @else
                        <progress class="border-radius width-100-percent" value="{{ $userStat }}" max="{{ $max }}"></progress>
                    @endif
                @else
                    @if($userStat >= $max)
                        <button class="border-radius-three width-100-percent background-color-five border-none font-color font-weight-six-hundred padding-twelve">
                            Completed
                        </button>
                    @else
                        <progress class="border-radius width-100-percent" value="{{ $userStat }}" max="{{ $max }}"></progress>
                    @endif
                @endif
            </div>
        @endforeach
    </div>
</div>
