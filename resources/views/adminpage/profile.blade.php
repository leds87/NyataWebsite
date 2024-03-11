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
            <div class=" py-9">
                <h1 class="lg:text-2xl text-center text-white bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                    Profile</h1>
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
            <div class=" mx-auto mt-8 p-4 shadow-md rounded-md w-1/3 mb-4 bg-zinc-100">
                <h1 class="text-2xl text-black font-semibold mb-4">{{ auth()->user()->name }}'s Profile</h1>
                <div class="flex items-center space-x-4 mb-5">
                    @if (auth()->user()->image)
                        <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="User Avatar"
                            class="w-12 h-12 rounded-full object-cover">
                    @else
                        <div class="text-gray-500">No avatar</div>
                    @endif
                    <div class="mx-auto">
                        <p class=" text-black font-semibold">{{ auth()->user()->name }}</p>
                        <p class=" text-black">{{ auth()->user()->email }}</p>
                        <p class=" text-black uppercase text-center">{{ auth()->user()->log }}</p>
                    </div>
                    <div class="pb-4">
                        @if (auth()->user()->log == 'admin')
                                <button class="bg-black px-2 py-2 rounded-xl text-white mt-4" data-modal-target="static-edit-admin"
                                data-modal-toggle="static-edit-admin">Edit</button>

                                <form action="/profileadminupdate%{{ auth()->user()->id }}" method="POST" class="" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
            
                                    <div id="static-edit-admin" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Edit {{auth()->user()->name}}'s Profile
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="static-edit-admin">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-5">
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
                                                    <div class="w-full my-4 px-3 ">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                                            Address
                                                        </label>
                                                        <input
                                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                            id="address" name="address" type="text" value="{{ auth()->user()->address }}">
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
                                                        <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                            Status
                                                            <span>Current : {{ auth()->user()->role }}</span>
                                                        </label>
                                                        <select
                                                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                            id="role" name="role" placeholder="{{ auth()->user()->role }}">
                                                            <option>Super</option>
                                                            <option>Admin</option>
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
                                                    
                                                    {{-- <div class="flex">
                                                        <button type="submit"
                                                        class="py-2 px-4 mx-auto my-4 text-sm font-medium text-center text-black border-2 rounded-lg bg-primary-900 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                        Submit</button>
                                                    </div> --}}
                                                </div>
                                                <!-- Modal footer -->
                                                <div
                                                    class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                    <button type="submit"
                                                        class="text-white mx-auto bg-blue-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 uppercase">
                                                        Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                        @else
                            <a href="/profileedit%{{ auth()->user()->slug }}">
                                <button class="bg-black px-3 py-2 rounded-xl text-white">Edit</button>
                            </a>
                        @endif
                    </div>
                    <div class="">
                        @if (auth()->user()->log == 'admin')
                        <button class="bg-black px-2 py-2 rounded-xl text-white" data-modal-target="static-modal2"
                        data-modal-toggle="static-modal2">Change Password</button>

                    <form action="/changepasswordadmin%{{ auth()->user()->id }}" method="POST" class="">
                        @csrf
                        @method('PUT')

                        <div id="static-modal2" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Change Password
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="static-modal2">
                                            <svg class="w-3 h-3" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-5">
                                        {{-- <div class="">
                                            <label for="current_password"
                                                class="block mb-2 text-sm font-medium text-gray-900 ">Current
                                                Password</label>
                                            <input type="password" name="current_password" id="current_password"
                                                placeholder="••••••••"
                                                class="bg-gray-50 border @error('current_password') is-invalid @enderror border-gray-300 my-3 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                required>
                                            @error('current_password')
                                                <p class="text-red-500 text-xs italic">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div> --}}
                                        <div>
                                            <label for="password"
                                                class="block mb-2 text-sm font-medium text-gray-900 
                                                ">New
                                                password</label>
                                            <input type="password" name="password" id="password"
                                                placeholder="••••••••"
                                                class="bg-gray-50 border my-3 border-gray-300 text-gray-900 @error('password') is-invalid @enderror
                                                sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                required>
                                            @error('password')
                                                <p class="text-red-500 text-xs italic">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="password_confirmation"
                                                class="block mb-2 text-sm font-medium text-gray-900 ">Confirm
                                                password</label>
                                            <input type="password" name="password_confirmation"
                                                id="password_confirmation" placeholder="••••••••"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg 
                                                @error('password_confirmation') is-invalid @enderror focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                required="">
                                            @error('password_confirmation')
                                                <p class="text-red-500 text-xs italic">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div
                                        class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button type="submit"
                                            class="text-white mx-auto bg-blue-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 uppercase">
                                            Change Password</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                        @else
                            <button class="bg-black px-3 py-2 rounded-xl text-white" data-modal-target="2"
                                data-modal-toggle="static-modal1">Change Password</button>

                            <form action="/changepassworduserprofile%{{ auth()->user()->id }}" method="POST" class="">
                                @csrf
                                @method('PUT')

                                <div id="static-modal1" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Change Password
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="static-modal1">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-5">
                                                {{-- <div class="">
                                                    <label for="current_password"
                                                        class="block mb-2 text-sm font-medium text-gray-900 ">Current
                                                        Password</label>
                                                    <input type="password" name="current_password" id="current_password"
                                                        placeholder="••••••••"
                                                        class="bg-gray-50 border @error('current_password') is-invalid @enderror border-gray-300 my-3 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        required>
                                                    @error('current_password')
                                                        <p class="text-red-500 text-xs italic">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div> --}}
                                                <div>
                                                    <label for="password"
                                                        class="block mb-2 text-sm font-medium text-gray-900 
                                                        ">New
                                                        password</label>
                                                    <input type="password" name="password" id="password"
                                                        placeholder="••••••••"
                                                        class="bg-gray-50 border my-3 border-gray-300 text-gray-900 @error('password') is-invalid @enderror
                                                        sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        required>
                                                    @error('password')
                                                        <p class="text-red-500 text-xs italic">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <label for="password_confirmation"
                                                        class="block mb-2 text-sm font-medium text-gray-900 ">Confirm
                                                        password</label>
                                                    <input type="password" name="password_confirmation"
                                                        id="password_confirmation" placeholder="••••••••"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg 
                                                        @error('password_confirmation') is-invalid @enderror focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        required="">
                                                    @error('password_confirmation')
                                                        <p class="text-red-500 text-xs italic">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div
                                                class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                <button type="submit"
                                                    class="text-white mx-auto bg-blue-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 uppercase">
                                                    Change Password</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>

            {{-- SECTION BOX 2 ADMIN DETAILS  --}}
            <div class="flex">
                <div class="mx-auto shadow-lg text-left w-1/3 pt-3 mb-5 pl-5 ">
                    <div class="text-2xl text-black font-bold ">Details </div>
                    <div class="my-2 border-2 border-gray-300"></div>
                    @auth
                        @if (auth()->user()->log == 'admin')
                            {{-- <h1 class="text-sm text-black mb-2">id : <span class="text-lg">{{ auth()->user()->id }}</span>
                            </h1> --}}
                            <h1 class="text-sm text-black mb-2">Name : <span
                                    class="text-lg">{{ auth()->user()->name }}</span>
                            </h1>
                            <h1 class="text-sm text-black mb-2">address : <span
                                    class="text-lg">{{ auth()->user()->address }}</span>
                            </h1>
                            <h1 class="text-sm text-black mb-2">email : <span
                                    class="text-lg">{{ auth()->user()->email }}</span></h1>
                            <h1 class="text-sm text-black mb-2">phone : <span
                                    class="text-lg">{{ auth()->user()->phone }}</span></h1>
                            <h1 class="text-sm text-black mb-2">role : <span
                                    class="text-lg">{{ auth()->user()->role }}</span>
                            </h1>
                            <h1 class="text-sm text-black mb-2">note : <span
                                    class="text-lg">{{ auth()->user()->note }}</span>
                            </h1>
                        @else
                            {{-- <h1 class="text-sm text-black mb-2">id : <span class="text-lg">{{ auth()->user()->id }}</span>
                            </h1> --}}
                            <h1 class="text-sm text-black mb-2">Name : <span
                                    class="text-lg">{{ auth()->user()->name }}</span>
                            </h1>
                            <h1 class="text-sm text-black mb-2">address : <span
                                    class="text-lg">{{ auth()->user()->address }}</span>
                            </h1>
                            <h1 class="text-sm text-black mb-2">email : <span
                                    class="text-lg">{{ auth()->user()->email }}</span></h1>
                            <h1 class="text-sm text-black mb-2">phone : <span
                                    class="text-lg">{{ auth()->user()->phone }}</span></h1>
                            <h1 class="text-sm text-black mb-2">tier : <span
                                    class="text-lg">{{ auth()->user()->tier }}</span>
                            </h1>
                            <h1 class="text-sm text-black mb-2">note : <span
                                    class="text-lg">{{ auth()->user()->note }}</span>
                            </h1>
                            <h1 class="text-sm text-black mb-2">since : <span
                                    class="text-lg">{{ auth()->user()->since }}</span></h1>
                            <h1 class="text-sm text-black mb-2">status : <span
                                    class="text-lg">{{ auth()->user()->status }}</span>
                            </h1>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>


    {{-- <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white text-black antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 ">
                        <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                        <div>
                            <a href="#" rel="author" class="text-xl font-bold text-gray-900 ">Admin</a>
                            <p class="text-base text-gray-500 dark:text-gray-400">Graphic Designer, educator & CEO Flowbite</p>
                            <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">{{$datanews->date}}</time></p>
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl ">{{$datanews->title}}</h1>
                <p class="">Children ID <span class=" bg-black text-white rounded-md px-2 py-2">{{$datanews->children_id}}</span> </p>
            </header>
            <p class="border-4 border-gray-50 pb-10 mb-10">{{$datanews->description}}</p>
            
            <section class="not-format">
                <form class="mb-6">
                    <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 ">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment" rows="6"
                            class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0  dark:placeholder-gray-400 "
                            placeholder="Write a comment..." required></textarea>
                    </div>
                </form>
            </section>
        </article>
    </div>
  </main>
  
  <aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800">
    <div class="px-4 mx-auto max-w-screen-xl">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Related articles</h2>
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
            <article class="max-w-xs">
                <a href="#">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png" class="mb-5 rounded-lg" alt="Image 1">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">Our first office</a>
                </h2>
                <p class="mb-4 text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many changes! After months of preparation.</p>
                <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                    Read in 2 minutes
                </a>
            </article>
            <article class="max-w-xs">
                <a href="#">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-2.png" class="mb-5 rounded-lg" alt="Image 2">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">Enterprise design tips</a>
                </h2>
                <p class="mb-4  text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many changes! After months of preparation.</p>
                <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                    Read in 12 minutes
                </a>
            </article>
            <article class="max-w-xs">
                <a href="#">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-3.png" class="mb-5 rounded-lg" alt="Image 3">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">We partnered with Google</a>
                </h2>
                <p class="mb-4  text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many changes! After months of preparation.</p>
                <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                    Read in 8 minutes
                </a>
            </article>
            <article class="max-w-xs">
                <a href="#">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-4.png" class="mb-5 rounded-lg" alt="Image 4">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">Our first project with React</a>
                </h2>
                <p class="mb-4  text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many changes! After months of preparation.</p>
                <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                    Read in 4 minutes
                </a>
            </article>
        </div>
    </div>
  </aside> --}}
@endsection
