@extends('layout.default')
@section('title', __('messages.HomePageTitle'))
@section('page-content')

{{-- CAROUSEL --}}
<section>
    <div id="default-carousel" class="relative md:h-full w-full overflow-x-hidden" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden h-[200px] 2xl:h-[740px] xl:h-[680px] lg:h-[520px] md:h-[500px] sm:h-[420px]">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/image/homepage/carousel/carousel01.jpg"
                    class="absolute w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="carousel01">
                <div
                    class="absolute inset-x-[15%] text-left text-white hidden sm:block 2xl:top-56 xl:top-56 lg:top-20 md:top-20 sm:top-4 animated animatedFadeInUp fadeInUp">
                    <h1 class="text-red title-header">{{ __('messages.EqualLearning') }}</h1>
                    <p class="text-white content-header pt-4">
                        {{ __('messages.EveryDonate') }}
                    </p>
                    <p class="text-white content-header pt-4">
                        {{ __('messages.MakeDreams') }}
                    </p>
                    <button type="button" class="px-3 py-2 my-8 bg-red-600 text-xl rounded-[10px] uppercase" onclick="window.location='{{ route('donate') }}'">
                        {{ __('messages.GiveSupport') }}
                    </button>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/image/homepage/carousel/carousel02.jpg"
                    class="absolute w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="carousel02">
                <div
                    class="absolute inset-x-[15%] text-left text-white hidden sm:block 2xl:top-56 xl:top-56 lg:top-20 md:top-20 sm:top-4 animated animatedFadeInUp fadeInUp">
                    <h1 class="text-red title-header">{{ __('messages.EqualLearning') }}</h1>
                    <p class="text-white content-header pt-4">
                        {{ __('messages.EveryDonate') }}
                    </p>
                    <p class="text-white content-header pt-4">
                        {{ __('messages.MakeDreams') }}
                    </p>
                    <button type="button" class="px-3 py-2 my-8 bg-red-600 text-xl rounded-[10px]" onclick="window.location='{{ route('donate') }}'">
                        {{ __('messages.GiveSupport') }}
                    </button>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out " data-carousel-item>
                <img src="/image/homepage/carousel/carousel03.jpg"
                    class="top-1/2 left-1/2" alt="carousel03">
                <div
                    class="absolute inset-x-[15%] text-left text-white hidden sm:block 2xl:top-56 xl:top-56 lg:top-20 md:top-20 sm:top-4 animated animatedFadeInUp fadeInUp">
                    <h1 class="text-red title-header">{{ __('messages.EqualLearning') }}</h1>
                    <p class="text-white content-header pt-4">
                        {{ __('messages.EveryDonate') }}
                    </p>
                    <p class="text-white content-header pt-4">
                        {{ __('messages.MakeDreams') }}
                    </p>
                    <button type="button" class="px-3 py-2 my-8 bg-red-600 text-xl rounded-[10px]" onclick="window.location='{{ route('donate') }}'">
                        {{ __('messages.GiveSupport') }}
                    </button>
                </div>
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

{{-- WHO WE ARE --}}
<section class="text-center w-full bg-white py-16">
    <h1 class="title-body text-black uppercase">{{ __('messages.WhoWeAre') }}</h1>
    <p class="content-body text-black mx-auto py-8 px-8 2xl:max-w-[1300px] xl:max-w-[1000px] lg:max-w-[800px] md:max-w-[700px] ">{{ __('messages.WhoWeAreDescription') }}</p>
</section>

