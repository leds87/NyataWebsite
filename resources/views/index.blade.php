@extends('layout.default')
@section('page-content')
    <section>
        <div id="default-carousel" class="relative h-[400px] md:h-full w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden h-[500px] rounded-lg md:h-[950px]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/image/homepage/carousel/carousel01.jpg"
                        class="absolute w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="carousel01">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/image/homepage/carousel/carousel02.jpg"
                        class="absolute w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="carousel02">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/image/homepage/carousel/carousel03.jpg"
                        class="absolute w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="carousel03">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>
    <!-- just text with white background -->
    <section class="relative flex items-center max-w-none w-full bg-white ">
        <div class="container justify-center max-w-none my-10 py-10">
            <h3 class="flex w-full justify-center text-5xl py-3 text-black font-bold">
                WHO WE ARE
            </h3>
            <p class="flex text-center text-xl py-5 mx-[60px] text-black ">
                NYATA Foundation is a non profit organization works on improving the children with low quality of life.
                Start
                with the name “Tanah Air Foundation” rose in 2014 and to adjust thename now becomes it is known as Yayasan
                Anak-anak Tanah Air (NYATA)
            </p>
        </div>
    </section>
    <!-- divide to 3 flex part with grey background -->
    <section class="flex items-center max-w-none w-full bg-neutral-200 ">
        <div class="container justify-center max-w-none py-6">
            <h3 class="flex w-full justify-center mx-auto text-5xl py-3 my-5 text-black font-bold">
                WHAT WE HOLD
            </h3>
            <div class="flex flex-row flex-wrap justify-center py-5 my-5">
                <div class="flex flex-col justify-center max-w-sm py-5 px-5">
                    <img src="{{ URL::asset('image/homepage/icon/whatweholdicon01.png') }}" class="mx-auto max-w-xs py-2">
                    <h3 class="px-3 py-3 text-black text-3xl text-center font-bold">
                        SHARING
                    </h3>
                    <p class="px-3 py-3 text-black text-base text-center">
                        Help, share knowledge and joy is the way of NYATA
                    </p>
                </div>
                <div class="flex flex-col justify-center max-w-sm py-5 px-5">
                    <img src="{{ URL::asset('image/homepage/icon/whatweholdicon02.png') }}" class="mx-auto max-w-xs py-2">
                    <h3 class="px-3 py-3 text-black text-3xl text-center font-bold">
                        EMPOWERMENT
                    </h3>
                    <p class="px-3 py-3 text-black text-base text-center">
                        Nyata improves the value of individuals, social and education quality that focus on children quality
                        of life and their education
                    </p>
                </div>
                <div class="flex flex-col justify-center max-w-sm py-5 px-5">
                    <img src="{{ URL::asset('image/homepage/icon/whatweholdicon03.png') }}" class="mx-auto max-w-xs py-2">
                    <h3 class="px-3 py-3 text-black text-3xl text-center font-bold">
                        PROFESSIONAL
                    </h3>
                    <p class="px-3 py-3 text-black text-base text-center">
                        Nyata focus on education and skill by giving the high quality training to volunteers and teachers
                    </p>
                </div>
    </section>
    <!--EDUCATION IS THE HEART OF OUR FUTURE-->
    <section class="flex relative max-w-none w-full h-[400px] md:h-[600px]">
        <div style="background-image:url('/image/homepage/background/background01.jpg')"
            class="relative w-full max-w-none bg-cover bg-center bg-fixed">
            <div
                class="absolute bottom-0 w-full flex flex-col justify-center text-center mx-auto my-5 px-5 py-5 md:my-10 md:py-10">
                <h3 class="mx-auto px-3 py-3 text-5xl font-bold text-red-500">
                    EDUCATION IS THE HEART OF OUR FUTURE
                </h3>
                <p class="mx-auto px-3 py-3 text-white text-xl">
                    Help the children to get proper education. Every help will keep the children to go to schools and make a
                    better future.
                </p>
                <button type="button" class="mx-auto px-3 py-3 bg-red-600 rounded-[10px]">
                    TAKE ACTION
                </button>
            </div>
    </section>

    <section class="flex flex-row items-center max-w-none w-full bg-neutral-200 py-10 md:py-5">
        <div class="container justify-center max-w-none py-6">
            <h3 class="w-full text-center font-bold text-5xl py-3 text-black">
                OUR PROGRESS
            </h3>
            <div class="flex flex-row justify-evenly">
                <div class="justify-center max-w-md py-3 px-6 text-center font-bold">
                    <h3 class="px-3 py-3 text-red-500 text-5xl">
                        1089
                    </h3>
                    <p class="px-3 py-3 text-black text-xl">
                        ADIK ASUH
                    </p>
                </div>
                <div class="justify-center max-w-md py-3 px-6 text-center font-bold">
                    <h3 class="px-3 py-3 text-red-500 text-5xl">
                        89
                    </h3>
                    <p class="px-3 py-3 text-black text-xl">
                        SCHOOL
                    </p>
                </div>
    </section>

    <section class="flex items-center max-w-none w-full bg-white ">
        <div class="container justify-center max-w-none py-6">
            <h3 class="flex w-full justify-center mx-auto text-5xl py-3 text-black font-bold">
                OUR SOLUTION
            </h3>
            <div class="flex flex-wrap justify-evenly mx-auto">
                <div class="flex flex-col justify-center max-w-sm mx-5 my-5">
                    <img src="{{ URL::asset('image/homepage/oursolution/oursolution01.jpg') }}"
                        class="rounded-t-[25px] w-full h-[300px] items-center">
                    <div class="px-0 py-5 bg-red-500 rounded-b-[25px] text-white ">
                        <h3 class="px-3 py-5 text-3xl text-center font-bold">
                            ADIK ASUH
                        </h3>
                        <p class="px-3 py-5 text-base text-center">
                            Join us to be foster brother and sister and help the children reach a brigther future
                        </p>
                    </div>
                </div>
                <div class="flex flex-col justify-center max-w-sm mx-5 my-5">
                    <img src="{{ URL::asset('image/homepage/oursolution/oursolution02.jpg') }}"
                        class="rounded-t-[25px] w-full">
                    <div class="px-0 py-5 bg-red-500 rounded-b-[25px] text-white ">
                        <h3 class="px-3 py-5 text-3xl text-center font-bold">
                            TRAVEL CHARITY
                        </h3>
                        <p class="px-3 py-5 text-base text-center">
                            Help local livelihoods and economic communities while travel to explore the beauty of
                            Indonesia
                        </p>
                    </div>
                </div>
                <div class="flex flex-col justify-center max-w-sm mx-5 my-5">
                    <img src="{{ URL::asset('image/homepage/oursolution/oursolution03.jpg') }}"
                        class="rounded-t-[25px] w-full">
                    <div class="px-0 py-5 bg-red-500 rounded-b-[25px] text-white ">
                        <h3 class="px-3 py-5 text-3xl text-center font-bold">
                            ACT OF KINDNESS
                        </h3>
                        <p class="px-3 py-5 text-base text-center">
                            Gives the good deeds to the school, organization, individual or community that in need
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
