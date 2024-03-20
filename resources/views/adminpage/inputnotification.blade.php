@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
@section('page-content')
    <div class="bg-white py-20">


        <!-- TITLE  -->
        <div class="content">
            <h1 class="lg:text-2xl text-center text-white bg-green-800 px-2 rounded-xl py-3 font-bold mb-4 mx-auto md:text-sm">
                Notification Input</h1>


            <!-- FORM  -->
            <form action="/inputnotification" method="POST" class="w-full max-w-lg py-5 mx-auto">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            From
                        </label>
                        <select name="from" id="from"
                            class="text-gray-400 font-normal capitalize focus:text-gray-700 w-full px-2 py-2 bg-gray-200 focus:bg-white border-none">
                            {{-- <option value="{{$user}}">Administrator</option> --}}
                            <option value="{{ auth()->user()->name }} [Administrator]">{{ auth()->user()->name }}
                                [Administrator]</option>
                        </select>
                        {{-- <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="from" name="from" type="text" placeholder="Admin"> --}}
                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    </div>
                    <div class="w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            to user_name
                        </label>
                        <select name="to" id="to"
                            class="text-gray-400 font-normal focus:text-gray-700 w-full px-2 py-2 bg-gray-200 focus:bg-white border-none">
                            @foreach ($datauser as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                            <option value="">All</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            Title
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="title" name="title" type="text" required placeholder="Support 300 New Students">
                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                            date
                        </label>
                        <input datepicker datepicker-format="yyyy-mm-dd" type="text" id="date" name="date"
                            autocomplete="off"
                            class="bg-gray-200 border focus:bg-white border-gray-300 mb-4 p-3 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date" required>
                    </div>
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Description
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="description" name="description" type="text" required
                            placeholder="This requires economy attention...">
                    </div>
                    <div class="mx-auto py-5">
                        <button type="submit"
                            class="py-2 bg-red px-4 mx-auto my-4 text-sm font-medium text-center text-black border-2 rounded-lg bg-primary-900 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Submit</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection
