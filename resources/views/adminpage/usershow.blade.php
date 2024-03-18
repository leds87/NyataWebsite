@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
@section('page-content')
    <div class="bg-white py-20">
        <div class="content">
            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                User Overview</h1>
            {{-- SUCCESS MESSAGES --}}
            @if (session('success'))
                <div id="alert-3"
                    class="flex mx-auto w-1/3 items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
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



            <a href='inputuser' class="text-gray-800 px-2 py-2 border-2 bg-blue-500">input user</a>
            <section class=""> <!-- Contact Us-->
                <section class=" text-gray-900">
                    <div class="py-8 lg:py-16">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 ">User List</h2>


                        <div class="overflow-x-auto">
                            <table class="min-w-full text-left text-gray-900 text-sm font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr class="bg-gray-200">
                                        <th scope="col" class="px-6 py-4">ID</th>
                                        <th scope="col" class="px-6 py-4">Name</th>
                                        {{-- <th scope="col" class="px-6 py-4">Address</th> --}}
                                        <th scope="col" class="px-6 py-4">Email</th>
                                        <th scope="col" class="px-6 py-4">Phone</th>
                                        <th scope="col" class="px-6 py-4">Tier</th>
                                        <th scope="col" class="px-6 py-4">Note</th>
                                        <th scope="col" class="px-6 py-4">Since</th>
                                        <th scope="col" class="px-6 py-4">Status</th>
                                        <th scope="col" class="px-6 py-4 text-center">Photo</th>
                                        <th scope="col" class="px-6 py-4 text-center">Action</th>
                                        <th scope="col" class="">Reset Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['id'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['name'] }}</td>
                                            {{-- <td class="whitespace-nowrap px-6 py-4">{{$item['address']}}</td> --}}
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['email'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['phone'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['tier'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['note'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['since'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $item['status'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                @if ($item->image)
                                                    <div class="image-container inline-flex mx-4 mb-4">
                                                        <img src="{{ asset('storage/' . $item->image) }}"
                                                            alt="{{ $item->image }}"
                                                            class="w-10 h-10 object-cover rounded-md">
                                                        <div class="mx-2"></div>

                                                    </div>
                                                @else
                                                    <p class="text-gray-400 dark:text-gray-600">No images
                                                        available
                                                    </p>
                                                @endif
                                            </td>

                                            <td class="whitespace-nowrap px-6 py-4">
                                                <button type="button" class="bg-green-600 text-white px-2 py-2 rounded-lg">
                                                    <a href="/useredit%{{ $item->id }}">Edit</a> </button>
                                                <form action="{{ route('destroyuser', $item->id) }}" method="POST"
                                                    class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-600 text-white px-2 py-2 rounded-lg"
                                                        onclick="return confirm('Are You Sure?')"> Hapus
                                                    </button>
                                                </form>
                                            </td>
                                            <td>
                                                <button class="bg-black px-2 py-2 rounded-xl text-white"
                                                    data-modal-target="static-modal{{ $item->id }}"
                                                    data-modal-toggle="static-modal{{ $item->id }}">Change
                                                    Password</button>

                                                <form action="/changepassworduser%{{ $item->id }}" method="POST"
                                                    class="">
                                                    @csrf
                                                    @method('PUT')

                                                    <div id="static-modal{{ $item->id }}" data-modal-backdrop="static"
                                                        tabindex="-1" aria-hidden="true"
                                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                            <!-- Modal content -->
                                                            <div
                                                                class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                <!-- Modal header -->
                                                                <div
                                                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                    <h3
                                                                        class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                        Change Password {{ $item->name }}
                                                                    </h3>
                                                                    <button type="button"
                                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                        data-modal-hide="static-modal{{ $item->id }}">
                                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" viewBox="0 0 14 14">
                                                                            <path stroke="currentColor"
                                                                                stroke-linecap="round"
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
                                                                            class="block mb-2 text-sm font-medium text-gray-900 ">New
                                                                            password</label>
                                                                        <input type="password" name="password"
                                                                            id="password" placeholder="••••••••"
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
                                                                            id="password_confirmation"
                                                                            placeholder="••••••••"
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
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>
@endsection
