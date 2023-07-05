<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="w-full">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <!--Link to Font-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Lora:wght@700&display=swap"
        rel="stylesheet">
</head>

<body class="bg-[#ff0000] text-white w-full">
    <header class="fixed bg-[#ff0000] top-0 z-50 w-full">
        @include('layout.header')

        {{-- <section>
            <nav class="bg-[#FF0000] w-full">
                <div class="w-full flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="/image/share/LogoNyataWord.png" class="h-[100px] mr-3" />
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
                            class="flex flex-col justify-center items-center font-medium mt-4 rounded-lg bg-[#ff0000] md:flex-row md:space-x-8 md:mt-0 md:border-0 border-4 border-white md:bg-transparent">
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
        </section> --}}
    </header>

    <main>
        @yield('page-content')
    </main>

    <footer>
        @include('layout.footer')
        {{-- <div class="flex flex-wrap bg-neutral-200 w-full h-[400px] md:h-[350px] justify-center">
            <form class="flex flex-col w-[900px] py-5 mx-auto md:py-10 text-black justify-center">
                <div class="mx-auto font-bold text-5xl text-center px-5 py-3">
                    {{ __('messages.JOIN NYATA') }}
                </div>
                <div class="mx-auto text-base text-center px-5 py-3">
                    {{ __('messages.JoinNyataDescription') }}
                </div>
                <div class="flex flex-wrap mx-auto w-full h-[80px] py-3 justify-center">
                    <input
                        class="w-[350px] md:w-[400px] mx-[5px] rounded-[25px] py-2 px-3 text-black mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" type="name" placeholder="Name">
                    <input
                        class="w-[350px] md:w-[400px] mx-[5px] rounded-[25px] py-2 px-3 text-black mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="emailaddress" type="emailaddress" placeholder="Email address">
                </div>
                <button
                    class="mx-auto w-[300px] bg-[#ff0000] text-white text-base font-bold mt-10 md:mt-5 py-3 px-0 rounded-[25px] focus:outline-none focus:shadow-outline"
                    type="button">
                    Join
                </button>
            </form>
        </div>
        <div class="flex flex-row bg-[#ff0000] w-full justify-between">
            <div class="flex flex-col bg-[#ff0000] py-5 pl-5 md:py-10 md:pl-10">
                <img src="/image/share/LogoNyataWord.png" class="w-full h-[100px] pr-5">

                <a href="{{ route('contactus') }}" class="text-white font-bold text-left">CONTACT US</a>
                <div class="text-left">
                    Ph +62 812 2233 4708
                </div>
                <div class="text-left">
                    IG @nyatafoundation
                </div>
            </div>
            <div class="flex flex-col bg-[#ff0000] py-5 pr-5 md:py-10 md:pr-10 justify-end items-end">
                <div>
                    <a href="{{ route('contactus') }}" class="text-white font-bold text-left">GIVE SUPPORT</a>
                </div>
                <div>
                    SEND YOUR DONATION TO
                </div>
                <div>
                    Yayasan Anak-anak Tanah Air
                </div>
                <div>
                    No. 233 999 6622
                </div>
                <div>
                    BCA Cab. Sukajadi Bandung
                </div>
            </div> --}}
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>
