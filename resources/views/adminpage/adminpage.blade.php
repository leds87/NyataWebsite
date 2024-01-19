@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
@section('page-content')
    <div class="bg-white py-20">


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
                            <div>
                                <a href='usershow' class="text-white text-md ">Details
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                                </a>
                            </div>
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
                            <div class="">
                                <a href='childrenshow' class="text-white text-md ">Details
                            </div>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                                </a>
                            </div>
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
                                    data: [{{ $activechildren }}, {{ $educatedchildren }},
                                        {{ $successchildren }}
                                    ],
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
                            <div class="">

                                <a href='' class="text-white text-md ">Details
                            </div>
                            <div class="">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                                </a>
                            </div>
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
                            <div class="">
                                <a href='schoolshow' class="text-white text-md ">Details
                            </div>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                                </a>
                            </div>
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
