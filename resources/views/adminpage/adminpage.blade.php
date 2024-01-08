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
            <a href='school' class="p-4 block hover:bg-gray-600">School</a>
            <a href='children' class="p-4 block hover:bg-gray-600">Children</a>
            <a href='user' class="p-4 block hover:bg-gray-600">User</a>
            <a href='log' class="p-4 block hover:bg-gray-600">Log</a>
        </div>

        <div class="content">
            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                Admin Overview</h1>
            <div class="flex">
                <div class="pt-6 bg-red-800 border max-w-2xl border-gray-200 rounded-lg shadow mx-auto gap-5 mb-5">
                    <a href="#">
                        {{-- <img class="rounded-full mx-auto" width="100" height="100" src="image/logo/Ledx Logo 512.png" alt="Visi" /> --}}
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <p class="text-left text-2xl font-bold tracking-tight text-gray-900 dark:text-white mb-6">User
                                Data</p>
                        </a>
                        <p class="mb-3 font-normal text-gray-100 lg:w-[1100px] md:w-auto ">
                        <p>Total Users: {{ $usercount }}</p>
                        <p>User Active: {{ $activeusers }}</p>
                        <p>User Postpone: {{ $postponeusers }}</p>
                        <p>User Inactive: {{ $inactiveusers }}</p>

                        </p>
                    </div>
                    <div class="bg-black ">
                        <canvas id="userPieChart" width="150" height="150"></canvas>
                    </div>
                </div>



                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var ctx = document.getElementById('userPieChart').getContext('2d');
                        var userPieChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: ['Active Users', 'Inactive Users','Postpone Users'],
                                datasets: [{
                                    data: [{{ $activeusers }}, {{ $inactiveusers }}, {{ $postponeusers }}],
                                    backgroundColor: ['#36A2EB', '#FF6384','#235200'],
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                            }
                        });
                    });
                </script>

                <div class="pt-6 bg-red-800 border max-w-2xl border-gray-200 rounded-lg shadow mx-auto gap-5 mb-5">
                    <a href="#">
                        {{-- <img class="rounded-full mx-auto" width="100" height="100" src="image/logo/Ledx Logo 512.png" alt="Visi" /> --}}
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="text-left text-2xl font-bold tracking-tight text-gray-900 dark:text-white mb-6">
                                Children Data</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-100 lg:w-[1100px] md:w-auto ">
                        <p>Child Active</p>
                        <p>Child Educated</p>
                        <p>Child Success</p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex">
                <div class="pt-6 bg-red-800 border max-w-2xl border-gray-200 rounded-lg shadow mx-auto gap-5 mb-5">
                    <a href="#">
                        {{-- <img class="rounded-full mx-auto" width="100" height="100" src="image/logo/Ledx Logo 512.png" alt="Visi" /> --}}
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="text-left text-2xl font-bold tracking-tight text-gray-900 dark:text-white mb-6">Money
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-100 lg:w-[1100px] md:w-auto ">
                        <p>User Active</p>
                        <p>User Postpone</p>
                        <p>User Inactive</p>
                        </p>
                    </div>
                </div>
                <div class="pt-6 bg-red-800 border max-w-2xl border-gray-200 rounded-lg shadow mx-auto gap-5 mb-5">
                    <a href="#">
                        {{-- <img class="rounded-full mx-auto" width="100" height="100" src="image/logo/Ledx Logo 512.png" alt="Visi" /> --}}
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="text-left text-2xl font-bold tracking-tight text-gray-900 dark:text-white mb-6">
                                School</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-100 lg:w-[1100px] md:w-auto ">
                        <p>School Active</p>
                        <p>School Inactive</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
