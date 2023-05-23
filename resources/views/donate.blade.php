@extends('layout.default')
@section('page-content')
    <section>
        <div id="default-carousel" class="relative h-[400px] md:h-full w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden h-[500px] rounded-lg md:h-[1000px]">
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
    <section>
        <div class="flex flex-wrap">
            <div class="bg-white flex-auto w-full md:w-[600px]">
                <div class="flex flex-col justify-start p-10 md:p-20">
                    <div class="font-bold text-5xl text-black py-5">
                        YOU CAN MAKE A DIFFERENCE
                    </div>
                    <div class="text-base text-black py-5">
                        TEMAN NYATA is a monthly giving program where every dollar goes toward educating a child. You are
                        making an impact in someone else's life, every single month.
                    </div>
                    <button class="w-[150px] h-[40px] bg-[#ff0000] rounded-xl text-white font-bold">
                        GIVE SUPPORT
                    </button>
                </div>

            </div>
            <div class="bg-[#ff0000] flex-auto w-full md:w-[400px] text-white font-bold text-5xl]">
                <div class="flex flex-col mx-auto p-20">
                    <div class="text-5xl py-2">
                        No Act of kindness,
                    </div>
                    <div class="text-5xl py-2">
                        No matter how small,
                    </div>
                    <div class="text-5xl py-2">
                        Is ever wasted
                    </div>
                    <div class="text-5xl py-2">
                        - Aesop
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="sm:hidden">
            <label for="tabs" class="sr-only">Select your country</label>
            <select id="tabs" class="bg-neutral-200 border text-black text-xl font-bold block w-full p-0 ">
                <option>SCHOOL BUILD</option>
                <option>GROWS TEACHERS WELL-BEING</option>
                <option>CHILDREN'S NUTRITION</option>
                <option>SCHOLARSHIPS</option>
            </select>
        </div>
        <div>
            <ul class="hidden text-xl font-medium text-center divide-x active:text-[#ff0000] divide-[#ff0000] sm:flex"
                id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="w-full" role="presentation">
                    <button
                        class="inline-block w-full font-bold text-xl  bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                        id="shcoolbuild-tab" data-tabs-target="#profile" type="button" role="tab"
                        aria-controls="profile" aria-selected="false">
                        <div class=" p-4 text-black hover:text-[white]">
                            SCHOOL BUILD
                        </div>
                    </button>
                </li>
                <li class="w-full" role="presentation">
                    <button
                        class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                        id="growsteacher-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">
                        <div class=" p-4 text-black hover:text-[white]">
                            GROWS TEACHERS WELL-BEING
                        </div>
                    </button>
                </li>
                <li class="w-full" role="presentation">
                    <button
                        class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                        id="childrennutrition-tab" data-tabs-target="#settings" type="button" role="tab"
                        aria-controls="settings" aria-selected="false">
                        <div class="p-4 text-black hover:text-[white]">
                            CHILDREN'S NUTRITION
                        </div>
                    </button>
                </li>
                <li class="w-full" role="presentation">
                    <button
                        class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                        id="scholarships-tab" data-tabs-target="#contacts" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false">
                        <div class="p-4 text-black hover:text-[white]">
                            SCHOLARSHIPS
                        </div>
                    </button>
                </li>
            </ul>
        </div>
        <div id="myTabContent">
            <div class="hidden transition-all duration-700 ease-in-out" id="profile" role="tabpanel"
                aria-labelledby="shcoolbuild-tab">
                <img src="{{ URL::asset('image/donate/Donate01.jpg') }}" class="w-full transition duration-700">
            </div>
            <div class="hidden transition-all duration-700 ease-in-out" id="dashboard" role="tabpanel"
                aria-labelledby="growsteacher-tab">
                <img src="{{ URL::asset('image/donate/TravelCharity01.jpg') }}" class="w-full">
            </div>
            <div class="hidden transition-all duration-700 ease-in-out" id="settings" role="tabpanel"
                aria-labelledby="childrennutrition-tab">
                <img src="{{ URL::asset('image/donate/HomePageAnakTerangNyata.jpg') }}" class="w-full">
            </div>
            <div class="hidden transition-all duration-700 ease-in-out" id="contacts" role="tabpanel"
                aria-labelledby="scholarships-tab">
                <img src="{{ URL::asset('image/donate/AdikAsuhWide.jpg') }}" class="w-full">
            </div>
        </div>

    </section>
    <section>
        <div class="bg-white h-auto py-10 md:h-[700px]">
            <div class="flex flex-col mx-auto text-center">
                <div class="text-black font-bold text-5xl py-5 px-2">
                    WHY GIVE MONTHLY
                </div>
                <!--<div class="grid grid-cols-2 gap-8">-->
                <div class="flex flex-wrap justify-center mx-0 md:mx-auto px-20">
                    <!-- half left -->
                    <div class="flex flex-col md:basis-1/2">
                        <div class="flex flex-col justify-center py-0 md:py-5 px-0 md:px-10">
                            <div class="text-[#ff0000] text-5xl font-bold p-5 md:p-5">
                                AFFORDABLE
                            </div>
                            <div class="text-black">
                                By giving monthly, you invest what makes sense for you and make an incredible impact over
                                the
                                course of your membership
                            </div>
                        </div>
                        <div class="flex flex-col justify-center px-0 md:px-10">
                            <div class="text-[#ff0000] text-5xl font-bold p-5 md:p-5">
                                COMMUNITY
                            </div>
                            <div class="text-black">
                                Becoming a NYATA Partner allows you to join a dedicated group of supporters who understand
                                the
                                importance of making a sustaining commitment to provide education for all.
                            </div>
                        </div>
                    </div>
                    <!-- half right -->
                    <div class="flex flex-col md:basis-1/2 mx-0 px-0">
                        <div class="flex flex-col justify-center py-0 md:py-5 px-0 md:px-10">
                            <div class="text-[#ff0000] text-5xl font-bold p-5 md:p-5">
                                SUSTAINED SUPPORT
                            </div>
                            <div class="text-black">
                                Enables NYATA to expand our programs because we know we have the ongoing support from the
                                NYATA
                                Partner community
                            </div>
                        </div>
                        <div class="flex flex-col justify-center mx-0 px-0 md:px-10">
                            <div class="text-[#ff0000] text-5xl font-bold p-5 md:p-5">
                                IT'S EXCITING
                            </div>
                            <div class="text-black mx-0 px-0 py-5 md:px-0 md:py-5">
                                NYATA Partner will receive special updates, photos and videos of the children and
                                communities
                                you’ve impacted and more.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-black font-bold text-5xl py-5 px-2">
                    YOU WILL RECEIVE
                </div>
                <div class="text-black font-normal text-base py-5 md:py-10 px-2 md:px-10">
                    Quarterly progress updates from the field, Welcome gift, Surprise end of the year sourvenir, photos
                    and
                    videos from the field, and more!
                </div>

    </section>
    <section class="flex relative max-w-none w-full h-[400px] md:h-[800px]">
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
    <div>

    </div>
@endsection
