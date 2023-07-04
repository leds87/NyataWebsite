<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="w-full">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home Page</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

    <!--Link to Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Lora:wght@700&display=swap"
        rel="stylesheet">
</head>

<body class="bg-[#ff0000] text-white max-w-none w-full overflow-x-hidden">
    <header class="bg-[#ff0000] top-0 z-50 max-w-none w-full">
        <section>
            <nav class="bg-[#ff0000] w-full">
                <div class="w-full flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="/image/share/LogoNyataWord.png" class="h-28 mr-3" />
                    </a>
                    <button data-collapse-toggle="navbar-solid-bg" type="button"
                        class="inline-flex items-center p-2 ml-3 text-sm text-white rounded-lg md:hidden hover:text-black "
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
                        <ul
                            class="flex flex-col justify-center items-center font-medium mt-4 rounded-lg bg-[#ff0000] md:flex-row md:space-x-4 md:mt-0 md:border-0 border-4 border-white md:bg-transparent">
                            <li>
                                <a href="{{ route('donate') }}"
                                    class="text-lg mx-2 text-white hover:text-black transition">DONATE
                                </a>
                            </li>
                            <!-- 2nd Navbar Item -->
                            <li>
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                    class="text-lg mx-2 text-white hover:text-black transition inline-flex"
                                    type="button">ABOUT
                                    US
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdown"
                                    class="z-10 hidden bg-[#FF0000] divide-y divide-gray-100 rounded-lg shadow w-44">
                                    <ul class="py-2 text-lg text-white" aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="{{ route('aboutus') }}"
                                                class="block px-4 py-2 hover:bg-white hover:text-[#FF0000]">ABOUT
                                                US
                                            </a>
                                            <a href="{{ route('ourpeople') }}"
                                                class="block px-4 py-2 hover:bg-white hover:text-[#FF0000]">OUR
                                                PEOPLE</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- 3rd Navbar Item -->
                            <li>
                                <button id="dropdownDefaultButton2" data-dropdown-toggle="dropdown2"
                                    class="text-lg mx-2 text-white hover:text-black transition inline-flex"
                                    type="button" type="button">WHAT
                                    WE DO
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdown2"
                                    class="z-10 hidden bg-[#ff0000] divide-y divide-gray-100 rounded-lg shadow w-44">
                                    <ul class="py-2 text-lg text-white" aria-labelledby="dropdownDefaultButton2">
                                        <li>
                                            <a href="{{ route('whatwedo') }}"
                                                class="block px-4 py-2 hover:bg-white hover:text-[#FF0000]">WHAT
                                                WE DO
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('adikasuh') }}"
                                                class="block px-4 py-2 hover:bg-white hover:text-[#FF0000]">ADIK
                                                ASUH
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('travelcharity') }}"
                                                class="block px-4 py-2 hover:bg-white hover:text-[#FF0000]">TRAVEL
                                                CHARITY</a>
                                        </li>
                                        <li>
                                            <a href="{{ 'actofkindness' }}"
                                                class="block px-4 py-2 hover:bg-white hover:text-[#FF0000]">ACT
                                                OF KINDNESS</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <!-- 4th Navbar Item -->
                            <li>
                                <a href="{{ route('takeaction') }}"
                                    class="text-lg mx-2 text-white hover:text-black transition">TAKE ACTION</a>
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
        </section>
    </header>

    <main>
        @yield('page-content')
    </main>

    <footer class="h-fit">
        <div class="flex flex-wrap bg-neutral-200 w-full justify-center pb-6 lg:-translate-y-40">
            <form class="flex flex-col w-11/12 py-5 mx-auto text-black justify-center">
                <div class="mx-auto font-bold text-4xl text-center px-5 py-3">
                    {{ __('messages.JoinNyataTitle') }}
                </div>
                <div class="mx-auto text-base text-center px-5 py-3 tracking-wider">
                    {{ __('messages.JoinNyataDescription') }}
                </div>
                <div class="flex flex-wrap mx-auto w-full h-1/4 py-3 justify-center md:flex-row">
                    <input
                        class="w-11/12 mx-1.5 rounded-lg py-2 px-3 text-black mb-3 leading-tight focus:outline-none focus:shadow-outline max-w-xs"
                        id="name" type="name" placeholder="{{ __('messages.Name') }}">
                    <input
                        class="w-11/12 mx-1.5 rounded-lg py-2 px-3 text-black mb-3 leading-tight focus:outline-none focus:shadow-outline max-w-xs"
                        id="emailaddress" type="emailaddress" placeholder="{{ __('messages.EmailAddress') }}">
                </div>
                <button
                    class="mx-auto w-11/12 bg-[#ff0000] text-white text-base font-bold mt-8 py-3 px-0 rounded-2xl focus:outline-none focus:shadow-outline max-w-xs md:mt-2"
                    type="button">
                    {{ __('messages.Join') }}
                </button>
            </form>
        </div>
        <div class="flex flex-col bg-[#ff0000] w-full justify-center pt-6 lg:-translate-y-36">
            <div class="container justify-center mx-auto">
                <div class="flex flex-row flex-wrap justify-center mx-auto">
                    <div class="basis-full justify-center text-center py-5 px-8 lg:basis-1/2 lg:text-left">
                        <img src="/image/share/LogoNyataWord.png" class="h-36 mx-auton lg:mx-0">
                        <p class="uppercase font-bold text-xl mt-6">{{ __('messages.ContactUs') }}</p>
                        <p class="text-xl">Ph +62 812 2233 4708</p>
                        <p class="text-xl"><a href="https://www.instagram.com/nyatafoundation/" target="blank">IG @nyatafoundation</a></p>
                    </div>
                    <div class="basis-full justify-center text-center py-5 px-5 mb-6 lg:basis-1/2 lg:translate-y-[4.5rem] lg:text-right">
                        <button
                            class="mx-auto w-full bg-white text-[#ff0000] text-base font-bold py-3 rounded-2xl focus:outline-none focus:shadow-outline uppercase max-w-xs"
                            type="button" onclick="window.location='{{ route('contactus') }}'">
                            {{ __('messages.GiveSupport') }}
                        </button>
                        <p class="uppercase font-bold text-xl mt-6">{{ __('messages.SendYourDonation') }}</p>
                        <p class="text-xl">Yayasan Anak-anak Tanah Air</p>
                        <p class="text-xl">No. 233 999 6622</p>
                        <p class="text-xl">BCA Cab. Sukajadi Bandung</p>
                    </div>
                </div>
            </div>

            {{-- <div class="mx-auto px-5 py-3">
                <img src="/image/share/LogoNyataWord.png" class="h-36">
            </div>
            <div class="mx-auto text-lg text-center px-5 py-3">
                <p class="uppercase font-bold text-xl">{{ __('messages.ContactUs') }}</p>
                <p class="text-xl">Ph +62 812 2233 4708</p>
                <p class="text-xl"><a href="https://www.instagram.com/nyatafoundation/" target="blank">IG @nyatafoundation</a></p>
            </div>
            <div class="mx-auto w-8/12 px-5 py-6">
                <button
                    class="mx-auto w-full bg-white text-[#ff0000] text-base font-bold py-3 rounded-2xl focus:outline-none focus:shadow-outline uppercase"
                    type="button" onclick="window.location='{{ route('contactus') }}'">
                    {{ __('messages.GiveSupport') }}
                </button>
            </div>
            <div class="mx-auto w-10/12 text-center px-5 py-6">
                <p class="uppercase font-bold text-xl">{{ __('messages.SendYourDonation') }}</p>
                <p class="text-xl">Yayasan Anak-anak Tanah Air</p>
                <p class="text-xl">No. 233 999 6622</p>
                <p class="text-xl">BCA Cab. Sukajadi Bandung</p>
            </div> --}}
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>
