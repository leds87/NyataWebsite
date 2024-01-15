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
                        <div class="p-4 ">
                            <span class="mb-3 text-lg font-normal dark:text-gray-100">
                                <p> *This news is related to the supported children only and admin news*</p>
                                <p> Nyata successfully approached a school in East Java </p>
                                <p> Mina (supported child by user) is getting graduation on 15th July at Aloysius</p>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 shadow mb-5 py-5">
                    <!-- Child Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4">Balance </div>

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
                        <div class="p-4">
                            <span class="mb-3 text-xl font-normal dark:text-gray-100">
                                <p>Balance: 600K</p>
                                <p>Last Month Support = 200k</p>
                                <p>Expected Support Next Month = 250k (*50k per child*)</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap py-2">
                <div class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 shadow mb-5 py-5">
                    <!-- Money Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4"> Profile </div>

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
                        <div class="p-4">
                            <span class="mb-3 text-xl font-normal dark:text-gray-100">
                            <p>Name      : {{auth()->user()->name}} </p>
                            <p>Address   :{{auth()->user()->address}}  </p>
                            <p>Contact No: {{auth()->user()->phone}} </p>
                            <p>Email     : {{auth()->user()->email}} </p>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="pt-6 bg-red-800 border max-w-full border-gray-200 mx-auto rounded-lg lg:w-2/5 shadow mb-5 py-5">
                    <!-- Child Data -->
                    <div class="flex flex-row w-full bg-black p-5">
                        <div class=" text-2xl tracking-tight font-bold w-3/4"> Supported Kids </div>

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
                        <div class="p-4">
                            <span class="mb-3 text-xl font-normal dark:text-gray-100">
                                <p>Under Support Child : </p>
                                {{-- {{ $activechildren }} --}}
                                <p>Graduated Child : </p>
                            </span>
                        </div>
                    </div>
                </div>
            @endsection



            

         