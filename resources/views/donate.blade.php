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
            <button type="button" class="px-3 py-2 my-8 bg-none border-2 border-white text-xl rounded-[10px] uppercase" onclick="window.location='{{ route('donationdetail') }}'">
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
                <button type="button" class="py-3 my-5 bg-red-600 rounded-[10px] max-w-[150px] font-bold uppercase" onclick="window.location='{{ route('donationdetail') }}'">
                    {{ __('messages.GiveSupport') }}
                </button>
            </div>
        </div>
        <div class="bg-[#ff0000] flex-auto w-full md:w-[400px] text-white font-extrabold">
            <div class="flex flex-col justify-start p-10 md:p-20">
                <h1 class="title-body text-white font-bold">{{__('messages.NoActOfKindness') }}</h1>
                <h1 class="title-body text-white font-bold pt-10"> - {{__('messages.Aesop') }}</h1>
            </div>
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
<section class="text-center w-full bg-white pt-16 pb-2">
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

{{-- YOU'LL RECEIVE --}}
<section class="text-center w-full bg-white pt-4 pb-8">
    <h1 class="title-body text-black uppercase">{{ __('messages.YouReceive') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <p class="content-body text-black py-4 max-w-2xl mx-auto">{{ __('messages.YouReceiveDescription') }}</p>
</section>

{{-- EDUCATION IS THE HEART OF OUR FUTURE --}}
<section class="flex relative bg-cover bg-center bg-no-repeat bg-[url('/image/homepage/background/education-bg.jpg')] bg-white">
    <div class="relative flex flex-col justify-start inset-x-[10%] py-20 animated animatedFadeInUp fadeInUp">
        <h1 class="text-red title-header max-w-xs md:max-w-[700px] lg:max-w-[900px]">
            {{ __('messages.EducationHeart') }}
        </h1>
        <h1 class="text-red title-header max-w-xs md:max-w-[700px]">
            {{ __('messages.OurFuture') }}
        </h1>
        <p class="py-3 text-white content-body font-bold max-w-xs 2xl:max-w-xl lg:max-w-md sm:max-w-xs">
            {{ __('messages.EducationHeartDescription') }}
        </p>
        <button type="button" class="py-3 my-5 bg-red-600 rounded-[10px] max-w-[150px] font-bold uppercase" onclick="window.location='{{ route('donationdetail') }}'">
            {{ __('messages.TakeAction') }}
        </button>
    </div>
</section>

{{-- SMALL ACTION--}}
<section>
    <div class="flex flex-wrap">
        <div class="bg-[#ff0000] flex-auto w-full md:w-[400px] text-white font-extrabold">
            <div class="flex flex-col justify-center text-center p-10 md:p-20">
                <h1 class="title-body text-white font-bold">{{__('messages.SmallActions') }}</h1>
                <h1 class="title-body text-white font-bold py-4">x</h1>
                <h1 class="title-body text-white font-bold"> {{__('messages.LotsOfPeople') }}</h1>
                <h1 class="title-body text-white font-bold py-4">=</h1>
                <h1 class="title-body text-white font-bold uppercase">{{__('messages.BigChange') }}</h1>
            </div>
        </div>
        <div class="bg-white flex-auto w-full md:w-[600px]">
            <div class="flex flex-col justify-start p-10 md:p-20">
                <h1 class="title-body text-black uppercase">{{__('messages.NotReadyGiveMonthly') }}</h1>
                <p class="text-black content-body pt-4 max-w-[800px]">
                    {{ __('messages.NotReadyGiveMonthlyDescription') }}
                </p>
                <button type="button" class="py-3 my-5 bg-red-600 rounded-[10px] max-w-[250px] font-bold uppercase" onclick="window.location='{{ route('donationdetail') }}'">
                    {{ __('messages.GiveSupportNow') }}
                </button>
            </div>
        </div>
    </div>
</section>

@endsection
