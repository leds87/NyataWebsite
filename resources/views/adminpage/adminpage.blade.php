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
                height: 500px;
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
            <a href='adminpage' class="p-4 block hover:bg-gray-600">Dashboard</a>
            <a href='schoolshow' class="p-4 block hover:bg-gray-600">School</a>
            <a href='childrenshow' class="p-4 block hover:bg-gray-600">Children</a>
            <a href='usershow' class="p-4 block hover:bg-gray-600">User</a>
            <a href='log' class="p-4 block hover:bg-gray-600">Log</a>
            <a href='adminshow' class="p-4 block hover:bg-gray-600">Admin</a>
            <form id="logout-form" method="POST" action="/logout" role="">
                @csrf
                <a href="#" onclick="document.getElementById('logout-form').submit()" class="p-4 block hover:bg-gray-600">Logout</a>
            </form>
            
                        {{-- <button type="submit" class="text-white text-center bg-black">Log out</button> --}}

        </div>

        <div class="content">

            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                Admin Overview</h1>

            <div class="flex flex-wrap py-2">
                <div class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 shadow mb-5 py-5">
                    <!-- User Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4"> User Information Data</div>

                        <div class="w-1/4 flex ">
                            <a href='usershow' class="text-white text-md ">Details
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col items-center rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                        <div class="p-4 w-2/3">
                            <span class="mb-3 text-xl font-normal dark:text-gray-100">
                            <p>Total Users: {{ $usercount }}</p>
                            <p>User Active: {{ $activeusers }}</p>
                            <p>User Postpone: {{ $postponeusers }}</p>
                            <p>User Inactive: {{ $inactiveusers }}</p>
                            </span>
                        </div>
                            <canvas id="userPieChart" width="200" height="200"></canvas>
                    </div>
                </div>

                <!-- Script User Data -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var ctx = document.getElementById('userPieChart').getContext('2d');
                        var userPieChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: ['Active Users', 'Inactive Users', 'Postpone Users'],
                                datasets: [{
                                    data: [{{ $activeusers }}, {{ $inactiveusers }}, {{ $postponeusers }}],
                                    backgroundColor: ['#36A2EB', '#FF6384', '#235200'],
                                }]
                            },
                            options: {
                                responsive: false,
                                maintainAspectRatio: false,
                            }
                        });
                    });
                </script>

                <div class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 shadow mb-5 py-5">
                    <!-- Child Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4"> Child Information Data</div>

                        <div class="w-1/4 flex ">
                            <a href='childrenshow' class="text-white text-md ">Details
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col items-center rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                        <div class="p-4 w-2/3">
                            <span class="mb-3 text-xl font-normal dark:text-gray-100">
                                <p>Total Child: {{ $childrencount }}</p>
                                <p>Child Active: {{ $activechildren }}</p>
                                <p>Child Educated: {{ $educatedchildren }}</p>
                                <p>Child Success: {{ $successchildren }}</p>
                            </span>
                        </div>
                            <canvas id="childPieChart" width="200" height="200"></canvas>
                    </div>
                </div>

                <!-- Script child Data -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var ctx = document.getElementById('childPieChart').getContext('2d');
                        var childPieChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
								labels: ['Active Child', 'Educated Child', 'Success Child'],
                                datasets: [{
                                    data: [{{ $activechildren }}, {{ $educatedchildren }}, {{ $successchildren }}],
                                    backgroundColor: ['#36A2EB', '#FF6384', '#235200'],
                                }]
                            },
                            options: {
                                responsive: false,
                                maintainAspectRatio: false,
                            }
                        });
                    });
                </script>
            </div>

            <div class="flex flex-wrap py-2">
                <div class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 shadow mb-5 py-5">
                    <!-- Money Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4"> Money Information Data</div>

                        <div class="w-1/4 flex ">
                            <a href='' class="text-white text-md ">Details
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col items-center rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                        <div class="p-4 w-2/3">
                            <span class="mb-3 text-xl font-normal dark:text-gray-100">
                            <p>Total Balance : </p>
                            </span>
                        </div>
                            <canvas id="userPieChart" width="200" height="200"></canvas>
                    </div>
                </div>

                <!-- Script User Data -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var ctx = document.getElementById('userPieChart').getContext('2d');
                        var userPieChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: ['Active Users', 'Inactive Users', 'Postpone Users'],
                                datasets: [{
                                    data: [{{ $activeusers }}, {{ $inactiveusers }}, {{ $postponeusers }}],
                                    backgroundColor: ['#36A2EB', '#FF6384', '#235200'],
                                }]
                            },
                            options: {
                                responsive: false,
                                maintainAspectRatio: false,
                            }
                        });
                    });
                </script>

                <div class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 shadow mb-5 py-5">
                    <!-- Child Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4"> School Information Data</div>

                        <div class="w-1/4 flex ">
                            <a href='schoolshow' class="text-white text-md ">Details
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col items-center rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                        <div class="p-4 w-2/3">
                            <span class="mb-3 text-xl font-normal dark:text-gray-100">
                                <p>School Active : {{ $activeschool }}</p>
                                <p>School Inactive : {{ $inactiveschool }}</p>
                            </span>
                        </div>
                            <canvas id="schoolPieChart" width="200" height="200"></canvas>
                    </div>
                </div>

                <!-- Script child Data -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var ctx = document.getElementById('schoolPieChart').getContext('2d');
                        var schoolPieChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: ['Active School', 'Educated School'],
                                datasets: [{
                                    data: [{{ $activeschool }}, {{ $inactiveschool }}],
                                    backgroundColor: ['#36A2EB', '#FF6384'],
                                }]
                            },
                            options: {
                                responsive: false,
                                maintainAspectRatio: false,
                            }
                        });
                    });
                </script>
                

            @endsection



            

         