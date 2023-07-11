@extends('layout.default')
@section('title', __('messages.ActOfKindnessTitle'))
@section('page-content')

{{-- HEADER IMAGE --}}
<section class="flex relative max-w-none w-full h-[500px]">
    <div
        class="relative w-full max-w-none bg-cover bg-fixed bg-no-repeat bg-[url('/image/act-of-kindness/header-bg.jpg')]">
        <div class="px-12 max-w-screen-xl text-left py-8 md:py-36 md:px-24 lg:py-32 lg:px-32 xl:py-40">
            <h1 class="mb-4 text-6xl font-extrabold tracking-tight leading-none text-[#ff0000] max-w-md md:text-5xl lg:text-6xl lg:max-w-none uppercase">{{ __('messages.ActOfKindness') }}</h1>
            <p class="mb-4 text-2xl font-extrabold tracking-wider leading-8 text-white">{{ __('messages.ActOfKindnessHeaderDescription') }}</p>
        </div>
    </div>
</section>

{{-- RECORD --}}
<section class="text-center max-w-none w-full bg-white py-16 px-8 lg:text-left">
    <div class="grid px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-start lg:col-span-5 pb-10 text-black">
            <p class="text-black dark:text-gray-400 pt-6 max-w-[68rem] text-left tracking-wider font-bold text-2xl">{{ __('messages.Record') }}</p>
            <p class="py-20">
                {{ __('messages.RecordDescription') }}
            </p>
            <button class="w-[150px] h-[40px] bg-[#ff0000] rounded-xl text-white font-bold" onclick="window.location='{{ route('actofkindness') }}'">
                {{ __('messages.LearnMore') }}
            </button>
        </div>
        <div class="lg:mt-0 lg:col-span-7 lg:flex">
            <div class="bg-cover bg-center bg-[url('/image/act-of-kindness/random-act-of-kindness.jpg')] w-full h-[500px] rounded-3xl"></div>
            {{-- <img src="{{ URL::asset('image/act-of-kindness/random-act-of-kindness.jpg') }}" class="rounded-3xl w-full h-auto"> --}}
        </div>
    </div>
</section>

{{-- GET INVOLVED --}}
<section class="text-center max-w-none w-full bg-neutral-200 py-16">
    <h1 class="text-4xl font-extrabold tracking-tight leading-none text-black md:text-5xl lg:text-6xl px-24 uppercase">{{ __('messages.OurSolution') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-64 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <div class="flex flex-wrap justify-evenly mx-auto">
        <div class="flex flex-row flex-wrap justify-center pt-6 md:mx-6">
            <div class="basis-full justify-center py-5 px-5 mb-20 md:mb-0 lg:basis-1/3 lg:mb-0">
                <img src="{{ URL::asset('image/act-of-kindness/Act-of-Kindness-act-1.jpg') }}"
                    class="rounded-t-3xl h-full w-full items-center max-h-[320px]">
                <div class="px-0 py-5 bg-[#ff0000] rounded-b-3xl text-white">
                    <h3 class="px-3 pt-5 text-3xl text-center font-bold uppercase">
                        {{ __('messages.Act1') }}
                    </h3>
                    <p class="px-3 py-5 text-base text-center max-w-md mx-auto">
                        {{ __('messages.Act1Description') }}
                    </p>
                </div>
                <div class="px-0 py-5 text-center">
                    <button type="button" class="w-2/4 px-3 py-3 bg-[#ff0000] rounded-lg uppercase" onclick="window.location='{{ route('takeaction') }}'">
                        {{ __('messages.Volunteer') }}
                    </button>
                </div>
            </div>
            <div class="basis-full justify-center py-5 px-5 mb-20 md:mb-0 lg:basis-1/3 lg:mb-0">
                <img src="{{ URL::asset('image/act-of-kindness/Act-of-Kindness-act-2.jpg') }}"
                    class="rounded-t-3xl h-full w-full items-center max-h-[320px]">
                <div class="px-0 pt-5 pb-[44px] bg-[#ff0000] rounded-b-3xl text-white">
                    <h3 class="px-3 pt-5 text-3xl text-center font-bold uppercase">
                        {{ __('messages.Act2') }}
                    </h3>
                    <p class="px-3 py-5 text-base text-center max-w-md mx-auto">
                        {{ __('messages.Act2Description') }}
                    </p>
                </div>
                <div class="px-0 py-5 text-center">
                    <button type="button" class="w-2/4 px-3 py-3 bg-[#ff0000] rounded-lg uppercase" onclick="window.location='{{ route('takeaction') }}'">
                        {{ __('messages.JoinTemanNyata') }}
                    </button>
                </div>
            </div>
            <div class="basis-full justify-center py-5 px-5 mb-20 md:mb-0 lg:basis-1/3 lg:mb-0">
                <img src="{{ URL::asset('image/act-of-kindness/Act-of-Kindness-act-3.jpg') }}"
                    class="rounded-t-3xl h-full w-full items-center max-h-[320px]">
                <div class="px-0 pt-5 pb-[44px] bg-[#ff0000] rounded-b-3xl text-white">
                    <h3 class="px-3 pt-5 text-3xl text-center font-bold uppercase">
                        {{ __('messages.Act3') }}
                    </h3>
                    <p class="px-3 py-5 text-base text-center max-w-md mx-auto">
                        {{ __('messages.Act3Description') }}
                    </p>
                </div>
                <div class="px-0 py-5 text-center">
                    <button type="button" class="w-2/4 px-3 py-3 bg-[#ff0000] rounded-lg uppercase" onclick="window.open('https://www.instagram.com/nyatafoundation/', '_blank')">
                        {{ __('messages.VisitInstagram') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FOUNDING STORY --}}
<section class="text-center max-w-none w-full bg-white py-16">
    <h1 class="text-4xl font-extrabold tracking-tight leading-none text-black md:text-5xl lg:text-6xl px-24 uppercase">{{ __('messages.ExploreBeauty') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-64 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <div class="px-8 md:px-24">
        <p class="text-black dark:text-gray-400 pt-6 max-w-[68rem] text-left tracking-wider font-bold">{{ __('messages.WhyYouChooseAct') }}</p>
        <p class="text-black dark:text-gray-400 pt-4 pb-2 max-w-[68rem] text-left tracking-wider">{{ __('messages.WhyYouChooseActDescription') }}</p>

        <p class="text-black dark:text-gray-400 pt-6 max-w-[68rem] text-left tracking-wider font-bold">{{ __('messages.HowCanYouHelp') }}</p>
        <p class="text-black dark:text-gray-400 pt-4 pb-2 max-w-[68rem] text-left tracking-wider"><span class="font-bold">{{ __('messages.Volunteer') }} : </span> {{ __('messages.HowCanYouHelpVolunteerDescription') }}</p>
        <p class="text-black dark:text-gray-400 pb-2 max-w-[68rem] text-left tracking-wider"><span class="font-bold">{{ __('messages.Donate') }} : </span> {{ __('messages.HowCanYouHelpDonateDescription') }}</p>

        <p class="text-black dark:text-gray-400 pt-6 max-w-[68rem] text-left tracking-wider font-bold">{{ __('messages.WhoYouHelp') }}</p>
        <p class="text-black dark:text-gray-400 pt-4 pb-2 max-w-[68rem] text-left tracking-wider">{{ __('messages.WhoYouHelpAct') }}</p>
    </div>
</section>

@endsection