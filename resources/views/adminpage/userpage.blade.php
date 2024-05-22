@extends('layout.default')
@extends('adminpage.layoutadmin')
@php
    app(\App\Http\Controllers\sidebar_controller::class)->getNotificationCount();
@endphp
{{-- @section('title', 'AdminPage') --}}
@section('page-content')
    <div class="bg-white py-20">
        <div class="content">
            {{-- TITLE --}}
            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-[#ff0000] px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                User Page Overview</h1>

            {{-- SUCCESS MESSAGES --}}
            @if (session('success'))
                <div id="alert-3"
                    class="flex  w-1/3 p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium block capitalize">
                        {{ session('success') }}
                    </div>
                    <button type="button"
                        class="-my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
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

            {{-- ERROR MESSAGES --}}
            @if ($errors->any())
                <div class="flex">
                    <div id="alert-2"
                        class="flex mx-auto w-1/3 items-center p-2 mb-4 text-red-800 rounded-lg bg-red-600 dark:text-red-400"
                        role="alert">
                        <svg class=" w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ms-3 text-sm tracking-wide font-medium text-white">
                            Error Message!
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-white text-xs ">{{ $error }}</li>
                                @endforeach
                            </ul>
                            {{-- {{ session('error') }} --}}
                            {{-- <strong>{{ $message }}</strong> --}}
                            @error('password_confirmation')
                                <p class="text-red-500 text-xs italic">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <button type="button"
                            class=" inset-y-0 left-52 -my-1.5 bg-gray-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8  dark:text-red-400 dark:hover:bg-gray-700"
                            data-dismiss-target="#alert-2" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                </div>
            @endif


            {{-- NEWS & BALANCE --}}
            <div class="lg:grid grid-cols-2 gap-8 sm:grid-cols-1 mb-4">
                <div
                    class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 sm:min-w-full shadow mb-5 py-5">
                    <!-- User Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4">News </div>
                        <div class="flex flex-wrap ">
                            <div class="text-center">
                                <a href='newsusershow' class="text-white text-md text-center  ">Details
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                        <div class="p-4 ">
                            <span class="mb-3 text-lg font-normal dark:text-gray-100">
                                {{-- <p> *This news is related to the supported children only and admin news*</p>
                                <p> Nyata successfully approached a school in East Java </p>
                                <p> Mina (supported child by user) is getting graduation on 15th July at Aloysius</p> --}}
                                @foreach ($datanews->take(6) as $items)
                                    <div>
                                        <a href="/newsshow/{{ $items->slug }}" class="flex flex-wrap pb-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                            </svg>
                                            {{ $items['title'] }} </a>
                                    </div>
                                @endforeach
                            </span>
                        </div>
                    </div>
                </div>

                <div
                    class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 sm:min-w-full shadow mb-5 py-5">
                    <!-- Child Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4">Balance </div>

                        <div class="w-1/4 flex flex-wrap ">
                            <div class="text-center">
                                @if ($expectedsupport == 0)
                                @else
                                    <div class="flex flex-wrap ">
                                        <div class="text-center">
                                            <a href='userbalance' class="text-white text-md text-center  ">Details
                                        </div>
                                        <div class="pt-[1px] mx-auto ">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </div>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="  rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                        <div class="p-4">
                            <div class="mb-3 text-xl font-normal text-gray-900 ">
                                {{-- <p class="text-xl font-normal text-gray-200">Balance: {{}}</p> --}}
                                <p class="text-xl font-normal text-gray-200">Last Month Support Rp
                                    {{ $totallastmonthsupport }} </p>
                            </div>
                            <p class="text-xl font-normal text-gray-200">Expected Support Next Month Rp
                                {{ $expectedsupport }}</p>
                            <a href="childrennotsupported">
                                <div class=" flex justify-items-center p-4 md:p-5">
                                    <button type="button"
                                        class="text-white mx-auto bg-red-700 hover:bg-red-800  focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-24 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 uppercase">
                                        Support More!
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- PROFILE & DETAILS --}}
            <div class="lg:grid grid-cols-2 gap-8 sm:grid-cols-1 mb-4">
                <div
                    class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 sm:min-w-full shadow mb-5 py-5">
                    <!-- Money Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4">Profile </div>

                        <div class="w-1/4 flex flex-wrap ">
                            <div class="text-center">
                                <a href='profile' class="text-white text-md text-center  ">Details
                            </div>
                            <div class="pt-[1px] mx-auto ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </div>
                            </a>
                        </div>
                    </div>


                    <div class="flex flex-col  rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                        <div class="p-4">
                            <span class="mb-3 text-xl font-normal dark:text-gray-100">
                                <p class="text-transform: capitalize">Name : {{ auth()->user()->name }} </p>
                                <p class="text-transform: capitalize">Address : {{ auth()->user()->address }} </p>
                                <p class="text-transform: capitalize">Contact No: {{ auth()->user()->phone }} </p>
                                <p class="text-transform: none">Email : {{ auth()->user()->email }} </p>
                            </span>
                        </div>
                    </div>

                </div>

                <div
                    class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 sm:min-w-full shadow mb-5 py-5">
                    <!-- Child Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4">Supported Kids </div>

                        <div class="w-1/4 flex flex-wrap ">
                            <div class="text-center">
                                <a href='childrensupported' class="text-white text-md text-center  ">Details
                            </div>
                            <div class="pt-[1px] mx-auto ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col  rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                        <div class="p-4">
                            <span class="mb-3 text-xl font-normal dark:text-gray-100">
                                <p>Under Support Child : {{ $undersupportchild }}
                                </p>
                                <p>Graduated Child : {{ $graduatedchild }} </p>
                            </span>
                        </div>
                    </div>
                </div>
            @endsection
