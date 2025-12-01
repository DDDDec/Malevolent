<nav class="border-bottom border-color padding-two">
    <div class="margin-0-auto width-max-1200px position-relative z-index-two">
        <ul class="grid grid-two-columns padding margin">

            <div class="flex flex-justify-start">
                <li class="list">
                    <a class="link transition font-weight-six-hundred padding-three border-radius">
                        Homepage &nbsp;
                        <i class="fa-solid fa-angle-up transition"></i>
                    </a>

                    <div class="background-color-three display-none border-two border-radius position-absolute overflow-hidden">
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="{{ route('Homepage') }}" wire:navigate>
                            <i class="fa-solid fa-house"></i>
                            &nbsp;&nbsp;Homepage
                        </a>
                        <div class="border"></div>
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="https://forum.plutonium.pw" target="_blank">
                            <i class="fa-solid fa-atom"></i>
                            &nbsp;&nbsp;Plutonium Forum
                        </a>
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="https://cdn.plutonium.pw/updater/plutonium.exe" target="_blank">
                            <i class="fa-solid fa-atom"></i>
                            &nbsp;&nbsp;Download Client
                        </a>
                        <div class="border"></div>
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="{{ route('Homepage') }}" wire:navigate>
                            <i class="fa-solid fa-scroll"></i>
                            &nbsp;&nbsp;Terms Of Service
                        </a>
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="{{ route('Homepage') }}" wire:navigate>
                            <i class="fa-solid fa-scroll"></i>
                            &nbsp;&nbsp;Privacy Policy
                        </a>
                    </div>
                </li>

                <li class="list">
                    <a class="link transition font-weight-six-hundred padding-three border-radius">
                        Community &nbsp;
                        <i class="fa-solid fa-angle-up transition"></i>
                    </a>

                    <div class="background-color-three display-none border-two border-radius position-absolute overflow-hidden">
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="{{ route('Homepage') }}" wire:navigate>
                            <i class="fa-solid fa-chart-simple"></i>
                            &nbsp;&nbsp;Round Leaderboard
                        </a>
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="{{ route('Homepage') }}" wire:navigate>
                            <i class="fa-solid fa-chart-simple"></i>
                            &nbsp;&nbsp;Stats Leaderboard
                        </a>
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="{{ route('Homepage') }}" wire:navigate>
                            <i class="fa-solid fa-chart-simple"></i>
                            &nbsp;&nbsp;Server Leaderboard
                        </a>
                        <div class="border"></div>
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="{{ route('Homepage') }}" wire:navigate>
                            <i class="fa-solid fa-magnifying-glass"></i>
                            &nbsp;&nbsp;Player Search
                        </a>
                    </div>
                </li>

                <li class="list">
                    <a class="link transition font-weight-six-hundred padding-three border-radius">
                        Support &nbsp;
                        <i class="fa-solid fa-angle-up transition"></i>
                    </a>

                    <div class="background-color-three display-none border-two border-radius position-absolute overflow-hidden">
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="{{ route('Homepage') }}" wire:navigate>
                            <i class="fa-solid fa-phone"></i>
                            &nbsp;&nbsp;Support Tickets
                        </a>
                        <div class="border"></div>
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="{{ route('Homepage') }}" wire:navigate>
                            <i class="fa-solid fa-book"></i>
                            &nbsp;&nbsp;Commands Booklet
                        </a>
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="{{ route('Homepage') }}" wire:navigate>
                            <i class="fa-solid fa-map-location-dot"></i>
                            &nbsp;&nbsp;Server Guides
                        </a>
                    </div>
                </li>

                <li class="list">
                    <a class="link transition font-weight-six-hundred padding-three border-radius">
                        Store &nbsp;
                        <i class="fa-solid fa-angle-up transition"></i>
                    </a>

                    <div class="background-color-three display-none border-two border-radius position-absolute overflow-hidden">
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="{{ route('Homepage') }}" wire:navigate>
                            <i class="fa-solid fa-star"></i>
                            &nbsp;&nbsp;Player Ranks
                        </a>
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="{{ route('Homepage') }}" wire:navigate>
                            <i class="fa-solid fa-droplet"></i>
                            &nbsp;&nbsp;Username Colors
                        </a>
                        <div class="border"></div>
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="{{ route('Homepage') }}" wire:navigate>
                            <i class="fa-solid fa-scroll"></i>
                            &nbsp;&nbsp;Refund Policy
                        </a>
                    </div>
                </li>
            </div>

            <div class="flex flex-justify-end">
                <li class="list">
                    <a class="link transition font-weight-six-hundred padding-three border-radius">
                        Account &nbsp;
                        <i class="fa-solid fa-angle-up transition"></i>
                    </a>

                    <div class="background-color-three display-none border-two border-radius position-absolute overflow-hidden position-right">
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="{{ route('Login') }}" wire:navigate>
                            <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            &nbsp;&nbsp;Login
                        </a>
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="{{ route('Register') }}" wire:navigate>
                            <i class="fa-solid fa-user-plus"></i>
                            &nbsp;&nbsp;Register
                        </a>
                        <div class="border"></div>
                        <a class="display-none link-two transition font-weight-six-hundred padding-four font-size-two font-color-three" href="{{ route('Homepage') }}" wire:navigate>
                            <i class="fa-solid fa-key"></i>
                            &nbsp;&nbsp;Forgot Password
                        </a>
                    </div>
                </li>
            </div>

        </ul>
    </div>
</nav>
