@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@php
    app(\App\Http\Controllers\sidebar_controller::class)->getNotificationCount();
@endphp
@section('page-content')
    <div class="bg-white py-20">
        <div class="content">

            <div class=" py-9">
                <h1
                    class="lg:text-2xl text-center text-white rounded-xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                    Subscribe Payment</h1>
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

            <form action="/subscribepayment" method="POST">
                @csrf
                {{-- SECTION BOX 1 ADMIN PROFILE MESSAGES --}}
                <div class="lg:grid grid-cols-3 lg:gap-4  ">
                    <div class="mt-8 p-4 shadow-md rounded-md  mb-4 bg-zinc-100">
                        <h1 class="text-2xl text-black font-semibold mb-4">Children Supported Information </h1>
                        <div class="mx-auto">
                            <p class="font-semibold text-black">Total Children: {{ $countchildren }}</p>
                            @foreach ($childrendata as $item)
                                <p class="font-semibold text-black"> {{ $item['name'] }} <span
                                        class="text-sm font-normal">Required Donation :</span> Rp
                                    {{ $item['required_donation'] }}</p>
                            @endforeach
                            {{-- School : {{ $item['school'] }} Age : {{ $item['age'] }} --}}
                            {{--
                        <p class="font-semibold text-black">User Postpone: </p>
                        <p class="font-semibold text-black">User Inactive: </p> --}}
                        </div>
                        <div class="pb-4">
                        </div>
                    </div>
                    <div class="mt-8 p-4 shadow-md rounded-md  mb-4 bg-zinc-100">
                        <h1 class="text-2xl text-black font-semibold mb-4">Recurring Plans </h1>
                        <div class="mx-auto">
                            <p class="text-black font-semibold">Plan</p>
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">
                                Period
                            </label>
                            <select name="period" id="period" required placeholder="Donation/Support"
                                class="text-gray-400 font-normal focus:text-gray-700 mb-2 w-full px-2 py-2 bg-gray-200 focus:bg-white border-none">
                                <option value="Weekly">Every Weeks</option>
                                {{-- <option value="Support">Every 2 Weeks</option> --}}
                                <option value="Monthly">Every Month</option>
                            </select>
                            <p class="text-black font-semibold">Child Supported</p>
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">
                                Select Child
                            </label>
                            <select name="childsupported" id="childsupported" required placeholder="Donation/Support"
                                class="text-gray-400 font-normal focus:text-gray-700 mb-2 w-full px-2 py-2 bg-gray-200 focus:bg-white border-none">
                                @foreach ($childrendata as $item)
                                    <option value="{{ $item['id'] }}" data-name="{{ $item['name'] }}"
                                        data-requireddonation="{{ $item['required_donation'] }}">{{ $item['name'] }}
                                    </option>
                                    {{-- <option value="{{ $data['toys_id'] }}" name="{{ $data['toys_name'] }}" price="{{ $data['toys_price'] }}">{{ $data['toys_name'] }}</option> --}}
                                @endforeach

                            </select>
                            {{-- <p class=" text-black font-semibold">Total Donation : </p>
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password">
                        Duration</label> --}}

                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">
                                Since
                            </label>
                            <input datepicker datepicker-format="yyyy-mm-dd" type="text" id="since" name="since"
                                onchange="updateSelectedDate(this)"
                                class="bg-black border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required placeholder="Select date" autocomplete="off">

                        </div>


                        <div class="pb-4">
                        </div>
                    </div>
                    <div class="mt-8 p-4 shadow-md rounded-md  mb-4 bg-zinc-100">
                        <h1 class="text-2xl text-black font-semibold mb-4">Plan Overview</h1>
                        <div class="mx-auto">
                            <p class=" text-black font-semibold">Recurring Payment Every:
                                <span id="durationselected" class="text-black"></span>
                            </p>
                            <p class="text-black font-semibold">Child Supported : <span id="childrenselected"
                                    class="text-black"></span></p>
                            <p class=" text-black font-semibold">Total Donation :
                                <span id="totaldonation" class="text-black">105000</span>
                            </p>
                            <p class=" text-black font-semibold">Since :
                                <span id="sinceselected" class="text-black">2024-03-22</span>
                            </p>
                            <script>
                                document.getElementById('period').addEventListener('change', function() {
                                    var selectedOption = this.value;
                                    document.getElementById('durationselected').textContent = selectedOption;
                                });
                                document.addEventListener('change', function() {
                                    if (event.target.matches('#since')) {
                                        var selectedDate = event.target.value;
                                        document.getElementById('sinceselected').textContent = selecteddate;
                                    }
                                })
                                document.getElementById('since').addEventListener('change', function() {
                                    var selecteddate = input.value;
                                    document.getElementById('sinceselected').textContent = selecteddate;
                                });
                                // $(document).ready(function() {
                                //     $('#since').on('input', function() {
                                //         var selectedDate = $(this).val();
                                //         $('#sinceselected').text("Selected Date: " + selectedDate);
                                //     });
                                // });

                                document.getElementById('childsupported').addEventListener('change', function() {
                                    var selectedOption = this.selectedOptions[0].textContent;
                                    // var required_donation = selectedOption.dataset.requireddonation;
                                    // var name = selectedOption.dataset.name;
                                    document.getElementById('childrenselected').textContent = selectedOption;
                                    // document.getElementById('totaldonation').textContent = required_donation;
                                });
                            </script>
                            <div class="flex mt-4">
                                <div class="p-2 bg-black text-center mx-auto rounded-lg"><button type="submit">Subscribe
                                        this
                                        payment</button></div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

            {{-- SECTION BOX 2 DETAILS  --}}
            <div class="shadow-lg text-left w-full pt-3 mb-5 pl-5 ">
                <div class="text-2xl text-black font-bold ">Recurring Plans Details </div>
                <div class="my-2 border-2 border-gray-300"></div>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-left text-gray-900 text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr class="bg-gray-200">
                                <th scope="col" class="px-6 py-4">Subcription ID</th>
                                <th scope="col" class="px-6 py-4">Duration</th>
                                <th scope="col" class="px-6 py-4">Supported Children</th>
                                <th scope="col" class="px-6 py-4">Amount</th>
                                <th scope="col" class="px-6 py-4">Status</th>
                                <th scope="col" class="px-6 py-4">Since</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr class="border-b dark:border-neutral-500">
                                    {{-- <td class="whitespace-nowrap px-6 py-4">{{ $item['id'] }}</td> --}}
                                    <td class=" px-6 py-4">{{ $item['subscription_id'] }}</td>
                                    <td class=" px-6 py-4">{{ $item['period'] }}</td>
                                    {{-- {{ $item['childid'] }} --}}
                                    <td class=" px-6 py-4">
                                        @php
                                            $user = $item->childid;
                                            $childname = $user
                                                ? \App\Models\childrendata::find($user)->name
                                                : 'Unknown';
                                        @endphp
                                        {{ $childname }}
                                    </td>
                                    <td class=" px-6 py-4">{{ $item['amount'] }}</td>
                                    @if ($item['status'] === 'active')
                                        <td class=" px-6 py-4 bg-green-700 text-white">{{ $item['status'] }}</td>
                                    @else
                                        <td class=" px-6 py-4">{{ $item['status'] }}</td>
                                    @endif
                                    <td class=" px-6 py-4">{{ $item['since'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>


@endsection
