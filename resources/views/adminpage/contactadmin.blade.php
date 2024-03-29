@extends('layout.default')
@extends('adminpage.layoutadmin')
@php
    app(\App\Http\Controllers\sidebar_controller::class)->getNotificationCount();
@endphp
@section('page-content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>

    <!-- TITLE  -->
    <section class="bg-[#f8f5f2]">
        <div class="content">
            {{-- py-8 lg:py-16 px-4 mx-auto max-w-screen-md  --}}

            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-500 ">Contact Admin</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-600 sm:text-xl lg:text-sm">
                We will inform you as soon as we can within 2 - 3 working days</p>


            <!-- LIST OF CONTENT  -->
            <form action="/contactadmin" method="POST"class="space-y-8">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                            Name</label>
                        {{-- <label for="name" name="name" id="name"
                            class="block mb-2  p-3 bg-gray-300 text-sm font-medium text-gray-900 dark:text-gray-300">
                            {{ auth()->user()->name }}</label> --}}

                        <input type="text" id="name" name="name"
                            class="shadow-sm bg-gray-300 cursor-not-allowed border border-gray-300 text-gray-900  text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                            placeholder="John Doe" value="{{auth()->user()->name}}" tabindex="-1" >
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                            email</label>
                        {{-- <label for="email" id="email" name="email"
                            class="block rounded-lg mb-2 p-3 bg-gray-300 text-sm font-medium text-gray-900 dark:text-gray-300">
                            {{ auth()->user()->email }}</label> --}}
                        <input type="email" id="email" name="email"
                            class="shadow-sm bg-gray-300 cursor-not-allowed border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                            placeholder="name@mail.com" value="{{auth()->user()->email}}" tabindex="-1">
                    </div>
                </div>


                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone
                        Number</label>
                    {{-- <label for="phone" id="phone" name="phone"
                        class="block mb-2 rounded-lg p-3 bg-gray-300 text-sm font-medium text-gray-900 dark:text-gray-300">{{ auth()->user()->phone }}</label> --}}
                    <input type="number" id="phone" name="phone" maxlength="15"
                        class="bg-gray-300 cursor-not-allowed border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="08xxx"value="{{ auth()->user()->phone }}" tabindex="-1">
                </div>

                <div>
                    <label for="subject"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                    <input type="text" id="subject" name="subject"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="John Doe" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="projectdesc"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description/Note</label>
                    <textarea id="description" name="description" rows="6"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="I have a problem..."></textarea>
                </div>
                <div class="flex">
                    <button type="submit"
                        class="py-2 px-4 mx-auto text-sm font-medium text-center text-black border-2 rounded-lg bg-primary-900 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send
                        message</button>
                </div>
            </form>

        </div>
    </section>
@endsection
