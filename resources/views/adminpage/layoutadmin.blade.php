<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nyata! Member Page</title>
    <link rel="icon" type="image/x-icon" href="https://nyatafoundation.org/image/other/Logo-Nyata.png">
</head>
<style>
    body {
        margin: 0;
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        display: block;
    }

    .sidebar {
        width: 250px;
        background-color: #ff0000;
        color: #fff;
        padding-top: 20px;
        height: 520px;
        position: fixed;
        top: 250px;
        left: 50px;
        transition: width 0.3s;
        border: rounded;
        text-align: center;
        border-style: solid;

    }

    .content {
        margin-left: 250px;
        padding: 20px;
    }

    .sidebar a {
        padding: 15px;
        text-decoration: none;
        color: #fff;
        display: block;
        transition: background-color 0.3s;
    }

    .sidebar a:hover {
        background-color: #555;
    }

    /* Adjustments for small screens */
    @media (max-width: 768px) {
        .sidebar {
            width: 250px;
            display: none;
            /* top:-50px; */
        }

        .content {
            margin-left: 0;
        }
    }
</style>

@section('admin-menu')
    {{-- <div class="sidebar"> --}}

    <section class="top-0">

        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button"
            class="inline-flex items-center p-2 mt-2  text-sm text-gray-500 rounded-lg sm:hidden  hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <svg class="w-6 h-6 text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                </path>
            </svg>
            <span class="text-xs ml-2 text-white">Open admin sidebar</span>
        </button>

        <aside id="logo-sidebar"
            class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 mt-16"
            aria-label="Sidebar">
            <div class="h-full px-3 py-6 overflow-y-auto bg-[#ff0000]  ">
                @if (auth()->user()->log == 'admin')
                    <a href="{{ route('adminpage') }}" class="flex items-center ps-2.5 mb-5">
                        {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 me-3 sm:h-7" alt="Flowbite Logo" /> --}}
                        <span
                            class="self-center text-xl mx-auto font-semibold whitespace-nowrap hover:text-gray-700 hover:font-semibold dark:text-white">Admin
                            Page Menu</span>
                    </a>
                @else
                    <a href="{{ route('userpage') }}" class="flex items-center ps-2.5 mb-5">
                        {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 me-3 sm:h-7" alt="Flowbite Logo" /> --}}
                        <span
                            class="self-center text-xl mx-auto font-semibold whitespace-nowrap hover:text-gray-700 hover:font-semibold dark:text-white">User
                            Page Menu</span>
                    </a>
                @endif


                <!-- ADMIN ROLE SUPER -->
                @if (auth()->user()->log == 'admin')
                    <div class="bg-red-900 px-2 py-1 rounded-lg shadow-lg">
                        @auth
                            <p class="normal-case tracking-wide"> Welcome back, <span
                                    class="capitalize">{{ auth()->user()->name }}</span>!
                            </p>
                            <p class="normal-case tracking-wide"> Current Role: <span
                                    class="capitalize bg-black/80 px-1 py-1 rounded-xl">{{ auth()->user()->role }}</span>
                            </p>
                            <p class="normal-case tracking-wide mt-2"> Log as:
                                <span class="capitalize bg-green-500 px-1 py-1 rounded-lg ">
                                    {{ auth()->user()->log }}
                                </span>
                            </p>
                        </div>
                        @if (auth()->user()->role === 'Super')
                            <ul class="space-y-2 font-medium"> <!-- List -->
                                <li class="mt-5">
                                    <a href="{{ route('adminpage') }}"
                                        class="flex items-center p-2 text-white rounded-lg hover:text-gray-700 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg class="w-5 h-5 text-white transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 21">
                                            <path
                                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                            <path
                                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                                        </svg>
                                        <span class="ms-3 hover:text-gray-700 hover:font-semibold">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown"
                                        data-dropdown-placement="right-start" type="button"
                                        class="flex items-center w-full  hover:bg-gray-100 rounded-lg  dark:hover:text-gray-700 hover:font-semibold">
                                        <div class="text-center flex hover:text-gray-700 p-2 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                class="w-5 h-5">
                                                <path fill-rule="evenodd"
                                                    d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span class="hover:text-gray-700 hover:font-semibold ms-3">Admin</span>
                                        </div>
                                    </button>
                                    <div id="doubleDropdown"
                                        class="z-10 hidden  divide-y divide-gray-100 rounded-lg shadow w-44 bg-red-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="doubleDropdownButton">
                                            <li>
                                                <a href="{{ route('profile') }}"
                                                    class="block px-4 py-2 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-gray-600">Profile</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('adminlog') }}"
                                                    class="block px-4 py-2 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-gray-600">Log</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('adminshow') }}"
                                                    class="block px-4 py-2 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-gray-600">Show
                                                    All Admin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                {{-- <a href='schoolshow' class="p-4 block hover:bg-gray-600">School</a> --}}
                                <li>
                                    <a href="{{ route('schoolshow') }}"
                                        class="flex items-center p-2 text-white rounded-lg hover:text-gray-700 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5">
                                            <path
                                                d="M11.584 2.376a.75.75 0 0 1 .832 0l9 6a.75.75 0 1 1-.832 1.248L12 3.901 3.416 9.624a.75.75 0 0 1-.832-1.248l9-6Z" />
                                            <path fill-rule="evenodd"
                                                d="M20.25 10.332v9.918H21a.75.75 0 0 1 0 1.5H3a.75.75 0 0 1 0-1.5h.75v-9.918a.75.75 0 0 1 .634-.74A49.109 49.109 0 0 1 12 9c2.59 0 5.134.202 7.616.592a.75.75 0 0 1 .634.74Zm-7.5 2.418a.75.75 0 0 0-1.5 0v6.75a.75.75 0 0 0 1.5 0v-6.75Zm3-.75a.75.75 0 0 1 .75.75v6.75a.75.75 0 0 1-1.5 0v-6.75a.75.75 0 0 1 .75-.75ZM9 12.75a.75.75 0 0 0-1.5 0v6.75a.75.75 0 0 0 1.5 0v-6.75Z"
                                                clip-rule="evenodd" />
                                            <path d="M12 7.875a1.125 1.125 0 1 0 0-2.25 1.125 1.125 0 0 0 0 2.25Z" />
                                        </svg>
                                        <span
                                            class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700 hover:font-semibold">School</span>
                                    </a>
                                </li>
                                {{-- <a href='childrenshow' class="p-4 block hover:bg-gray-600">Children</a> --}}
                                <li>
                                    <a href="{{ route('childrenshow') }}"
                                        class="flex items-center p-2 text-white rounded-lg hover:text-gray-700 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                                                clip-rule="evenodd" />
                                            <path
                                                d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                                        </svg>

                                        <span
                                            class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700 hover:font-semibold">Children</span>
                                        {{-- <span
                                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> --}}
                                    </a>
                                </li>
                                {{-- <a href='usershow' class="p-4 block hover:bg-gray-600">User</a> --}}
                                <li>
                                    <a href="{{ route('usershow') }}"
                                        class="flex items-center p-2 text-white rounded-lg hover:text-gray-700 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 18">
                                            <path
                                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                                        </svg>
                                        <span
                                            class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700 hover:font-semibold">Users</span>
                                    </a>
                                </li>
                                {{-- <a href='news' class="p-4 block hover:bg-gray-600">News</a> --}}
                                <li>
                                    <a href="{{ route('news') }}"
                                        class="flex items-center p-2 text-white rounded-lg hover:text-gray-700 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-6 h-6">
                                            <path fill-rule="evenodd"
                                                d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 0 0 3 3h15a3 3 0 0 1-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125ZM12 9.75a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H12Zm-.75-2.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75ZM6 12.75a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5H6Zm-.75 3.75a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75ZM6 6.75a.75.75 0 0 0-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-3A.75.75 0 0 0 9 6.75H6Z"
                                                clip-rule="evenodd" />
                                            <path
                                                d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 0 1-3 0V6.75Z" />
                                        </svg>

                                        <span
                                            class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700 hover:font-semibold">News</span>
                                    </a>
                                </li>
                                {{-- <a href='notification' class="p-4 block hover:bg-gray-600">Notification</a> --}}
                                <li>
                                    <a href="{{ route('notification') }}"
                                        class="flex items-center p-2 text-white rounded-lg hover:text-gray-700 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6  transition-transform duration-300 transform hover:scale-110  ">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                                        </svg>
                                        <span
                                            class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700 hover:font-semibold">Notification</span>
                                    </a>
                                </li>
                            </ul>
                        @elseif(auth()->user()->role === 'Admin')
                            {{-- <a href='schoolshow' class="p-4 block hover:bg-gray-600">School</a> --}}
                            <ul class="space-y-2 font-medium">
                                <li class="mt-3">
                                    <a href="{{ route('schoolshow') }}"
                                        class="flex items-center p-2 text-white rounded-lg hover:text-gray-700 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5">
                                            <path
                                                d="M11.584 2.376a.75.75 0 0 1 .832 0l9 6a.75.75 0 1 1-.832 1.248L12 3.901 3.416 9.624a.75.75 0 0 1-.832-1.248l9-6Z" />
                                            <path fill-rule="evenodd"
                                                d="M20.25 10.332v9.918H21a.75.75 0 0 1 0 1.5H3a.75.75 0 0 1 0-1.5h.75v-9.918a.75.75 0 0 1 .634-.74A49.109 49.109 0 0 1 12 9c2.59 0 5.134.202 7.616.592a.75.75 0 0 1 .634.74Zm-7.5 2.418a.75.75 0 0 0-1.5 0v6.75a.75.75 0 0 0 1.5 0v-6.75Zm3-.75a.75.75 0 0 1 .75.75v6.75a.75.75 0 0 1-1.5 0v-6.75a.75.75 0 0 1 .75-.75ZM9 12.75a.75.75 0 0 0-1.5 0v6.75a.75.75 0 0 0 1.5 0v-6.75Z"
                                                clip-rule="evenodd" />
                                            <path d="M12 7.875a1.125 1.125 0 1 0 0-2.25 1.125 1.125 0 0 0 0 2.25Z" />
                                        </svg>

                                        <span
                                            class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700 hover:font-semibold">School</span>
                                    </a>
                                </li>
                                {{-- <a href='childrenshow' class="p-4 block hover:bg-gray-600">Children</a> --}}
                                <li>
                                    <a href="{{ route('childrenshow') }}"
                                        class="flex items-center p-2 text-white rounded-lg hover:text-gray-700 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                                                clip-rule="evenodd" />
                                            <path
                                                d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                                        </svg>
                                        <span
                                            class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700 hover:font-semibold">Children</span>
                                    </a>
                                </li>
                                {{-- <a href='usershow' class="p-4 block hover:bg-gray-600">User</a> --}}
                                <li>
                                    <a href="{{ route('usershow') }}"
                                        class="flex items-center p-2 text-white rounded-lg hover:text-gray-700 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5">
                                            <path
                                                d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
                                        </svg>

                                        <span
                                            class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700 hover:font-semibold">User</span>
                                    </a>
                                </li>
                                {{-- <a href='adminlog' class="p-4 block hover:bg-gray-600">MyLog</a> --}}
                                <li>
                                    <a href="{{ route('adminlog') }}"
                                        class="flex items-center p-2 text-white rounded-lg hover:text-gray-700 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <span
                                            class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700 hover:font-semibold">MyLog</span>
                                    </a>
                                </li>
                            </ul>
                        @endif
                    @endauth
                @else
                    <div class="bg-red-900 px-2 py-1 rounded-lg shadow-lg">
                        @auth
                            <p class="normal-case tracking-wide"> Welcome back, <span
                                    class="capitalize">{{ auth()->user()->name }}</span> !
                            </p>
                            <p class="normal-case tracking-wide"> Current tier: <span
                                    class="capitalize bg-black/80 px-1 py-1 rounded-xl">{{ auth()->user()->tier }}</span>
                            </p>
                            <p class="normal-case tracking-wide mt-2"> Log as:
                                <span class="capitalize px-1 py-1 rounded-xl bg-red-500 ">
                                    {{ auth()->user()->log }}
                                </span>
                            </p>
                        </div>
                        <ul class="space-y-2 font-medium">
                            {{-- <a href='userpage' class="p-4 block hover:bg-gray-600">Dashboard User</a> --}}
                            <li>
                                <a href="{{ route('userpage') }}"
                                    class="flex items-center p-2 text-white rounded-lg hover:text-gray-700 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 group mt-5">
                                    <svg class="w-5 h-5 text-white transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 22 21">
                                        <path
                                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                        <path
                                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                                    </svg>
                                    <span class="ms-3 hover:text-gray-700 hover:font-semibold">Dashboard</span>
                                </a>
                            </li>


                            {{-- <a href='profile' class="p-4 block hover:bg-gray-600">Profile</a> --}}
                            <li>
                                <a href="{{ route('profile') }}"
                                    class="flex items-center p-2 text-white rounded-lg hover:text-gray-700 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                            d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    <span class="ms-3 hover:text-gray-700 hover:font-semibold">Profile</span>
                                </a>
                            </li>

                            {{-- <a href='childrensupported' class="p-4 block hover:bg-gray-600">Children Supported</a> --}}
                            <li>
                                <a href="{{ route('childrensupported') }}"
                                    class="flex items-center p-2 text-white rounded-lg hover:text-gray-700 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                            d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                                            clip-rule="evenodd" />
                                        <path
                                            d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                                    </svg>

                                    <span class="ms-3 hover:text-gray-700 hover:font-semibold">Children Supported</span>
                                </a>
                            </li>
                            {{-- <a href='contactadmin' class="p-4 block hover:bg-gray-600">Contact Admin</a> --}}
                            <li>
                                <a href="{{ route('contactadmin') }}"
                                    class="flex items-center p-2 text-white rounded-lg hover:text-gray-700 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-5 h-5">
                                        <path
                                            d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                        <path
                                            d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                                    </svg>

                                    <span class="ms-3 hover:text-gray-700 hover:font-semibold">Contact Admin</span>
                                </a>
                            </li>
                            {{-- <a href='userlog' class="p-4 block hover:bg-gray-600">User Log</a> --}}
                            <li>
                                <a href="{{ route('userlog') }}"
                                    class="flex items-center p-2 text-white rounded-lg hover:text-gray-700 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 20 18">
                                        <path
                                            d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                                    </svg>
                                    <span class="ms-3 hover:text-gray-700 hover:font-semibold">User Log</span>
                                </a>
                            </li>

                            <a href=" {{ route('notificationusershow') }}"
                                class="flex items-center p-2 text-white rounded-lg hover:text-gray-700 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                {{-- <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6  transition-transform duration-300 transform hover:scale-110  ">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                                </svg>
                                <span
                                    class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700 hover:font-semibold">Notification</span>
                                @if ($notificationCount > 0)
                                    <span
                                        class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">{{ $notificationCount }}</span>
                                @endif
                            </a>
                        </ul>
                    @endif
                    @endif
                    <form id="logout-form" method="POST" action="/logout" role="">
                        @csrf
                        <a href="#" onclick="document.getElementById('logout-form').submit()"
                            class="flex items-center p-2 text-white rounded-lg hover:text-gray-700 hover:font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700 hover:font-semibold">Sign
                                Out</span>
                        </a>
                    </form>
                </div>
            </aside>
        </section>
    @endsection



    </html>
