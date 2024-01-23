@extends('layout.default')
@extends('adminpage.layoutadmin')
{{-- @section('title', __('AdminPage')) --}}
@section('page-content')
    <div class="bg-white py-20">
        <div class="content">
            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                Support More Child Overview</h1>

            <form action="{{ route('childrennotsupported.filter') }}" method="POST">
                @csrf
                <div class="grid grid-cols-4 grid-flow-col gap-2 pb-2">
                    <button id="dropdownDefault" data-dropdown-toggle="dropdown5" data-dropdown-trigger="hover">
                        <div class="bg-red-700 py-3 rounded-lg text-center text-lg">School Name</div>
                    </button>
                    <div id="dropdown5" class="z-10 hidden w-1/6 p-3 bg-[#212228] rounded-lg">
                        <ul id="dropdown5" class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                            @foreach ($uniqueschools as $items)
                                <li class=" flex items-center">
                                    <input id="school_{{ $items }}" type="checkbox" name="school_filters[]"
                                        value="{{ $items }}"
                                        class="filter filter-school w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                    <label for="school_{{ $items }}"
                                        class="ml-2 text-sm font-medium text-white dark:text-gray-100">{{ $items }}</label>
                                </li>
                            @endforeach
                            {{-- @foreach ($data as $items)
                            <li class=" flex items-center">
                                <input id="location_{{ $items['school'] }}" type="checkbox" name="location_filters[]"
                                    value="{{ $items['school'] }}"
                                    class="filter filter-location w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                <label for="location_{{ $items['school'] }}"
                                    class="ml-2 text-sm font-medium text-white dark:text-gray-100">{{ $items['school'] }}</label>
                            </li>
                        @endforeach --}}
                        </ul>
                    </div>
                    <button id="dropdownDefault" data-dropdown-toggle="dropdown6" data-dropdown-trigger="hover">
                        <div class="bg-red-700 py-3 rounded-lg text-center text-lg">Location</div>
                    </button>
                    <div id="dropdown6" class="z-10 hidden w-1/6 p-3 bg-[#212228] rounded-lg">
                        <ul id="dropdown6" class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                            {{-- @foreach ($data as $items)
                            <li class=" flex items-center">
                                <input id="location_{{ $items['location'] }}" type="checkbox" name="location_filters[]"
                                    value="{{ $items['location'] }}"
                                    class="filter filter-location w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                <label for="location_{{ $items['location'] }}"
                                    class="ml-2 text-sm font-medium text-white dark:text-gray-100">{{ $items['location'] }}</label>
                            </li>
                        @endforeach --}}
                            @foreach ($uniqueslocations as $items)
                                <li class="flex items-center">
                                    <input id="location_{{ $items }}" type="checkbox" name="location_filters[]"
                                        value="{{ $items }}"
                                        class="filter filter-location w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                    <label for="location_{{ $items }}"
                                        class="ml-2 text-sm font-medium text-white dark:text-gray-100">{{ $items }}</label>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <button>
                        <div class="bg-red-700 py-3 rounded-lg text-center text-lg">Setting</div>
                    </button>
                    <a href='childrensupported'>
                        <div class="bg-red-700 py-3 rounded-lg text-center text-lg">Supported Children</div>
                    </a>
                    <button type="submit">
                        <div class="bg-red-900 py-3 px-3 rounded-lg text-center text-lg">Filter</div>
                    </button>
                    <a href='childrennotsupported'>
                        <div class="bg-red-900 py-3 px-3 rounded-lg text-center text-lg">Reset Filter</div>
                    </a>

                </div>
            </form>



            <section class="bg-[#f8f5f2] py-4">
                <div class="inline-grid lg:grid-cols-4 gap-10 sm:grid-cols-1 sm:gap-4 ml-5">
                    @foreach ($data as $items)
                        <div>
                            <!-- Modal toggle --><button data-modal-target="static-modal_{{ $items->id }}"
                                data-modal-toggle="static-modal_{{ $items->id }}" class="" type="button">
                                <div
                                    class="sm:ml-1 lg:ml-3 max-w-xl h-auto my-2  border-gray-200  bg-gray-50 rounded-lg shadow-md ">
                                    <div class="p-5">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                            {{ $items['name'] }}</h5>
                                        <div class="flex justify-center ">
                                            <p class="text-gray-600 dark:text-gray-400 mb-2 mr-3 inline-flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                                </svg>
                                                {{ $items['school'] }}
                                            </p>
                                            <p class="text-gray-600 dark:text-gray-400 mb-2  mr-3 inline-flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                                </svg>
                                                {{ $items['location'] }}
                                            </p>
                                            <p class="text-gray-600 dark:text-gray-400 mb-2  mr-3 inline-flex">
                                                {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                            </svg> --}}
                                                Age {{ $items['age'] }}
                                            </p>
                                        </div>
                                        <div class="flex">
                                            <div>
                                                <p class="mb-3 text-left font-normal text-gray-800">
                                                    Description{{ $items['description'] }}</p>
                                                <p class="mb-3 text-left font-normal text-gray-800">Story
                                                    {{ $items['story'] }}</p>
                                                <p class="mb-3 text-left font-normal text-gray-800">Status
                                                    {{ $items['status'] }}</p>
                                            </div>
                                            <div class="justify-items-center ml-10 ">
                                                <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                    alt="" srcset="" class="w-20">
                                            </div>
                                        </div>
                                        {{-- <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-gray-800  rounded-lg hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-blue-300  dark:focus:ring-blue-800">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a> --}}
                                    </div>
                                </div>
                            </button>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
    <!-- Main modal -->
    @foreach ($data as $items)
        <div id="static-modal_{{ $items->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            {{ $items['name'] }}'s Details
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="static-modal_{{ $items->id }}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-5">
                        <div class="flex">
                            <div>
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                                    {{ $items['name'] }}</h5>
                                <p class="text-gray-600 dark:text-gray-400 mb-2 mr-3 inline-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                    </svg>
                                    {{ $items['school'] }}
                                </p>
                                <p class="text-gray-600 dark:text-gray-400 mb-2  mr-3 inline-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                    {{ $items['location'] }}
                                </p>
                                <p class="text-gray-600 mr-3 "> Age {{ $items['age'] }} </p>
                                <p class="mb-3 font-normal text-gray-800">Description {{ $items['description'] }}</p>
                                <p class="mb-3 font-normal text-gray-800">Story {{ $items['story'] }}</p>
                                <p class="mb-3 font-normal text-gray-800">Status {{ $items['status'] }}</p>
                            </div>
                            <div class="justify-items-center ml-10 bg-black">
                                <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="" srcset="" class="w-36">
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <form action="/childrenupdatesupport/{{ $items->id }}" method="POST" class="">
                        @csrf
                        @method('PUT')
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="static-modal_{{ $items->id }}" type="submit"
                                class="text-white mx-auto bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 uppercase">
                                Support This Children</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
