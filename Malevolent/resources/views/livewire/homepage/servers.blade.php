<div class="border padding-two box-sizing-border-box border-radius" wire:poll.visible="poll">
    <div class="grid grid-four-columns grid-gap">
        @foreach($servers as $server)
            <div class="padding-seven background-color-six border-radius border">
                <div class="font-color font-weight-six-hundred">
                    <i class="fa-solid fa-circle font-color-two padding-six pulse border-radius-two"></i> {{ $server['server_ip'] }}:{{ $server['server_port'] }}
                    <div class="font-color-three font-weight-normal font-size-two padding-nine padding-nine">{{ $server['server_map'] }}</div>
                </div>
                <div class="server-progress-wrapper" data-server-id="{{ $server['server_ip'] }}:{{ $server['server_port'] }}" data-target="{{ $server['server_players_count'] }}" data-max="{{ $server['server_players_max'] }}">
                    <progress class="border-radius width-100-percent animated-progress" max="{{ $server['server_players_max'] }}"></progress>
                </div>
            </div>
        @endforeach
    </div>
</div>

@script
<script>
    const serverValues = {};
    const activeAnimations = {};

    function easeOutCubic(t) {
        return 1 - Math.pow(1 - t, 3);
    }

    function animateProgressBar(serverId, progress, fromValue, toValue) {
        if (activeAnimations[serverId]) {
            cancelAnimationFrame(activeAnimations[serverId]);
        }

        progress.value = fromValue;

        if (fromValue === toValue) {
            serverValues[serverId] = toValue;
            return;
        }

        const duration = 800;
        const startTime = performance.now();

        function updateProgress(currentTime) {
            const elapsed = currentTime - startTime;
            const rawProgress = Math.min(elapsed / duration, 1);
            const easedProgress = easeOutCubic(rawProgress);
            const currentValue = fromValue + (toValue - fromValue) * easedProgress;

            progress.value = currentValue;
            serverValues[serverId] = currentValue;

            if (rawProgress < 1) {
                activeAnimations[serverId] = requestAnimationFrame(updateProgress);
            } else {
                serverValues[serverId] = toValue;
                delete activeAnimations[serverId];
            }
        }

        activeAnimations[serverId] = requestAnimationFrame(updateProgress);
    }

    function processProgressBars() {
        $wire.$el.querySelectorAll('.server-progress-wrapper').forEach(wrapper => {
            const serverId = wrapper.dataset.serverId;
            const target = parseFloat(wrapper.dataset.target);
            const progress = wrapper.querySelector('.animated-progress');
            const currentValue = serverValues[serverId] ?? 0;

            progress.value = currentValue;
            animateProgressBar(serverId, progress, currentValue, target);
        });
    }

    processProgressBars();

    $wire.on('servers-updated', () => {
        requestAnimationFrame(() => {
            processProgressBars();
        });
    });
</script>
@endscript