{{-- WHAT WE HOLD --}}
<section class="text-center w-full bg-neutral-200 py-16">
    <h1 class="title-body text-black uppercase">{{ __('messages.WhatWeHold') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <div class="flex flex-row flex-wrap justify-center items-start py-5 my-5">
        <div class="flex flex-col justify-center py-5 px-5 max-w-md 2xl:max-w-md xl:basis-1/3 lg:max-w-xs">
            <img src="{{ URL::asset('image/homepage/icon/whatweholdicon01.png') }}" class="mx-auto max-w-xs py-2 animated animatedFadeInDown fadeInDown">
            <h2 class="title-body text-black uppercase py-4 font-bold">{{ __('messages.Sharing') }}</h2>
            <p class="content-body text-black mx-auto px-8">{{ __('messages.SharingDescription') }}</p>
        </div>
        <div class="flex flex-col justify-center py-2 px-5 max-w-md xl:basis-1/3 xl:max-w-md lg:max-w-xs">
            <img src="{{ URL::asset('image/homepage/icon/whatweholdicon02.png') }}" class="mx-auto max-w-xs py-2 animated animatedFadeInDown fadeInDown">
            <h2 class="title-body text-black uppercase py-4 font-bold">{{ __('messages.Empowerment') }}</h2>
            <p class="content-body text-black mx-auto px-8">{{ __('messages.EmpowermentDescription') }}</p>
        </div>
        <div class="flex flex-col justify-center py-5 px-5 max-w-md 2xl:max-w-md xl:basis-1/3 lg:max-w-xs">
            <img src="{{ URL::asset('image/homepage/icon/whatweholdicon03.png') }}" class="mx-auto max-w-xs py-2 animated animatedFadeInDown fadeInDown">
            <h2 class="title-body text-black uppercase py-4 font-bold">{{ __('messages.Professional') }}</h2>
            <p class="content-body text-black mx-auto px-8">{{ __('messages.ProfessionalDescription') }}</p>
        </div>
    </div>
</section>

{{-- EDUCATION IS THE HEART OF OUR FUTURE --}}
<section class="flex relative bg-cover bg-center bg-no-repeat bg-[url('/image/homepage/background/education-bg.jpg')] bg-white">
    <div class="relative flex flex-col justify-start inset-x-[10%] py-20 animated animatedFadeInUp fadeInUp">
        <h1 class="text-red title-header max-w-xs md:max-w-2xl">
            {{ __('messages.EducationHeart') }}
        </h1>
        <h1 class="text-red title-header max-w-xs md:max-w-md">
            {{ __('messages.OurFuture') }}
        </h1>
        <p class="py-3 text-white content-body font-bold max-w-xs 2xl:max-w-xl lg:max-w-md sm:max-w-xs">
            {{ __('messages.EducationHeartDescription') }}
        </p>
        <button type="button" class="py-3 my-5 bg-red-600 rounded-[10px] max-w-[150px] font-bold uppercase" onclick="window.location='{{ route('home') }}'">
            {{ __('messages.TakeAction') }}
        </button>
    </div>
</section>

{{-- OUR PROGRESS --}}
<section class="text-center w-full bg-neutral-200 py-16">
    <h1 class="title-body text-black uppercase">{{ __('messages.OurProgress') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <div class="flex flex-row flex-wrap justify-center items-start my-5">
        <div class="flex flex-col justify-center pb-8 px-5 max-w-xl basis-full sm:basis-1/2">
            <h1 class="text-red text-[70px] font-extrabold">1033</h1>
            <h2 class="title-body text-black mx-auto px-8 uppercase ">{{ __('messages.AdikAsuh') }}</h2>
        </div>
        <div class="flex flex-col justify-center pb-8 px-5 max-w-xl basis-full sm:basis-1/2">
            <h1 class="text-red text-[70px] font-extrabold">89</h1>
            <h2 class="title-body text-black mx-auto px-8 uppercase">{{ __('messages.Schools') }}</h2>
        </div>
    </div>
</section>

{{-- OUR SOLUTIONS --}}
<section class="text-center w-full bg-white py-16 px-8">
    <h1 class="title-body text-black uppercase">{{ __('messages.OurSolution') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <div class="flex flex-wrap justify-around items-start mx-auto">
        <div class="flex flex-col justify-center max-w-lg my-5 2xl:max-w-lg xl:max-w-[370px] lg:max-w-[300px]">
            <div class="flex relative bg-cover bg-center bg-no-repeat bg-[url('/image/our-solution/adik-asuh.jpg')] h-[350px] rounded-t-[25px]">
            </div>
            <div class="pb-8 py-5 bg-red rounded-b-[25px] text-white 2xl:h-[200px] xl:h-[230px] lg:h-[300px]">
                <h2 class="title-body px-3 text-center font-bold uppercase">
                    {{ __('messages.AdikAsuh') }}
                </h2>
                <p class="content-body px-10 py-5 text-center font-bold">
                    {{ __('messages.AdikAsuhDescriptionHome') }}
                </p>
            </div>
            <button type="button" class="px-3 py-2 my-8 bg-red-600 text-xl rounded-[10px] uppercase w-[200px] mx-auto" onclick="window.location='{{ route('adikasuh') }}'">
                {{ __('messages.LearnMore') }}
            </button>
        </div>
        <div class="flex flex-col justify-center max-w-lg my-5 2xl:max-w-lg xl:max-w-[370px] lg:max-w-[300px]">
            <div class="flex relative bg-cover bg-center bg-no-repeat bg-[url('/image/our-solution/travel-charity.jpg')] h-[350px] rounded-t-[25px]">
            </div>
            <div class="pb-4 py-5 bg-red rounded-b-[25px] text-white 2xl:h-[200px] xl:h-[230px] lg:h-[300px]">
                <h2 class="title-body px-3 text-center font-bold uppercase">
                    {{ __('messages.TravelCharity') }}
                </h2>
                <p class="content-body px-10 py-5 text-center font-bold">
                    {{ __('messages.TravelCharityDescriptionHome') }}
                </p>
            </div>
            <button type="button" class="px-3 py-2 my-8 bg-red-600 text-xl rounded-[10px] uppercase w-[200px] mx-auto" onclick="window.location='{{ route('travelcharity') }}'">
                {{ __('messages.LearnMore') }}
            </button>
        </div>
        <div class="flex flex-col justify-center max-w-lg my-5 2xl:max-w-lg xl:max-w-[370px] lg:max-w-[300px]">
            <div class="flex relative bg-cover bg-center bg-no-repeat bg-[url('/image/our-solution/act-of-kindness.jpg')] h-[350px] rounded-t-[25px]">
            </div>
            <div class="pb-6 py-5 bg-red rounded-b-[25px] text-white 2xl:h-[200px] xl:h-[230px] lg:h-[300px]">
                <h2 class="title-body px-3 text-center font-bold uppercase">
                    {{ __('messages.ActOfKindness') }}
                </h2>
                <p class="content-body px-10 py-5 text-center font-bold">
                    {{ __('messages.ActOfKindnessDescriptionHome') }}
                </p>
            </div>
            <button type="button" class="px-3 py-2 my-8 bg-red-600 text-xl rounded-[10px] uppercase w-[200px] mx-auto" onclick="window.location='{{ route('actofkindness') }}'">
                {{ __('messages.LearnMore') }}
            </button>
        </div>
    </div>
</section>

@endsection
