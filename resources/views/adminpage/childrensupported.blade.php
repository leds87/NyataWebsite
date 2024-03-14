@extends('layout.default')
@extends('adminpage.layoutadmin')
@php
    app(\App\Http\Controllers\sidebar_controller::class)->getNotificationCount();
@endphp
{{-- @section('title', __('AdminPage')) --}}

@section('page-content')
    <div class="bg-white py-20">
        <div class="content">
            {{-- ERROR MESSAGES --}}
            @if (session('success'))
                <div id="alert-3"
                    class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium block">
                        {{ session('success') }}
                    </div>
                    <div class="ml-2">
                        <button type="button"
                            class="-mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                            data-dismiss-target="#alert-3" aria-label="Close">
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
            @if (session('error'))
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

            <h1
                class="lg:text-2xl text-center text-white rounded-2xl bg-green-800 px-2 py-3 font-bold mb-4 mx-auto md:text-sm">
                Children Supported Overview</h1>

            <form action="{{ route('childrensupported.filter') }}" method="POST">
                @csrf
                <div class="lg:grid grid-cols-4 grid-flow-col gap-2 pb-2 sm:grid-cols-1 sm:gap-3">
                    <button id="dropdownDefault" data-dropdown-toggle="dropdown5" type="button" class="w-full mb-1">
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
                    <button id="dropdownDefault" data-dropdown-toggle="dropdown6" type="button" class="w-full mb-1">
                        {{-- data-dropdown-trigger="hover" --}}
                        <div class="bg-red-700 py-3 rounded-lg text-center text-lg ">Location</div>
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
                    <button class="w-full mb-1">
                        <div class="bg-red-700 py-3 rounded-lg text-center text-lg">Setting</div>
                    </button>
                    <a href='childrennotsupported'>
                        <div class="bg-red-700 py-3 rounded-lg text-center text-lg mb-1">Support More Children</div>
                    </a>
                    <button type="submit" class="w-full mb-1">
                        <div class="bg-red-900 py-3 px-3 rounded-lg text-center text-lg">Filter</div>
                    </button>
                    <a href='childrensupported'>
                        <div class="bg-red-900 py-3 px-3 rounded-lg text-center text-lg">Reset Filter</div>
                    </a>
                </div>
            </form>

            <section class="bg-[#f8f5f2] py-4">
                <div class="inline-grid lg:grid-cols-4 gap-10 sm:grid-cols-1 sm:gap-4 ml-5">
                    @foreach ($data as $items)
                        <div>
                            <!-- Modal toggle -->
                            <button data-modal-target="static-modal{{ $items->id }}"
                                data-modal-toggle="static-modal{{ $items->id }}" class="" type="button">
                                <div
                                    class="sm:ml-1 lg:ml-3 lg:w-80 sm:min-w-full sm:h-auto lg:h-72 my-2  border-gray-200  bg-gray-50 rounded-lg shadow-md ">
                                    <div class="p-5">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                            {{ $items['name'] }}</h5>
                                        <div class="flex justify-center flex-wrap mb-2">
                                            <p class="text-gray-600 dark:text-gray-400 mb-2 mr-3 inline-flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                                </svg>
                                                {{ $items['school'] }}
                                            </p>
                                            <p class="text-gray-600 dark:text-gray-400 mb-2  mr-3 inline-flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                                </svg>
                                                {{ $items['location'] }}
                                            </p>
                                            <p class="text-gray-600 dark:text-gray-400 mb-2 mr-3 inline-flex">
                                                Age {{ $items['age'] }}
                                            </p>
                                        </div>
                                        <div class="grid grid-cols-2 gap-2 mt-2">
                                            <div class="">
                                                <p class="mb-3 text-left font-normal text-gray-800">Description
                                                    {{ $items['description'] }}</p>
                                                <p class="mb-3 text-left font-normal text-gray-800">Story
                                                    {{ $items['story'] }}</p>
                                                <p class="mb-3 text-left font-normal text-gray-800">Status
                                                    {{ $items['status'] }}
                                                </p>
                                            </div>
                                            <div class="justify-items-center mx-auto">
                                                @if ($items->images->isNotEmpty())
                                                    <div class="image-container inline-flex mx-4 mb-4">
                                                        @php $firstImage = $items->images->first(); @endphp
                                                        <img src="{{ asset('storage/children-images/' . $firstImage->filename) }}"
                                                            alt="{{ $firstImage->filename }}"
                                                            class="w-36 object-cover rounded-md">
                                                    </div>
                                                @else
                                                    <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="lg:w-[92px] sm:w-36">
                                                @endif
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
        <div id="static-modal{{ $items->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
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
                            data-modal-hide="static-modal{{ $items->id }}">
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
                        <div class="grid grid-cols-2 gap-4">
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
                                <p class="text-gray-600 dark:text-gray-400 mb-2  mr-3 inline-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-0 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.871c1.355 0 2.697.056 4.024.166C17.155 8.51 18 9.473 18 10.608v2.513M15 8.25v-1.5m-6 1.5v-1.5m12 9.75-1.5.75a3.354 3.354 0 0 1-3 0 3.354 3.354 0 0 0-3 0 3.354 3.354 0 0 1-3 0 3.354 3.354 0 0 0-3 0 3.354 3.354 0 0 1-3 0L3 16.5m15-3.379a48.474 48.474 0 0 0-6-.371c-2.032 0-4.034.126-6 .371m12 0c.39.049.777.102 1.163.16 1.07.16 1.837 1.094 1.837 2.175v5.169c0 .621-.504 1.125-1.125 1.125H4.125A1.125 1.125 0 0 1 3 20.625v-5.17c0-1.08.768-2.014 1.837-2.174A47.78 47.78 0 0 1 6 13.12M12.265 3.11a.375.375 0 1 1-.53 0L12 2.845l.265.265Zm-3 0a.375.375 0 1 1-.53 0L9 2.845l.265.265Zm6 0a.375.375 0 1 1-.53 0L15 2.845l.265.265Z" />
                                    </svg>

                                    Age {{ $items['age'] }}
                                </p>
                                <p class="mb-3 font-normal text-gray-800">Description {{ $items['description'] }}</p>
                                <p class="mb-3 font-normal text-gray-800">Story {{ $items['story'] }}</p>
                                <p class="mb-3 font-normal text-gray-800">Status {{ $items['status'] }}</p>
                                <p class="mb-3 font-normal text-gray-800">Required Donation
                                    {{ $items['required_donation'] }}</p>
                                {{-- <p class="mb-3 font-normal text-gray-800">Required Donation
                                    <script>
                                        const amount{{ $items->id }} = {{ $items['required_donation'] }};
                                        const formatter = new Intl.NumberFormat('id-ID', {
                                            style: 'currency',
                                            currency: 'IDR',
                                            minimumFractionDigits: 0,
                                        });
                                        document.write(formatter.format(amount{{ $items->id }}));
                                    </script>
                                </p> --}}
                            </div>
                            <div class="justify-items-center mx-auto ">
                                @if ($items->images->isNotEmpty())
                                    <div class="image-container inline-flex mx-4 mb-4">
                                        @foreach ($items->images as $image)
                                            <img src="{{ asset('storage/children-images/' . $image->filename) }}"
                                                alt="{{ $image->filename }}" class="w-36 object-cover rounded-md">
                                            <div class="mx-2"></div>
                                        @endforeach

                                        {{-- <div id="photo-slider" class="overflow-hidden">
                                            <div class="flex transition-transform duration-300 ease-in-out">
                                              @foreach ($items->images as $image)
                                                <div class="w-full h-full object-cover mx-2">
                                                  <img src="{{ asset('storage/children-images/' . $image->filename) }}" alt="{{ $image->filename }}">
                                                </div>
                                              @endforeach
                                            </div>
                                          </div>
                                          
                                          <script>
                                            document.addEventListener("DOMContentLoaded", function () {
                                              const slider = document.getElementById("photo-slider");
                                              const images = slider.querySelectorAll(".w-full");
                                          
                                              let currentIndex = 0;
                                          
                                              function updateSlider() {
                                                const translateValue = -currentIndex * 100 + "%";
                                                slider.querySelector(".flex").style.transform = "translateX(" + translateValue + ")";
                                              }
                                          
                                              function nextSlide() {
                                                currentIndex = (currentIndex + 1) % images.length;
                                                updateSlider();
                                              }
                                          
                                              function prevSlide() {
                                                currentIndex = (currentIndex - 1 + images.length) % images.length;
                                                updateSlider();
                                              }
                                          
                                              setInterval(nextSlide, 3000); // Auto-slide every 3 seconds (adjust as needed)
                                            });
                                          </script> --}}




                                        {{-- <div id="default-carousel{{ $items->id }}" class="relative w-full"
                                            data-carousel="slide">
                                            <!-- Carousel wrapper -->
                                            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                                <!-- Item 1 -->
                                                @foreach ($items->images as $image)
                                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                        <img src="{{ asset('storage/children-images/' . $image->filename) }}"
                                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                                            alt="{{ $image->filename }}">
                                                    </div>
                                                    @endforeach
                                            </div>
                                            <!-- Slider indicators -->
                                            <div
                                                class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                                <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                                    aria-label="Slide {{ $items->id }}" data-carousel-slide-to="{{ $items->id }}"></button>
                                            </div>
                                            <!-- Slider controls -->
                                            <button type="button"
                                                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                                data-carousel-prev>
                                                <span
                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 6 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                                    </svg>
                                                    <span class="sr-only">Previous</span>
                                                </span>
                                            </button>
                                            <button type="button"
                                                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                                data-carousel-next>
                                                <span
                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 6 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                    </svg>
                                                    <span class="sr-only">Next</span>
                                                </span>
                                            </button>
                                        </div>
                                    </div> --}}
                                    </div>
                                @else
                                    <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="w-36">
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <form action="/childrenupdateunsupport/{{ $items->id }}" method="POST" class="">
                        @csrf
                        @method('PUT')
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="static-modal{{ $items->id }}" type="submit"
                                class="text-white mx-auto bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 uppercase">
                                Unsupport this Children</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
