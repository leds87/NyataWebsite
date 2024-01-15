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
        }

        .content {
            margin-left: 0;
        }
    }
</style>

<div class="sidebar">
    <div class="bg-slate-500 px-2 py-1">
        <p class="normal-case tracking-wide">@auth  Welcome back, <span class="capitalize">{{auth()->user()->name}}</span>!@endauth</p>
        <p class="normal-case tracking-wide">@auth  Current Role: <span class="capitalize bg-black/80 px-1 py-1 rounded-xl">{{auth()->user()->role}}</span>@endauth</p>
    </div>
    @auth 
    @if(auth()->user()->role === 'Super')
    <a href='adminpage' class="p-4 block hover:bg-gray-600">Dashboard</a>
    <a href='schoolshow' class="p-4 block hover:bg-gray-600">School</a>
    <a href='childrenshow' class="p-4 block hover:bg-gray-600">Children</a>
    <a href='usershow' class="p-4 block hover:bg-gray-600">User</a>
    <a href='adminlog' class="p-4 block hover:bg-gray-600">Log</a>
    <a href='adminshow' class="p-4 block hover:bg-gray-600">Admin</a>
    <a href='news' class="p-4 block hover:bg-gray-600">News</a>
    <a href='userpage' class="p-4 block hover:bg-gray-600">Dashboard User</a>
    <a href='profile' class="p-4 block hover:bg-gray-600">Profile</a>
    @elseif(auth()->user()->role === 'Admin')
    <a href='schoolshow' class="p-4 block hover:bg-gray-600">School</a>
    <a href='childrenshow' class="p-4 block hover:bg-gray-600">Children</a>
    <a href='usershow' class="p-4 block hover:bg-gray-600">User</a>
    @endif
    @endauth
    <form id="logout-form" method="POST" action="/logout" role="">
        @csrf
        <a href="#" onclick="document.getElementById('logout-form').submit()" class="p-4 block hover:bg-gray-600">Logout</a>
    </form>
</div>
</html>