@extends('layout.default')
@section('title', __('messages.DonateTitle'))
@section('page-content')

{{-- HEADER IMAGE --}}
<section class="flex relative max-w-none w-full h-[500px]">
    <div
        class="relative w-full max-w-none bg-cover bg-fixed bg-center bg-no-repeat bg-[url('/image/donate/header-bg.jpg')]">
        <div class="px-12 max-w-screen-xl text-center mx-auto py-16 md:py-28 md:px-24 lg:py-20 lg:px-32 xl:py-28">
            <h1 class="title-header text-red uppercase">{{__('messages.Teman') }}</h1>
            <h1 class="title-header text-white uppercase mt-[-35px]">{{__('messages.Nyata') }}</h1>
            <p class="text-white content-header pt-4 max-w-[600px] mx-auto">
                {{ __('messages.TemanNyataDescription') }}
            </p>
            <button type="button" class="px-3 py-2 my-8 bg-none border-2 border-white text-xl rounded-[10px] uppercase" onclick="window.location='{{ route('donate') }}'">
                {{ __('messages.GiveSupport') }}
            </button>
        </div>
    </div>
</section>

{{-- MAKE A DIFFERENCE--}}
<section>
    <div class="flex flex-wrap">
        <div class="bg-white flex-auto w-full md:w-[600px]">
            <div class="flex flex-col justify-start p-10 md:p-20">
                <h1 class="title-body text-black uppercase">{{__('messages.YouCanMakeDifference') }}</h1>
                <p class="text-black content-body pt-4 max-w-[800px]">
                    {{ __('messages.YouCanMakeDifferenceDescription') }}
                </p>
            </div>
        </div>
        <div class="bg-[#ff0000] flex-auto w-full md:w-[400px] text-white font-extrabold">
            <div class="flex flex-col justify-start p-10 md:p-20">
                <h1 class="title-body text-white font-bold">{{__('messages.NoActOfKindness') }}</h1>
                <h1 class="title-body text-white font-bold pt-10"> - {{__('messages.Aesop') }}</h1>
            </div>
        </div>
</section>

