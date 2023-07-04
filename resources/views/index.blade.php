@extends('layout.default')
@section('page-content')
    <!-- CAROUSEL -->
    <section>
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/image/homepage/carousel/carousel01.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/image/homepage/carousel/carousel02.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/image/homepage/carousel/carousel03.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>

    <!-- WHO WE ARE -->
    <section class="relative flex items-center max-w-none w-full bg-white ">
        <div class="container justify-center max-w-none mt-10 mb-10">
            <h3 class="flex w-full justify-center text-4xl py-3 text-black font-bold">
                WHO WE ARE
            </h3>
            <p class="flex text-center text-xl py-5 mx-14 text-black tracking-wider">
                NYATA Foundation is a non profit organization works on improving the children with low quality of life.
                Start
                with the name “Tanah Air Foundation” rose in 2014 and to adjust thename now becomes it is known as Yayasan
                Anak-anak Tanah Air (NYATA)
            </p>
        </div>
    </section>

    <!-- WHAT WE HOLD -->
    <section class="flex items-center max-w-none w-full bg-neutral-200">
        <div class="container justify-center max-w-none mt-10 mb-10">
            <h3 class="flex w-full justify-center text-4xl py-3 text-black font-bold">
                WHAT WE HOLD
            </h3>
            <hr class="w-48 h-0.5 mx-auto my-6 bg-gray-400 border-0 rounded">
            <div class="flex flex-row flex-wrap justify-center">
                <div class="basis-full justify-center py-5 px-5">
                    <img src="{{ URL::asset('image/homepage/icon/whatweholdicon01.png') }}" class="mx-auto h-14 py-2">
                    <h3 class="px-3 py-3 text-black text-3xl text-center font-bold">
                        SHARING
                    </h3>
                    <p class="px-3 py-3 text-black text-base text-center tracking-wider max-w-2xl mx-auto">
                        Help, share knowledge and joy is the way of NYATA
                    </p>
                </div>
                <div class="basis-full justify-center py-5 px-5">
                    <img src="{{ URL::asset('image/homepage/icon/whatweholdicon02.png') }}" class="mx-auto h-14 py-2">
                    <h3 class="px-3 py-3 text-black text-3xl text-center font-bold">
                        EMPOWERMENT
                    </h3>
                    <p class="px-3 py-3 text-black text-base text-center tracking-wider max-w-2xl mx-auto">
                        Nyata improves the value of individuals, social and education quality that focus on children quality
                        of life and their education
                    </p>
                </div>
                <div class="basis-full justify-center py-5 px-5">
                    <img src="{{ URL::asset('image/homepage/icon/whatweholdicon03.png') }}" class="mx-auto h-14 py-2">
                    <h3 class="px-3 py-3 text-black text-3xl text-center font-bold">
                        PROFESSIONAL
                    </h3>
                    <p class="px-3 py-3 text-black text-base text-center tracking-wider max-w-2xl mx-auto">
                        Nyata focus on education and skill by giving the high quality training to volunteers and teachers
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- EDUCATION IS THE HEART OF OUR FUTURE -->
    <section class="flex relative max-w-none w-full h-full">
        <div style="background-image:url('/image/homepage/background/background01.jpg')"
            class="relative w-full h-auto max-w-none bg-cover bg-center bg-fixed">
            <h3 class="ml-10 mr-36 pt-6 text-3xl font-bold text-red-600 text-left drop-shadow-lg">
                EDUCATION IS THE HEART OF OUR FUTURE
            </h3>
            <p class="ml-10 mr-36 pt-4 text-white text-bold text-xl drop-shadow-xl">
                Help the children to get proper education. Every help will keep the children to go to schools and make a
                better future.
            </p>
            <div class="ml-10 mr-36 py-6">
                <button type="button" class="mx-auto px-3 py-3 bg-red-600 rounded-lg" onclick="window.location='{{ route('home') }}'">
                    TAKE ACTION
                </button>
            </div>
        </div>
    </section>

    <!--OUR PROGRESS-->
    <section class="flex items-center max-w-none w-full bg-neutral-200">
        <div class="container justify-center max-w-none mt-10 mb-10">
            <h3 class="flex w-full justify-center text-4xl py-3 text-black font-bold">
                OUR PROGRESS
            </h3>
            <hr class="w-48 h-0.5 mx-auto my-6 bg-gray-400 border-0 rounded">
            <h3 class="px-3 pt-8 pb-2 text-red-600 text-7xl text-center text-extrabold">
                1089
            </h3>
            <p class="px-3 py-3 text-black text-xl text-center tracking-wider">
                ADIK ASUH
            </p>
            <h3 class="px-3 pt-8 pb-2 text-red-600 text-7xl text-center text-extrabold">
                80
            </h3>
            <p class="px-3 py-3 text-black text-xl text-center tracking-wider">
                SCHOOLS
            </p>
        </div>
    </section>

    <!-- OUR SOLUTIONS -->
    <section class="flex items-center max-w-none w-full bg-white ">
        <div class="container justify-center max-w-none mt-10 mb-10">
            <h3 class="flex w-full justify-center text-4xl py-3 text-black font-bold">
                OUR SOLUTION
            </h3>
            <hr class="w-48 h-0.5 mx-auto my-6 bg-gray-400 border-0 rounded">
            <div class="flex flex-col justify-center mx-5 pt-8 mb-5 h-3/4 md:mx-10">
                <img src="{{ URL::asset('image/homepage/oursolution/oursolution01.jpg') }}"
                    class="rounded-t-3xl h-56 items-center md:w-full md:h-auto">
                <div class="px-0 py-5 bg-red-600 rounded-b-3xl text-white md:-translate-y-20">
                    <h3 class="px-3 pt-5 text-3xl text-center font-bold">
                        ADIK ASUH
                    </h3>
                    <p class="px-3 py-5 text-base text-center">
                        Join us to be foster brother and sister and help the children reach a brigther future
                    </p>
                </div>
                <div class="px-0 py-5 text-center md:-translate-y-20">
                    <button type="button" class="w-2/4 px-3 py-3 bg-red-600 rounded-lg" onclick="window.location='{{ route('adikasuh') }}'">
                        LEARN MORE
                    </button>
                </div>
            </div>
            <div class="flex flex-col justify-center mx-5 mb-5 pt-5 h-3/4 md:mx-10">
                <img src="{{ URL::asset('image/homepage/oursolution/oursolution02.jpg') }}"
                    class="rounded-t-3xl h-56 items-center md:w-full md:h-full">
                <div class="px-0 py-5 bg-red-600 rounded-b-3xl text-white md:-translate-y-20">
                    <h3 class="px-3 pt-5 text-3xl text-center font-bold">
                        TRAVEL CHARITY
                    </h3>
                    <p class="px-3 py-5 text-base text-center">
                        Help local livelihoods and economic communities while travel to explore the beauty of Indonesia
                    </p>
                </div>
                <div class="px-0 py-5 text-center md:-translate-y-20">
                    <button type="button" class="w-2/4 px-3 py-3 bg-red-600 rounded-lg" onclick="window.location='{{ route('travelcharity') }}'">
                        LEARN MORE
                    </button>
                </div>
            </div>
            <div class="flex flex-col justify-center mx-5 mb-5 pt-5 h-3/4 md:mx-10">
                <img src="{{ URL::asset('image/homepage/oursolution/oursolution03.jpg') }}"
                    class="rounded-t-3xl h-56 items-center md:w-full md:h-auto">
                <div class="px-0 py-5 bg-red-600 rounded-b-3xl text-white md:-translate-y-20">
                    <h3 class="px-3 pt-5 text-3xl text-center font-bold">
                        ACT OF KINDNESS
                    </h3>
                    <p class="px-3 py-5 text-base text-center">
                        Gives the good deeds to the school, organization, individual or community that in need
                    </p>
                </div>
                <div class="px-0 py-5 text-center md:-translate-y-20">
                    <button type="button" class="w-2/4 px-3 py-3 bg-red-600 rounded-lg" onclick="window.location='{{ route('actofkindness') }}'">
                        LEARN MORE
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
