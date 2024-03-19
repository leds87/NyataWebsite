@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
@php
    app(\App\Http\Controllers\sidebar_controller::class)->getNotificationCount();
@endphp
@section('page-content')
    <div class="bg-white py-20">
        <div class="content">
            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                All News Overview</h1>
            {{-- <a href='inputnotification' class="text-gray-800 px-2 py-2 border-2 bg-blue-500">input notification</a> --}}
            <section class="">
                <section class=" text-gray-900">
                    <div class="py-8 lg:py-16 mx-auto max-w-screen-md">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 ">News List
                        </h2>
                        @foreach ($datanews as $item)
                            <div id="alert-additional-content-{{ $item->id }}"
                                class="p-4 mb-4 text-black border  rounded-lg " role="alert">
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <h3 class="text-lg font-medium">
                                        <span class="capitalize font-semibold"> {{ $item['title'] }} </span>
                                    </h3>
                                </div>
                                <div class="mt-2 mb-4 text-sm">
                                    {{-- <p class="">TITLE :{{ $item['title'] }}</p> --}}
                                    <p class="capitalize">{{ $item['description'] }}</p>
                                    <span
                                        class="">{{ \Carbon\Carbon::parse($item['date'])->format('l jS F Y') }}</span>
                                    {{-- <p class="">TO : {{ $item['to'] }}</p> --}}

                                </div>
                                <div class="flex">
                                    <a href="newsshow/{{$item->id}}">
                                        <button type="button"
                                            class="text-white bg-green-800 hover:bg-slate-900 focus:ring-4 focus:outline-none focus:ring-slate-200 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center">
                                            <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 14">
                                                <path
                                                    d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                            </svg>
                                            View more
                                        </button>
                                    </a>
                                </div>
                            </div>






                            {{-- <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                role="alert"> <!-- Alert that Important, Can not be dismiss if needed -->
                                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Info alert! {{ $item['date'] }}</span>
                                    <p>Change a few things up and try submitting again.</p>
                                    <p class="">FROM :{{ $item['from'] }}</p>
                                    <p class="">TO : {{ $item['to'] }}</p>
                                    <p class="">TITLE :{{ $item['title'] }}</p>
                                    <p class="">DESCRIPTION : {{ $item['description'] }}</p>
                                </div>
                            </div> --}}
                        @endforeach
                    </div>
                </section>
            </section>
            {{-- @foreach (Auth::user()->unreadnotifications as $notification) <!-- THIS IS FOR DEFAULT NOTIFICATION FROM LARAVEL -->
                <div class="flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                      <form action="markasread_{{$notification->id}}" method="POST">
                        @csrf
                        <span class="font-medium">Info alert! {{$notification->data['message']}}</span>
                        <button type="submit">
                          <span class="border-2 px-2 py-1 right-10">Dismiss</span>
                        </button>
                      </form>
                    </div>
                </div>
            @endforeach --}}
        </div>
    </div>
    <!-- Main modal -->
    @foreach ($datanews as $item)
        <div id="viewmoremodal{{ $item->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            {{ $item['title'] }}
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="viewmoremodal{{ $item->id }}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-5">
                        <div class="flex">
                            <div>
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900  ">
                                    <span>{{ $item['name'] }}</span>
                                </h5>
                                <p class="text-gray-600 dark:text-gray-400 mb-2 mr-3 inline-flex capitalize">
                                    {{ $item['from'] }}
                                </p>
                                <p class="text-gray-600 dark:text-gray-400 mb-2 mr-3 flex ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                    </svg>
                                    <span
                                        class="">{{ \Carbon\Carbon::parse($item['date'])->format('l jS F Y') }}</span>
                                </p>
                                {{-- <p class="text-gray-600 dark:text-gray-400 mb-2  mr-3 inline-flex">
                                {{ $item['location'] }}
                            </p> --}}
                                <p class="mb-3 font-normal text-gray-800"><span
                                        class="normal-case">{{ $item['description'] }}
                                    </span> </p>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <form action="/notifreadupdate/{{ $item->id }}" method="POST">
                        @csrf
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="static-modal_{{ $item->id }}" type="submit"
                                class="text-white mx-auto bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 uppercase">
                                Dismiss</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
