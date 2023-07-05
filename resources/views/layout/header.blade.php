<nav class="bg-[#FF0000] w-full">
    <div class="w-full flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="/image/share/LogoNyataWord.png" class="h-24 mr-3" />
        </a>
        <button data-collapse-toggle="navbar-solid-bg" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-white rounded-lg md:hidden hover:text-black"
            aria-controls="navbar-solid-bg" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
            <ul class="flex flex-col justify-center items-center font-medium mt-4 rounded-lg bg-[#ff0000] md:flex-row md:space-x-4 md:mt-0 md:border-0 border-4 border-white md:bg-transparent">
                <li>
                    <a href="{{ route('donate') }}" class="text-lg mx-2 text-white hover:text-black transition uppercase">
                        {{ __('messages.DonateMenu') }}
                    </a>
                </li>
                <!-- 2nd Navbar Item -->
                <li>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        class="text-lg mx-2 text-white hover:text-black transition inline-flex uppercase"
                        type="button">
                        {{ __('messages.AboutUsMenu') }}
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden bg-[#FF0000] divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-lg text-white" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="{{ route('aboutus') }}" class="block px-4 py-2 hover:bg-white hover:text-[#FF0000] uppercase">
                                    {{ __('messages.AboutUsMenu') }}
                                </a>
                                <a href="{{ route('ourpeople') }}" class="block px-4 py-2 hover:bg-white hover:text-[#FF0000] uppercase">
                                    {{ __('messages.OurPeopleMenu') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- 3rd Navbar Item -->
                <li>
                    <button id="dropdownDefaultButton2" data-dropdown-toggle="dropdown2"
                        class="text-lg mx-2 text-white hover:text-black transition inline-flex uppercase"
                        type="button" type="button">
                        {{ __('messages.WhatWeDoMenu') }}
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdown2" class="z-10 hidden bg-[#ff0000] divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-lg text-white" aria-labelledby="dropdownDefaultButton2">
                            <li>
                                <a href="{{ route('whatwedo') }}" class="block px-4 py-2 hover:bg-white hover:text-[#FF0000] uppercase">
                                    {{ __('messages.WhatWeDoMenu') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('adikasuh') }}" class="block px-4 py-2 hover:bg-white hover:text-[#FF0000] uppercase">
                                    {{ __('messages.AdikAsuhMenu') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('travelcharity') }}" class="block px-4 py-2 hover:bg-white hover:text-[#FF0000] uppercase">
                                    {{ __('messages.TravelCharityMenu') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ 'actofkindness' }}" class="block px-4 py-2 hover:bg-white hover:text-[#FF0000] uppercase">
                                    {{ __('messages.ActOfKindnessMenu') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- 4th Navbar Item -->
                <li>
                    <a href="{{ route('takeaction') }}" class="text-lg mx-2 text-white hover:text-black transition uppercase">
                        {{ __('messages.TakeActionMenu') }}
                    </a>
                </li>
                <!-- 5th Navbar Item -->
                <li>
                    <div class="flex flex-row">
                        <div class="justify-center space-x-2">
                            <a href="{{ url('/language/en') }}"
                                class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out">en</a>
                            <a href="{{ url('/language/ru') }}"
                                class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out">ru</a>
                            <a href="{{ url('/language/id') }}"
                                class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out">id</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>