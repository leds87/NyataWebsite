<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        background-color: red;
        color: #fff;
        padding-top: 20px;
        height: 650px;
        position: fixed;
        top: 200px;
        left: 50px;
        transition: width 0.3s;
        border: rounded;
        text-align: center;
        border-style: solid;

    }

    .content {
        margin-left: 400px;
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
            width: 0;
            display: none;
            /* top:-50px; */
        }

        .content {
            margin-left: 0;
        }
    }
</style>

<div class="sidebar">
    @if (auth()->user()->log == 'admin')
        <div class="bg-slate-500 px-2 py-1">
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
                <a href='adminpage' class="p-4 block hover:bg-gray-600">Dashboard</a>
                <a href='schoolshow' class="p-4 block hover:bg-gray-600">School</a>
                <a href='childrenshow' class="p-4 block hover:bg-gray-600">Children</a>
                <a href='usershow' class="p-4 block hover:bg-gray-600">User</a>
                <a href='adminlog' class="p-4 block hover:bg-gray-600">Admin Log</a>
                <a href='adminshow' class="p-4 block hover:bg-gray-600">Admin</a>
                <a href='news' class="p-4 block hover:bg-gray-600">News</a>
                <a href='notification' class="p-4 block hover:bg-gray-600">Notification</a>
                <a href='profile' class="p-4 block hover:bg-gray-600">Profile</a>
                {{-- <a href='childrensupported' class="p-4 block hover:bg-gray-600">Children Supported</a> --}}
            @elseif(auth()->user()->role === 'Admin')
                <a href='schoolshow' class="p-4 block hover:bg-gray-600">School</a>
                <a href='childrenshow' class="p-4 block hover:bg-gray-600">Children</a>
                <a href='usershow' class="p-4 block hover:bg-gray-600">User</a>
                <a href='adminlog' class="p-4 block hover:bg-gray-600">UserLog</a>
            @endif
        @endauth
    @else
        <div class="bg-slate-500 px-2 py-1">
            @auth
                <p class="normal-case tracking-wide"> Welcome back, <span
                        class="capitalize">{{ auth()->user()->name }}</span>!
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
            <a href='userpage' class="p-4 block hover:bg-gray-600">Dashboard User</a>
            <a href='profile' class="p-4 block hover:bg-gray-600">Profile</a>
            <a href='childrensupported' class="p-4 block hover:bg-gray-600">Children Supported</a>
            <a href='contactadmin' class="p-4 block hover:bg-gray-600">Contact Admin</a>
            <a href='userlog' class="p-4 block hover:bg-gray-600">User Log</a>
            <a href='notificationusershow' class="p-4 block hover:bg-gray-600">
                <div class="flex">
                    @if ($notificationCount > 0)
                        <span class="justify-items-center mx-auto pl-6 ">Notification</span>
                        <button class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6  transition-transform duration-300 transform hover:scale-110  ">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                            </svg>
                            <div class="absolute -top-2 -right-1 bg-red-600 text-white w-5 h-5 rounded-full hover:animate-pulse ">
                                {{ $notificationCount }}
                            </div>
                        @else
                            <span class="justify-items-center mx-auto ">Notification</span>
                    @endif
                    </button>
                </div>
            </a>
        @endif
        @endif
        <form id="logout-form" method="POST" action="/logout" role="">
            @csrf
            <a href="#" onclick="document.getElementById('logout-form').submit()"
                class="p-4 block hover:bg-gray-600">Logout</a>
        </form>
    </div>

    </html>
