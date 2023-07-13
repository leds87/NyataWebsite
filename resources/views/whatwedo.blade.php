@extends('layout.default')
@php
    $locale = App::currentLocale();
    $currentPage = 'index';
    $i = 1;
    $j = 2;
@endphp

@section('title', __('messages.WhatWeDoTitle'))
@section('page-content')

{{-- HEADER IMAGE --}}
<section class="flex relative max-w-none w-full h-[500px]">
    <div
        class="relative w-full max-w-none bg-cover bg-fixed bg-no-repeat bg-[url('/image/what-we-do/header-bg.jpg')]">
        <div class="px-12 max-w-screen-xl text-left py-24 md:py-36 md:px-24 lg:py-32 lg:px-32 xl:py-40 animated animatedFadeInUp fadeInUp">
            <h1 class="title-header text-red uppercase">{{ __('messages.NyatakanKebaikan') }}</h1>
            <p class="text-white content-header pt-4">
                {{ __('messages.NyatakanKebaikanDescription') }}
            </p>
        </div>
    </div>
</section>

{{-- THE ISSUE--}}
<section>
    <div class="flex flex-wrap">
        <div class="bg-white flex-auto w-full md:w-[600px]">
            <div class="flex flex-col justify-start p-10 md:p-20">
                <h1 class="title-body text-black uppercase">{{__('messages.TheIssue') }}</h1>
                <p class="text-black content-body pt-4 max-w-[800px]">
                    {{ __('messages.TheIssueDescription') }}
                </p>
            </div>
        </div>
        <div class="bg-[#ff0000] flex-auto w-full md:w-[400px] text-white font-extrabold">
            <div class="flex flex-col justify-start p-10 md:p-20">
                <h1 class="title-body text-white font-bold">{{__('messages.NoCountry') }}</h1>
                <h1 class="title-body text-white font-bold pt-10"> - {{__('messages.NelsonMandela') }}</h1>
            </div>
        </div>
    </div>
</section>


{{-- WHAT WE HOLD --}}
<section class="text-center max-w-none w-full bg-neutral-200 py-16">
    {{-- <h1 class="text-4xl font-extrabold tracking-tight leading-none text-black md:text-5xl lg:text-6xl px-24 uppercase">{{ __('messages.WhatWeHold') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-64 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div> --}}
    <h1 class="title-body text-black uppercase">{{ __('messages.WhatWeHold') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <div class="flex flex-col flex-wrap justify-center w-full mx-auto py-5 my-5 max-w-[700px]">
        <div class="flex flex-col justify-center py-5 px-5">
            <img src="{{ URL::asset('image/what-we-do/direct-giving-icon.png') }}" class="mx-auto max-w-xs py-2">
            {{-- <h3 class="px-3 py-3 text-black text-3xl text-center font-bold uppercase">
                {{ __('messages.DirectGiving') }}
            </h3>
            <p class="px-3 py-3 text-black text-base text-center">
                {{ __('messages.DirectGivingDescription') }}
            </p> --}}
            <h2 class="title-body text-black font-bold mx-auto px-8 pt-2 uppercase mx-auto md:max-w-xs lg:max-w-none">{{ __('messages.DirectGiving') }}</h2>
            <p class="content-body text-black py-4 max-w-xs mx-auto md:max-w-xs lg:max-w-md">{{ __('messages.DirectGivingDescription') }}</p>
        </div>
        <div class="flex flex-col justify-center py-5 px-5">
            <img src="{{ URL::asset('image/what-we-do/local-support-icon.png') }}" class="mx-auto max-w-xs py-2">
            {{-- <h3 class="px-3 py-3 text-black text-3xl text-center font-bold uppercase">
                {{ __('messages.LocalSupport') }}
            </h3>
            <p class="px-3 py-3 text-black text-base text-center">
                {{ __('messages.LocalSupportDescription') }}
            </p> --}}
            <h2 class="title-body text-black font-bold mx-auto px-8 pt-2 uppercase mx-auto md:max-w-xs lg:max-w-none">{{ __('messages.LocalSupport') }}</h2>
            <p class="content-body text-black py-4 max-w-xs mx-auto md:max-w-xs lg:max-w-md">{{ __('messages.LocalSupportDescription') }}</p>
        </div>
        <div class="flex flex-col justify-center py-5 px-5">
            <img src="{{ URL::asset('image/what-we-do/operational-integrity-icon.png') }}" class="mx-auto max-w-xs py-2">
            {{-- <h3 class="px-3 py-3 text-black text-3xl text-center font-bold uppercase">
                {{ __('messages.OperationalIntegrity') }}
            </h3>
            <p class="px-3 py-3 text-black text-base text-center">
                {{ __('messages.OperationalIntegrityDescription') }}
            </p> --}}
            <h2 class="title-body text-black font-bold mx-auto px-8 pt-2 uppercase mx-auto md:max-w-xs lg:max-w-none">{{ __('messages.OperationalIntegrity') }}</h2>
            <p class="content-body text-black py-4 max-w-xs mx-auto md:max-w-xs lg:max-w-md">{{ __('messages.OperationalIntegrityDescription') }}</p>
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
            <button type="button" class="px-3 py-2 my-8 bg-[#ff0000] text-xl rounded-[10px] uppercase w-[200px] mx-auto" onclick="window.location='{{ route('adikasuh') }}'">
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
            <button type="button" class="px-3 py-2 my-8 bg-[#ff0000] text-xl rounded-[10px] uppercase w-[200px] mx-auto" onclick="window.location='{{ route('travelcharity') }}'">
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
            <button type="button" class="px-3 py-2 my-8 bg-[#ff0000] text-xl rounded-[10px] uppercase w-[200px] mx-auto" onclick="window.location='{{ route('actofkindness') }}'">
                {{ __('messages.LearnMore') }}
            </button>
        </div>
    </div>
</section>

@endsection
