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

            {{-- SECTION BOX 1 --}}
            <div class=" mx-auto mt-8 p-4 shadow-md rounded-md w-1/3 mb-4 bg-zinc-100">
                <h1 class="text-xl text-black font-semibold  mb-4 ">{{ auth()->user()->name }}'s balance</h1>
                <div class="flex items-center space-x-2 mb-5">
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

                    {{-- <div class="">
                        <a href="/profileedit%{{ auth()->user()->slug }}">
                            <button class="bg-blue-900 px-3 py-2 rounded-xl text-white">Transaction Status</button>
                        </a>
                    </div> --}}
                    <div class="">
                        <button class="bg-black px-2 py-2 rounded-xl text-white mt-4"
                            data-modal-target="static-transaction-history"
                            data-modal-toggle="static-transaction-history">Transaction History</button>
                        <div id="static-transaction-history" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Transasction History
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="static-transaction-history">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-5">
                                        @foreach ($transactionhistory as $item)
                                            @if ($loop->index < 3)
                                                @if (stripos($item['status'], 'Success') !== false)
                                                    <div id="alert-additional-content-1"
                                                        class="p-2 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                                                        role="alert">
                                                        <div class="flex items-center">
                                                            <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                                viewBox="0 0 20 20">
                                                                <path
                                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                                            </svg>
                                                            <span class="sr-only">Info</span>
                                                            <h3 class="text-lg font-medium">Donation
                                                                ID#{{ $item['order_id'] }}
                                                            </h3>
                                                        </div>
                                                        <div class="mt-2 mb-4 text-sm">
                                                            <p class="capitalize">payment method:
                                                                {{ $item['payment_type'] }}
                                                            </p>
                                                            <p class="capitalize">transaction status:{{ $item['status'] }}
                                                            </p>
                                                            <p class="capitalize">date:{{ $item['date'] }}</p>
                                                            <p class="capitalize">
                                                                totalchildsupported:{{ $item['totalsupportedchild'] }}</p>
                                                        </div>
                                                        {{-- <div class="flex">
                                            <button type="button"
                                                class="text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <svg class="me-2 h-3 w-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 14">
                                                    <path
                                                        d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                                </svg>
                                                View more
                                            </button>
                                             <button type="button"
                                                class="text-blue-800 bg-transparent border border-blue-800 hover:bg-blue-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-blue-600 dark:border-blue-600 dark:text-blue-400 dark:hover:text-white dark:focus:ring-blue-800"
                                                data-dismiss-target="#alert-additional-content-1" aria-label="Close">
                                                Dismiss
                                            </button> 
                                        </div> --}}
                                                    </div>
                                                @else
                                                    <div id="alert-additional-content-1"
                                                        class="p-2 mb-4 text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800"
                                                        role="alert">
                                                        <div class="flex items-center">
                                                            <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                                viewBox="0 0 20 20">
                                                                <path
                                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                                            </svg>
                                                            <span class="sr-only">Info</span>
                                                            <h3 class="text-lg font-medium">Donation
                                                                ID#{{ $item['order_id'] }}</h3>
                                                        </div>
                                                        <div class="mt-2 mb-4 text-sm">
                                                            <p class="capitalize">payment method:
                                                                {{ $item['payment_type'] }}
                                                            </p>
                                                            <p class="capitalize">transaction status:{{ $item['status'] }}
                                                            </p>
                                                            <p class="capitalize">date:{{ $item['date'] }}</p>
                                                            <p class="capitalize">
                                                                totalchildsupported:{{ $item['totalsupportedchild'] }}</p>
                                                        </div>
                                                        {{-- <div class="flex">
                                                <button type="button"
                                                    class="text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    <svg class="me-2 h-3 w-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 20 14">
                                                        <path
                                                            d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                                    </svg>
                                                    View more
                                                </button>
                                                 <button type="button"
                                                    class="text-blue-800 bg-transparent border border-blue-800 hover:bg-blue-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-blue-600 dark:border-blue-600 dark:text-blue-400 dark:hover:text-white dark:focus:ring-blue-800"
                                                    data-dismiss-target="#alert-additional-content-1" aria-label="Close">
                                                    Dismiss
                                                </button> 
                                            </div> --}}
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                    <!-- Modal footer -->
                                    <a href="userbalancehistory">
                                        <div
                                            class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <button type="button"
                                                class="text-white mx-auto bg-blue-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 uppercase">
                                                Transaction History</button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- SECTION BOX 2 --}}
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
                        @else
                            {{-- <h1 class="text-sm text-black mb-2">id : <span class="text-lg">{{ auth()->user()->id }}</span>
                            </h1> --}}
                            <h1 class="text-sm text-black mb-2 capitalize"> Total Support :
                                <span class="text-lg">Rp {{ $totaldonation }} </span>
                            </h1>
                            <h1 class="text-sm text-black mb-2 capitalize"> last month support :
                                <span class="text-lg">Rp {{ $lastmonthsupport }} </span>
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

                        function send_response_to_form(result) {
                            document.getElementById('json_callback').value = JSON.stringify(result);
                            $('#submit_form').submit();
                        }
                    </script>
                </div>
            </div>


        </div>
    </div>
@endsection
