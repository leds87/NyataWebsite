@extends('layout.default')
{{-- @extends('adminpage.layoutadmin') --}}
@php
    app(\App\Http\Controllers\sidebar_controller::class)->getNotificationCount();
@endphp
{{-- @section('title', __('AdminPage')) --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
@section('page-content')
    <div class="bg-white content">

        <div class=" py-9">
            <h1 class="lg:text-2xl text-center text-white rounded-xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                News Show</h1>
        </div>

        <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white text-black antialiased">
            <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                <article
                    class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                    <header class="mb-4 lg:mb-6 not-format">
                        <address class="flex items-center mb-6 not-italic">
                            <div class="inline-flex items-center mr-3 text-sm text-gray-900 ">
                                <img class="mr-4 w-16 h-16 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                                <div>
                                    <a href="#" rel="author" class="text-xl font-bold text-gray-900 ">Admin</a>
                                    <p class="text-base text-gray-500 dark:text-gray-400">NYATA Admin Author</p>
                                    <p class="text-base text-gray-500 dark:text-gray-400">
                                        <time>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $datanews->date)->format('F jS, Y') }}</time>
                                    </p>
                                </div>
                            </div>
                        </address>
                        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl ">
                            {{ $datanews->title }}</h1>
                        @if ($datanews->children_id == null)
                            <p> news for all users</p>
                        @else
                            <p class="">Children name <span
                                    class=" bg-black text-white rounded-md px-2 py-2">{{ $datachildren->name }}</span>
                        @endif
                        </p>
                    </header>
                    <p class="pb-10 mb-10">{{ $datanews->description }}</p>
                    <div class="flex">
                        <div class="mx-auto">
                            <a href=" {{ route('userpage') }}">
                                <button class="bg-black px-5 py-5 text-white rounded-lg ">
                                    Back
                                </button>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </main>
    </div>
@endsection
