@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
@section('page-content')
    <div class="bg-white py-20">


        <div class="content">

            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                User Overview</h1>

            <div class="flex flex-wrap py-2">
                <div class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 shadow mb-5 py-5">
                    <!-- User Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4">News </div>
                    </div>

                    <div class="flex flex-col items-center rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                        <div class="p-4 ">
                            <span class="mb-3 text-lg font-normal dark:text-gray-100">
                                {{-- <p> *This news is related to the supported children only and admin news*</p>
                                <p> Nyata successfully approached a school in East Java </p>
                                <p> Mina (supported child by user) is getting graduation on 15th July at Aloysius</p> --}}
                                @foreach ($datanews->take(6) as $items)
                                    <div>
                                        <a href="/newsshow/{{ $items->id }}" class="flex flex-wrap pb-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                            </svg>
                                            {{ $items['title'] }}</a>
                                    </div>
                                @endforeach
                            </span>
                        </div>
                    </div>
                </div>

                <div class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 shadow mb-5 py-5">
                    <!-- Child Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4">Balance </div>

                        <div class="w-1/4 flex flex-wrap ">
                            <div class="text-center">
                                <a href='childrenshow' class="text-white text-md text-center  ">Details
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

                    <div class="flex flex-col items-center rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                        <div class="p-4">
                            <div class="mb-3 text-xl font-normal text-gray-900 ">
                                <p>Balance: 600K</p>
                                <p>Last Month Support = 200k</p>
                                <p>Expected Support Next Month = 250k (*50k per child*)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap py-2">
                <div class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 shadow mb-5 py-5">
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


                    <div class="flex flex-col items-center rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                        <div class="p-4">
                            <span class="mb-3 text-xl font-normal dark:text-gray-100">
                                <p>Name : {{ auth()->user()->name }} </p>
                                <p>Address :{{ auth()->user()->address }} </p>
                                <p>Contact No: {{ auth()->user()->phone }} </p>
                                <p>Email : {{ auth()->user()->email }} </p>
                            </span>
                        </div>
                    </div>

                </div>

                <div class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 shadow mb-5 py-5">
                    <!-- Child Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4">Supported Kids </div>

                        <div class="w-1/4 flex flex-wrap ">
                            <div class="text-center">
                                <a href='childrenshow' class="text-white text-md text-center  ">Details
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

                    <div class="flex flex-col items-center rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                        <div class="p-4">
                            <span class="mb-3 text-xl font-normal dark:text-gray-100">
                                <p>Under Support Child :
                                </p>
                                <p>Graduated Child :{{ $successchildren }} </p>
                            </span>
                        </div>
                    </div>
                </div>
            @endsection