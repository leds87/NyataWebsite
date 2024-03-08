@extends('layout.default')
@extends('adminpage.layoutadmin')
@php
    app(\App\Http\Controllers\sidebar_controller::class)->getNotificationCount();
@endphp
{{-- @section('title', __('AdminPage')) --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
@section('page-content')
    <div class="bg-white py-20">
        <div class="content">
            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
               Admin Profile Edit</h1>
            <form action="/profileeditadmin%{{ auth()->user()->slug }}" enctype="multipart/form-data" method="POST" class="w-full max-w-lg py-5 mx-auto">
                @csrf
                @method('PUT')
                <div class="w-full my-4 px-3 mb-6 md:mb-0 grid grid-cols-2 gap-4">
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="name" name="name" type="text" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                            Email
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="email" name="email" type="email" value="{{ auth()->user()->email }}">
                    </div>
                </div>
                {{-- <div class="w-full my-4 md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                            Password
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="password" name="password" type="password" value="{{auth()->user()->password}}">
                    </div> --}}
                <div class="w-full my-4 px-3 ">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Address
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="address" name="address" type="text" value="{{ auth()->user()->address }}">
                </div>

                {{-- <div class="flex flex-wrap -mx-3 mb-2"> --}}
                <div class="w-full my-4 md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Tier
                        <span>Current : {{ auth()->user()->tier }}</span>
                    </label>
                    </label>
                    <div class="relative">
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="tier" name="tier">
                            <option>Loyal</option>
                            <option>Supporter</option>
                            <option>Helper</option>
                        </select>
                    </div>
                </div>
                <div class="w-full my-4 px-3  md:mb-0 grid grid-cols-2 gap-4">
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Phone
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="phone" name="phone"type="phonenumber" value="{{ auth()->user()->phone }}" maxlength="14">
                    </div>
                    {{-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> --}}
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            Note
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="note" name="note" type="text" value="{{ auth()->user()->note }}">
                    </div>
                </div>
                <div class="w-full my-4 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Since
                    </label>
                    <input datepicker datepicker-format="yyyy-mm-dd" type="text" id="since" name="since"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Select date" value="{{ auth()->user()->since }}">

                </div>
                <div class="w-full my-4 px-3">
                    <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Status
                        <span>Current : {{ auth()->user()->status }}</span>
                    </label>
                    <select
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="status" name="status" placeholder="{{ auth()->user()->status }}">
                        <option>Active</option>
                        <option>Inactive</option>
                        <option>Postpone</option>
                    </select>
                </div>
                <div class="flex px-3">
                    <div class="mt-3"> <!-- Upload Image -->
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="image">Upload file</label>
                        <input type="hidden" name="oldimage" value="{{auth()->user()->image}}">
                        <input name="image" id="image" type="file"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none  dark:border-gray-600 dark:placeholder-gray-400">
                    </div>
                    <div class="relative">
                        <div> <!-- Current Image -->
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="Images">Current Image file</label>
                            @if (auth()->user()->image)
                            <div class="image-container inline-flex mx-4 mb-4">
                                    <img src="{{ asset('storage/' . auth()->user()->image) }}"
                                        alt="{{ auth()->user()->image }}"
                                        class="w-24  object-cover rounded-md" name="oldImage">
                                    <div class="mx-2"></div>
                            </div>
                        @else
                            <p class="text-gray-400 dark:text-gray-600">No images available
                            </p>
                        @endif
                        </div>
                    </div>
                </div>
                
                <div class="flex">
                    <button type="submit"
                    class="py-2 px-4 mx-auto my-4 text-sm font-medium text-center text-black border-2 rounded-lg bg-primary-900 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Submit</button>
                </div>
                </form>
        </div>
    </div>
@endsection
