@extends('layout.default')
{{-- @section('title', __('AdminPage')) --}}
@section('page-content')
    <div class="bg-white py-20">
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
                height: 300px;
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
            <a href='adminpage' class="p-4 block hover:bg-gray-600">Dashboard</a>
            <a href='#' class="p-4 block hover:bg-gray-600">School</a>
            <a href='children' class="p-4 block hover:bg-gray-600">Children</a>
            <a href='user' class="p-4 block hover:bg-gray-600">User</a>
            <a href='log' class="p-4 block hover:bg-gray-600">Log</a>
        </div>

        <div class="content">
            <h1 class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">School Overview</h1>
        </div>
    </div>
@endsection