{{-- PROGRAM --}}
<section>
    <div class="sm:hidden">
        <div>
            <div class="inline-block w-full font-bold text-xl bg-neutral-200">
                <div class=" p-4 text-black uppercase">
                    {{__('messages.SchoolBuild') }}
                </div>
            </div>
            <p class="py-3 px-8 text-white content-body font-bold max-w-[1200px] mx-auto self-end bg-red-600/20 rounded-2xl">
                {{ __('messages.SchoolBuildDescription') }}
            </p>
            <img src="{{ URL::asset('image/donate/school-build.jpg') }}" class="w-full transition duration-700" alt="school build">
        </div>
        <div>
            <div class="inline-block w-full font-bold text-xl bg-neutral-200">
                <div class=" p-4 text-black uppercase">
                    {{__('messages.GrowTeacherDonate') }}
                </div>
            </div>
            <p class="py-3 px-8 text-white content-body font-bold max-w-[1200px] mx-auto self-end bg-red-600/20 rounded-2xl">
                {{ __('messages.GrowTeacherDescription') }}
            </p>
            <img src="{{ URL::asset('image/donate/grow-teacher.jpg') }}" class="w-full transition duration-700" alt="grows teachers">
        </div>
        <div>
            <div class="inline-block w-full font-bold text-xl bg-neutral-200">
                <div class=" p-4 text-black uppercase">
                    {{__('messages.ChildrenNutrition') }}
                </div>
            </div>
            <p class="py-3 px-8 text-white content-body font-bold max-w-[1200px] mx-auto self-end bg-red-600/20 rounded-2xl">
                {{ __('messages.ChildrenNutritionDescription') }}
            </p>
            <img src="{{ URL::asset('image/donate/children-nutrition.jpg') }}" class="w-full transition duration-700">
        </div>
        <div>
            <div class="inline-block w-full font-bold text-xl bg-neutral-200">
                <div class=" p-4 text-black uppercase">
                    {{__('messages.Scholarships') }}
                </div>
            </div>
            <p class="py-3 px-8 text-white content-body font-bold max-w-[1200px] mx-auto self-end bg-red-600/20 rounded-2xl">
                {{ __('messages.ScholarshipsDescription') }}
            </p>
            <img src="{{ URL::asset('image/donate/scholarship.jpg') }}" class="w-full transition duration-700">
        </div>
    </div>
    <div>
        <ul class="hidden text-xl font-medium text-center divide-x active:text-[#ff0000] divide-[#ff0000] sm:flex"
            id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="w-full" role="presentation">
                <button
                    class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                    id="school-tab" data-tabs-target="#school" type="button" role="tab"
                    aria-controls="school" aria-selected="false">
                    <div class=" p-4 text-black hover:text-[white] uppercase">
                        {{__('messages.SchoolBuild') }}
                    </div>
                </button>
            </li>
            <li class="w-full" role="presentation">
                <button
                    class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                    id="teacher-tab" data-tabs-target="#teacher" type="button" role="tab"
                    aria-controls="teacher" aria-selected="false">
                    <div class=" p-4 text-black hover:text-[white] uppercase">
                        {{__('messages.GrowTeacherDonate') }}
                    </div>
                </button>
            </li>
            <li class="w-full" role="presentation">
                <button
                    class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000] active"
                    id="children-tab" data-tabs-target="#children" type="button" role="tab"
                    aria-controls="children" aria-selected="false">
                    <div class="p-4 text-black hover:text-[white] uppercase">
                        {{__('messages.ChildrenNutrition') }}
                    </div>
                </button>
            </li>
            <li class="w-full" role="presentation">
                <button
                    class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                    id="scholarship-tab" data-tabs-target="#scholarship" type="button" role="tab"
                    aria-controls="scholarship" aria-selected="false">
                    <div class="p-4 text-black hover:text-[white] uppercase">
                        {{__('messages.Scholarships') }}
                    </div>
                </button>
            </li>
        </ul>
    </div>
    <div id="myTabContent" class="hidden md:block">
        <div class="hidden transition-all duration-700 ease-in-out" id="school" role="tabpanel"
            aria-labelledby="school-tab">
            <div class="flex relative bg-cover bg-center bg-no-repeat bg-[url('/image/donate/school-build.jpg')] h-[750px]">
                <p class="py-3 px-8 mb-10 text-white content-body font-bold max-w-[800px] mx-auto self-end bg-red-600/40 rounded-2xl 2xl:max-w-[1200px] xl:max-w-[1000px] lg:max-w-[800px] md:max-w-[600px]">
                    {{ __('messages.SchoolBuildDescription') }}
                </p>
            </div>
            {{-- <img src="{{ URL::asset('image/donate/school-build.jpg') }}" class="w-full transition duration-700"> --}}
        </div>
        <div class="hidden transition-all duration-700 ease-in-out" id="teacher" role="tabpanel"
            aria-labelledby="teacher-tab">
            <div class="flex relative bg-cover bg-center bg-no-repeat bg-[url('/image/donate/grow-teacher.jpg')] h-[750px]">
                <p class="py-3 px-8 mb-10 text-white content-body font-bold max-w-[800px] mx-auto self-end bg-red-600/40 rounded-2xl 2xl:max-w-[1200px] xl:max-w-[1000px] lg:max-w-[800px] md:max-w-[600px]">
                    {{ __('messages.GrowTeacherDescription') }}
                </p>
            </div>
            {{-- <img src="{{ URL::asset('image/donate/grow-teacher.jpg') }}" class="w-full"> --}}
        </div>
        <div class="hidden transition-all duration-700 ease-in-out" id="children" role="tabpanel"
            aria-labelledby="children-tab">
            <div class="flex relative bg-cover bg-center bg-no-repeat bg-[url('/image/donate/children-nutrition.jpg')] h-[750px]">
                <p class="py-3 px-8 mb-10 text-white content-body font-bold max-w-[800px] mx-auto self-end bg-red-600/40 rounded-2xl 2xl:max-w-[1200px] xl:max-w-[1000px] lg:max-w-[800px] md:max-w-[600px]">
                    {{ __('messages.ChildrenNutritionDescription') }}
                </p>
            </div>
            {{-- <img src="{{ URL::asset('image/donate/children-nutrition.jpg') }}" class="w-full"> --}}
        </div>
        <div class="hidden transition-all duration-700 ease-in-out" id="scholarship" role="tabpanel"
            aria-labelledby="scholarship-tab">
            <div class="flex relative bg-cover bg-center bg-no-repeat bg-[url('/image/donate/scholarship.jpg')] h-[750px]">
                <p class="py-3 px-8 mb-10 text-white content-body font-bold max-w-[800px] mx-auto self-end bg-red-600/40 rounded-2xl 2xl:max-w-[1200px] xl:max-w-[1000px] lg:max-w-[800px] md:max-w-[600px]">
                    {{ __('messages.ScholarshipsDescription') }}
                </p>
            </div>
            {{-- <img src="{{ URL::asset('image/donate/scholarship.jpg') }}" class="w-full"> --}}
        </div>
    </div>
</section>

