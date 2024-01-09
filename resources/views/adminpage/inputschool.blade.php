@extends('layout.default')
{{-- @section('title', __('AdminPage')) --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
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
            <a href='schoolshow' class="p-4 block hover:bg-gray-600">School</a>
            <a href='childrenshow' class="p-4 block hover:bg-gray-600">Children</a>
            <a href='usershow' class="p-4 block hover:bg-gray-600">User</a>
            <a href='log' class="p-4 block hover:bg-gray-600">Log</a>
            <a href='adminshow' class="p-4 block hover:bg-gray-600">Admin</a>
        </div>

        <div class="content">
            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                School Input</h1>
            <form action="/inputschool" method="POST" class="w-full max-w-lg py-5 mx-auto">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            School Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="school_name" name="school_name" type="text" placeholder="School Name">
                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                            Location
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="location" name="location" type="text" placeholder="Bdg/JKT">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Address
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="address" name="address" type="text" placeholder="Bandung/Jakarta/etc">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Children
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="children" name="children"type="number" placeholder="children total" maxlength="3">
                        {{-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> --}}
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Status
                    </label>
                    <div class="relative">
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="status" name="status">
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
                    <button type="submit"
                        class="py-2 px-4 mx-auto my-4 text-sm font-medium text-center text-black border-2 rounded-lg bg-primary-900 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
