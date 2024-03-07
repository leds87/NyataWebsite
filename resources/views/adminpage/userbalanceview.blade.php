@extends('layout.default')
@extends('adminpage.layoutadmin')
@php
    app(\App\Http\Controllers\sidebar_controller::class)->getNotificationCount();
@endphp
{{-- @section('title', __('AdminPage')) --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="SB-Mid-client-_wxRytc85Z3IwRI6"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

@section('page-content')
    <div class="bg-white py-20">
        <div class="content">
            <div class=" py-9">
                <h1 class="lg:text-2xl text-center text-white bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                    User Balance</h1>
            </div>
            {{-- ERROR MESSAGES --}}
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

            @if ($errors->any())
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
            <div class=" mx-auto mt-8 p-4 shadow-md rounded-md w-1/3 mb-4 bg-zinc-100">
                <h1 class="text-2xl text-black font-semibold mb-4 capitalize">{{ auth()->user()->name }}'s Balance</h1>
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
                        <p class=" text-black capitalized text-center">Current Log : {{ auth()->user()->log }}</p>
                    </div>

                </div>
            </div>
            <div class="flex">
                <div class="mx-auto shadow-lg text-left w-1/3 pt-3 mb-5 pl-5 ">
                    <div class="text-2xl text-black font-bold ">Details </div>
                    <div class="my-2 border-2 border-gray-300"></div>
                    @auth
                        @if (auth()->user()->log == 'admin')
                            {{-- <h1 class="text-sm text-black mb-2">id : <span class="text-lg">{{ auth()->user()->id }}</span>
                            </h1> --}}
                            <h1 class="text-sm text-black mb-2">Name : <span class="text-lg">{{ auth()->user()->name }}</span>
                            </h1>
                        @else
                            {{-- <h1 class="text-sm text-black mb-2">id : <span class="text-lg">{{ auth()->user()->id }}</span>
                            </h1> --}}
                            <h1 class="text-sm text-black mb-2 capitalize"> Total Support :
                                <span class="text-lg">Rp {{$totaldonation}} </span>
                            </h1>
                            <h1 class="text-sm text-black mb-2 capitalize"> last month support :
                                <span class="text-lg">Rp {{$lastmonthsupport}} </span>
                            </h1>
                            <h1 class="text-sm text-black mb-2 capitalize"> Current Supported Child :
                                <span class="text-lg">{{ $countchildren }} </span>
                            </h1>
                            <h1 class="text-sm text-black mb-2 capitalize">expected support :
                                <span class="text-lg">Rp {{ $expectedsupport }}</span>
                            </h1>
                        @endauth
                    @endif

                    <form action="" method="POST" id="submit_form">
                        @csrf
                        <input type="hidden" name="json" id="json_callback">
                    </form>

                    <div class=" flex justify-items-center p-4 md:p-5">
                        <button type="button" id="pay-button" name="pay-button"
                            class="text-white mx-auto bg-red-700 hover:bg-red-800  focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-24 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 uppercase">
                            Donate Now
                        </button>
                    </div>
                    <script type="text/javascript">
                        // For example trigger on button clicked, or any time you need
                        var payButton = document.getElementById('pay-button');
                        payButton.addEventListener('click', function() {
                            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                            window.snap.pay('{{ $snapToken }}', {
                                onSuccess: function(result) {
                                    /* You may add your own implementation here */
                                    alert("payment success!");
                                    //console.log(result);
                                    send_response_to_form(result);
                                },
                                onPending: function(result) {
                                    /* You may add your own implementation here */
                                    alert("wating your payment!");
                                    send_response_to_form(result);
                                },
                                onError: function(result) {
                                    /* You may add your own implementation here */
                                    alert("payment failed!");
                                    send_response_to_form(result);
                                },
                                onClose: function() {
                                    /* You may add your own implementation here */
                                    alert('you closed the popup without finishing the payment');
                                    send_response_to_form(result);
                                }
                            })
                        });

                        function send_response_to_form(result){
                            document.getElementById('json_callback').value = JSON.stringify(result);
                            $('#submit_form').submit();
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
