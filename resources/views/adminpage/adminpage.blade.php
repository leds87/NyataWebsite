@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
@section('page-content')
    <div class="bg-white py-20">


        <div class="content">

            {{-- ERROR MESSAGES --}}
            @if (session('success'))
                <div id="alert-3"
                    class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium block">
                        {{ session('success') }}
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
                @endif
            @if($errors->any())
                <div id="alert-2"
                    class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                        {{ session('error') }}
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-2" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif



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

                                <a href='moneyinformationdata' class="text-white text-md ">Details
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
                                <p>Total Donation :                                          
                                    @php
                                    $amount = ($totaldonation);
                                    $formattedAmount = number_format($amount, 0, ',', '.');
                                @endphp
                                
                                Rp {{ $formattedAmount }}
                             </p>
                                <p>Total User Who Donated :  {{$totaluserdonated}} person </p>
                                <p>Total Supported Child : {{$totalsupportedchildren}} children</p>
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

                <div
                    class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 shadow mb-5 py-5">
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