{{-- WHY GIVE MONTHLY --}}
<section class="text-center w-full bg-white py-16">
    <h1 class="title-body text-black uppercase">{{ __('messages.WhyGiveMonthly') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <div class="flex flex-row flex-wrap justify-center items-start my-5">
        <div class="flex flex-col justify-center pb-8 px-5 max-w-xl basis-full sm:basis-1/2">
            <h2 class="title-body text-red font-bold mx-auto px-8 uppercase mx-auto md:max-w-xs lg:max-w-none">{{ __('messages.Affordable') }}</h2>
            <p class="content-body text-black py-4 max-w-xs mx-auto md:max-w-xs">{{ __('messages.AffordableDescription') }}</p>
        </div>
        <div class="flex flex-col justify-center pb-8 px-5 max-w-xl basis-full sm:basis-1/2">
            <h2 class="title-body text-red font-bold mx-auto px-8 uppercase mx-auto md:max-w-xs lg:max-w-none">{{ __('messages.Community') }}</h2>
            <p class="content-body text-black py-4 max-w-xs mx-auto md:max-w-xs">{{ __('messages.CommunityDescription') }}</p>
        </div>
    </div>
    <div class="flex flex-row flex-wrap justify-center items-start my-5">
        <div class="flex flex-col justify-center pb-8 px-5 max-w-xl basis-full sm:basis-1/2">
            <h2 class="title-body text-red font-bold mx-auto px-8 uppercase mx-auto md:max-w-xs lg:max-w-none">{{ __('messages.SustainedSupport') }}</h2>
            <p class="content-body text-black py-4 max-w-xs mx-auto md:max-w-xs">{{ __('messages.SustainedSupportDescription') }}</p>
        </div>
        <div class="flex flex-col justify-center pb-8 px-5 max-w-xl basis-full sm:basis-1/2">
            <h2 class="title-body text-red font-bold mx-auto px-8 uppercase mx-auto md:max-w-xs lg:max-w-none">{{ __('messages.ItsExiting') }}</h2>
            <p class="content-body text-black py-4 max-w-xs mx-auto md:max-w-xs">{{ __('messages.ItsExitingDescription') }}</p>
        </div>
    </div>
</section>

    {{-- <section>
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
                    <div class="text-base text-black py-5 font-normal">
                        TEMAN NYATA is a monthly giving program where every dollar goes toward educating a child. You are
                        making an impact in someone else's life, every single month.
                    </div>
                    <button class="w-[170px] h-[40px] bg-[#ff0000] rounded-xl text-white font-bold">
                        GIVE SUPPORT
                    </button>
                </div>

            </div>
            <div class="bg-[#ff0000] flex-auto w-full md:w-[350px] text-white font-bold text-5xl]">
                <div class="flex flex-col mx-auto p-20">
                    <div class="text-5xl py-2">
                        No act of kindness,
                    </div>
                    <div class="text-5xl py-2">
                        no matter how small,
                    </div>
                    <div class="text-5xl py-2">
                        is ever wasted
                    </div>
                    <div class="text-5xl py-2 pt-10">
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
                    WHY GIVE MONTHLY?
                </div>
                <!--<div class="grid grid-cols-2 gap-8">-->
                <div class="flex flex-wrap justify-center mx-0 md:mx-auto px-20">
                    <!-- half left -->
                    <div class="flex flex-col md:basis-1/4">
                        <div class="flex flex-col justify-center py-0 md:py-5 px-0 md:px-10">
                            <div class="text-[#FF0000] text-3xl font-bold p-5 md:p-5">
                                AFFORDABLE
                            </div>
                            <div class="text-black text-base">
                                By giving monthly, you invest what makes sense for you and make an incredible impact over
                                the
                                course of your membership
                            </div>
                        </div>
                        <div class="flex flex-col justify-center px-0 md:px-10">
                            <div class="text-[#ff0000] text-3xl font-bold p-5 md:p-5">
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
                    <div class="flex flex-col md:basis-1/4 mx-0 px-0">
                        <div class="flex flex-col justify-center py-0 md:py-5 px-0 md:px-10">
                            <div class="text-[#ff0000] text-3xl font-bold p-5 md:p-5">
                                SUSTAINED SUPPORT
                            </div>
                            <div class="text-black">
                                Enables NYATA to expand our programs because we know we have the ongoing support from the
                                NYATA
                                Partner community
                            </div>
                        </div>
                        <div class="flex flex-col justify-center mx-0 px-0 md:px-10">
                            <div class="text-[#ff0000] text-3xl font-bold p-5 md:p-5">
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
                <div class="text-black font-normal px-2 text-base py-5 md:py-5 md:px-10 mx-[200px]">
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

    </div> --}}
@endsection
