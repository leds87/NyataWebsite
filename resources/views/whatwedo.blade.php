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
        class="relative w-full max-w-none bg-cover bg-center bg-fixed bg-no-repeat bg-[url('/image/homepage/carousel/carousel03.jpg')]">
        <div class="px-12 max-w-screen-xl text-left py-24 md:py-36 md:px-24 lg:py-32 lg:px-32 xl:py-40">
            <h1 class="mb-4 text-6xl font-extrabold tracking-tight leading-none text-[#ff0000] max-w-md md:text-5xl lg:text-6xl lg:max-w-none">NYATA-KAN KEBAIKAN</h1>
            <p class="mb-4 text-2xl font-extrabold tracking-wider leading-8 text-white">Discover how NYATA spreads goodness and change for the nation’s children</p>
        </div>
    </div>
</section>

{{-- THE ISSUE--}}
<section>
    <div class="flex flex-wrap">
        <div class="flex-auto basis 1/3 w-full bg-white">
        </div>
        <div class="bg-white flex-auto w-full md:w-[600px]">
            <div class="flex flex-col justify-start p-10 md:p-20">
                <div class="font-bold text-5xl text-black py-5 uppercase">
                    {{ __('messages.TheIssue') }}
                </div>
                <div class="text-base text-black py-5 tracking-wider leading-7">
                    {{ __('messages.TheIssueDescription') }}
                </div>
                {{-- <button class="w-[150px] h-[40px] bg-[#ff0000] rounded-xl text-white font-bold">
                    {{ __('messages.GiveSupport') }}
                </button> --}}
            </div>
        </div>
        <div class="bg-[#ff0000] flex-auto w-full md:w-[400px] text-white font-extrabold">
            <div class="flex flex-col mx-auto p-20 lg:py-32 xl:p-16 xl:pt-36">
                <div class="text-3xl py-2 lg:text-4xl">
                    "No country can really develop unless its,<br/>citizen are educated"
                </div>
                <div class="text-2xl py-2 lg:text-3xl">
                    - Nelson Mandela
                </div>
            </div>
        </div>
</section>

{{-- FOUNDING STORY --}}
<section class="text-center max-w-none w-full bg-neutral-200 py-16">
    <h1 class="text-4xl font-extrabold tracking-tight leading-none text-black md:text-5xl lg:text-6xl px-24 uppercase">{{ __('messages.WhatWeHold') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-64 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <div class="flex flex-col flex-wrap justify-center w-full mx-auto py-5 my-5 max-w-[700px]">
        <div class="flex flex-col justify-center py-5 px-5">
            <img src="{{ URL::asset('image/homepage/icon/whatweholdicon01.png') }}" class="mx-auto max-w-xs py-2">
            <h3 class="px-3 py-3 text-black text-3xl text-center font-bold uppercase">
                {{ __('messages.DirectGiving') }}
            </h3>
            <p class="px-3 py-3 text-black text-base text-center">
                {{ __('messages.DirectGivingDescription') }}
            </p>
        </div>
        <div class="flex flex-col justify-center py-5 px-5">
            <img src="{{ URL::asset('image/homepage/icon/whatweholdicon02.png') }}" class="mx-auto max-w-xs py-2">
            <h3 class="px-3 py-3 text-black text-3xl text-center font-bold uppercase">
                {{ __('messages.LocalSupport') }}
            </h3>
            <p class="px-3 py-3 text-black text-base text-center">
                {{ __('messages.LocalSupportDescription') }}
            </p>
        </div>
        <div class="flex flex-col justify-center py-5 px-5">
            <img src="{{ URL::asset('image/homepage/icon/whatweholdicon03.png') }}" class="mx-auto max-w-xs py-2">
            <h3 class="px-3 py-3 text-black text-3xl text-center font-bold uppercase">
                {{ __('messages.OperationalIntegrity') }}
            </h3>
            <p class="px-3 py-3 text-black text-base text-center">
                {{ __('messages.OperationalIntegrityDescription') }}
            </p>
        </div>
    </div>
</section>

{{-- OUR SOLUTION --}}
<section class="text-center max-w-none w-full bg-white py-16">
    <h1 class="text-4xl font-extrabold tracking-tight leading-none text-black md:text-5xl lg:text-6xl px-24 uppercase">{{ __('messages.OurSolution') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-64 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <div class="flex flex-wrap justify-evenly mx-auto">
        <div class="flex flex-row flex-wrap justify-center pt-6 md:mx-6">
            <div class="basis-full justify-center py-5 px-5 lg:basis-1/3">
                <img src="{{ URL::asset('image/homepage/oursolution/oursolution01.jpg') }}"
                    class="rounded-t-3xl h-full w-full items-center max-h-[320px]">
                <div class="px-0 py-5 bg-[#ff0000] rounded-b-3xl text-white">
                    <h3 class="px-3 pt-5 text-3xl text-center font-bold">
                        ADIK ASUH
                    </h3>
                    <p class="px-3 py-5 text-base text-center max-w-md mx-auto">
                        Join us to be foster brother and sister and help the children reach a brigther future
                    </p>
                </div>
                <div class="px-0 py-5 text-center">
                    <button type="button" class="w-2/4 px-3 py-3 bg-[#ff0000] rounded-lg" onclick="window.location='{{ route('adikasuh') }}'">
                        LEARN MORE
                    </button>
                </div>
            </div>
            <div class="basis-full justify-center py-5 px-5 lg:basis-1/3">
                <img src="{{ URL::asset('image/homepage/oursolution/oursolution02.jpg') }}"
                    class="rounded-t-3xl h-full w-full items-center max-h-[320px]">
                <div class="px-0 py-5 bg-[#ff0000] rounded-b-3xl text-white">
                    <h3 class="px-3 pt-5 text-3xl text-center font-bold">
                        TRAVEL CHARITY
                    </h3>
                    <p class="px-3 py-5 text-base text-center max-w-md mx-auto">
                        Help local livelihoods and economic communities while travel to explore the beauty of Indonesia
                    </p>
                </div>
                <div class="px-0 py-5 text-center">
                    <button type="button" class="w-2/4 px-3 py-3 bg-[#ff0000] rounded-lg" onclick="window.location='{{ route('travelcharity') }}'">
                        LEARN MORE
                    </button>
                </div>
            </div>
            <div class="basis-full justify-center py-5 px-5 lg:basis-1/3">
                <img src="{{ URL::asset('image/homepage/oursolution/oursolution03.jpg') }}"
                    class="rounded-t-3xl h-full w-full items-center max-h-[320px]">
                <div class="px-0 py-5 bg-[#ff0000] rounded-b-3xl text-white">
                    <h3 class="px-3 pt-5 text-3xl text-center font-bold">
                        ACT OF KINDNESS
                    </h3>
                    <p class="px-3 py-5 text-base text-center max-w-md mx-auto">
                        Gives the good deeds to the school, organization, individual or community that in need
                    </p>
                </div>
                <div class="px-0 py-5 text-center">
                    <button type="button" class="w-2/4 px-3 py-3 bg-[#ff0000] rounded-lg" onclick="window.location='{{ route('actofkindness') }}'">
                        LEARN MORE
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
