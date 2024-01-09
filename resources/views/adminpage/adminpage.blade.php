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
            <a href='adminpage' class="p-4 block hover:bg-gray-600">Dashboard</a>
            <a href='schoolshow' class="p-4 block hover:bg-gray-600">School</a>
            <a href='childrenshow' class="p-4 block hover:bg-gray-600">Children</a>
            <a href='usershow' class="p-4 block hover:bg-gray-600">User</a>
            <a href='log' class="p-4 block hover:bg-gray-600">Log</a>
            <a href='adminshow' class="p-4 block hover:bg-gray-600">Admin</a>
        </div>

        <div class="content">

            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                Admin Overview</h1>
            <div class="flex">
                <div class="pt-6 bg-red-800 border max-w-2xl border-gray-200 rounded-lg shadow mx-auto gap-5 mb-5">
                    <!-- User Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-xl tracking-tight font-bold w-3/4"> User Data</div>
                        <div class="w-1/4 text-center  ">
                            <a href='usershow' class="text-white text-md ">Details</a>
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                              </svg> --}}
                        </div>
                    </div>

                        <div class="flex flex-col items-center   rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                            {{-- <div class="max-w-xl h-auto my-5 ml-5 border-gray-200  dark:bg-gray-50 rounded-lg shadow"> --}}
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"></h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    <p>Total Users: {{ $usercount }}</p>
                                    <p>User Active: {{ $activeusers }}</p>
                                    <p>User Postpone: {{ $postponeusers }}</p>
                                    <p>User Inactive: {{ $inactiveusers }}</p>
                                </p>
                            </div>
                            <div>
                                <canvas id="userPieChart" width="150" height="150"></canvas>
                            </div>
                            {{-- <img class="object-cover w-full rounded-t-lg h-32 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://images.unsplash.com/photo-1506261423908-ea2559c1f24c?q=80&w=2084&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""> --}}
                        </div>
                    </div>


                    {{--First  <div class=" flex flex-row px-48 ">
                        <div class = "bg-black p-5 w-3/4 ">
                            <p class="mb-5 font-normal text-gray-100 w-full ">
                                <p>Total Users: {{ $usercount }}</p>
                                <p>User Active: {{ $activeusers }}</p>
                                <p>User Postpone: {{ $postponeusers }}</p>
                                <p>User Inactive: {{ $inactiveusers }}</p>
                            </p>
                        </div>
                        <span class="bg-white w-1/4 "> 
                            <canvas id="userPieChart" width="150" height="150"></canvas>
                        </span>
                    </div> --}}
                    


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



                <div class="pt-6 bg-red-800 border max-w-2xl border-gray-200 rounded-lg shadow mx-auto gap-5 mb-5">
                    <div class="p-5">
                        <a href="#">
                            <h5 class="text-left text-2xl font-bold tracking-tight text-gray-900 dark:text-white mb-6">
                                Children Data</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-100 lg:w-[1100px] md:w-auto ">
                        <p>Child Total: {{ $childrencount }}</p>
                        <p>Child Active: {{ $activechildren }}</p>
                        <p>Child Educated: {{ $educatedchildren }}</p>
                        <p>Child Success: {{ $successchildren }}</p>
                        </p>
                    </div>
                    <div class="bg-black ">
                        <canvas id="childPieChart" width="150" height="150"></canvas>
                    </div>
                </div>
                <!-- Script Children Data -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var ctx = document.getElementById('childPieChart').getContext('2d');
                        var userPieChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: ['Active Children', 'Educated Children', 'Success Children'],
                                datasets: [{
                                    data: [{{ $activechildren }}, {{ $educatedchildren }},
                                        {{ $successchildren }}
                                    ],
                                    backgroundColor: ['#36A2EB', '#FF6384', '#235200'],
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                            }
                        });
                    });
                </script>
            </div>
            <div class="flex">
                <div class="pt-6 bg-red-800 border max-w-2xl border-gray-200 rounded-lg shadow mx-auto gap-5 mb-5">
                    <div class="p-5">
                        <a href="#">
                            <h5 class="text-left text-2xl font-bold tracking-tight text-gray-900 dark:text-white mb-6">Money
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-100 lg:w-[1100px] md:w-auto ">
                        <p>Param 1</p>
                        <p>Param 2</p>
                        <p>Param 3</p>
                        </p>
                    </div>
                </div>
                <div class="pt-6 bg-red-800 border max-w-2xl border-gray-200 rounded-lg shadow mx-auto gap-5 mb-5">
                    <div class="p-5">
                        <a href="#">
                            <h5 class="text-left text-2xl font-bold tracking-tight text-gray-900 dark:text-white mb-6">
                                School</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-100 lg:w-[1100px] md:w-auto ">
                        <p>School Active : {{ $activeschool }}</p>
                        <p>School Inactive : {{ $inactiveschool }}</p>
                        </p>
                    </div>
                    <div class="bg-black ">
                        <canvas id="schoolPieChart" width="150" height="150"></canvas>
                    </div>
                </div>
                <!-- Script School Data -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var ctx = document.getElementById('schoolPieChart').getContext('2d');
                        var userPieChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: ['Active School', 'Inactive School'],
                                datasets: [{
                                    data: [{{ $activeschool }}, {{ $inactiveschool }}],
                                    backgroundColor: ['#36A2EB', '#FF6384'],
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                            }
                        });
                    });
                </script>


            </div>
        </div>
    </div>
@endsection
