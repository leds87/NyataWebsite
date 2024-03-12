@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
@section('page-content')
    <div class="bg-white py-20">
        <div class="content">
            <div class=" py-9">
                <h1 class="lg:text-2xl text-center text-white bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                    User Information Data</h1>
            </div>

            {{-- SUCCESS MESSAGES --}}
            @if (session('success'))
                <div id="alert-3"
                    class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
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

            {{-- ERROR MESSAGES --}}
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
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
                        {{-- <strong>{{ $message }}</strong> --}}
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


            {{-- SECTION BOX 1 ADMIN PROFILE MESSAGES --}}
            <div class="lg:grid grid-cols-2 lg:gap-4  ">
                <div class="mt-8 p-4 shadow-md rounded-md  mb-4 bg-zinc-100">
                    <h1 class="text-2xl text-black font-semibold mb-4">Children Information </h1>
                    <div class="mx-auto">
                        <p class="font-semibold text-black">Total Child: {{ $childrencount }}</p>
                        <p class="font-semibold text-black">Child Active: {{ $activechildren }}</p>
                        <p class="font-semibold text-black">Child Educated: {{ $educatedchildren }}</p>
                        <p class="font-semibold text-black">Child Success: {{ $successchildren }}</p>

                    </div>
                    <div class="pb-4">
                    </div>
                </div>
                <div class="mt-8 p-4 shadow-md rounded-md  mb-4 bg-zinc-100">
                    <h1 class="text-2xl text-black font-semibold mb-4">Supported Child</h1>
                    <div class="mx-auto">
                        <p class=" text-black font-semibold"> Total Supported Child : {{$notsupportedchildren}} child
                        </p>
                        <p class=" text-black font-semibold"> Total Child Not Supported :{{$notsupportedchildren}} 
                            child
                        </p>
                        <p class=" text-black font-semibold">Total Children : {{$childrencount}} child</p>
                    </div>
                    <div class="pb-4">
                    </div>
                </div>
            </div>

            {{-- SECTION BOX 2 DETAILS  --}}

            <div class="shadow-lg text-left w-full pt-3 mb-5 pl-5 ">
                <div class="text-2xl text-black font-bold ">Details </div>
                <div class="my-2 border-2 border-gray-300"></div>
                <div class="flex flex-col items-center rounded-lg shadow md:flex-row h-auto max-w-4xl ">
                    <div class="mx-auto">
                        <div class="sm:-mx-6 lg:-mx-8">
                            <div class="inline-block  py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full text-left text-gray-900 text-sm font-light">
                                        <thead class="border-b font-medium dark:border-neutral-500">
                                            <tr>
                                                <th scope="col" class="px-6 py-4">ID</th>
                                                <th scope="col" class="px-6 py-4">Name</th>
                                                <th scope="col" class="px-6 py-4">school</th>
                                                <th scope="col" class="px-6 py-4">Location</th>
                                                <th scope="col" class="px-6 py-4">age</th>
                                                <th scope="col" class="px-6 py-4">Status</th>
                                                <th scope="col" class="px-6 py-4">Required Donation</th>
                                                <th scope="col" class=" px-6 py-4">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr class="border-b dark:border-neutral-500">
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $item['id'] }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $item['name'] }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $item['school'] }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $item['location'] }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $item['age'] }}</td>
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $item['status'] }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4  w-1/2">
                                                        @php
                                                            $amount = $item['required_donation'];
                                                            $formattedAmount = number_format($amount, 0, ',', '.');
                                                        @endphp
                                                        <p class="">Rp {{ $formattedAmount }}</p>
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        <button type="button"
                                                            class="bg-green-600 text-white px-2 py-2 rounded-lg"> <a
                                                                href="/childrenedit/{{ $item->id }}/edit">Edit</a>
                                                        </button>
                                                        <form action="/childrendestroy/{{ $item->id }}"
                                                            method="POST" class="inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="bg-red-600 text-white px-2 py-2 rounded-lg"
                                                                onclick="return confirm('Are You Sure?')"> HAPUS
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
