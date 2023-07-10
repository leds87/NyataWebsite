@extends('layout.default')
@section('title', __('messages.AdikAsuhTitle'))
@section('page-content')

{{-- HEADER IMAGE --}}
<section class="flex relative max-w-none w-full h-[500px]">
    <div
        class="relative w-full max-w-none bg-cover bg-center bg-fixed bg-no-repeat bg-[url('/image/donate/AdikAsuhWide.jpg')]">
        <div class="px-12 text-center py-8 md:py-36 md:px-24 lg:py-32 lg:px-32 xl:py-40">
            <h1 class="mb-4 text-6xl font-extrabold tracking-tight leading-none text-[#ff0000] max-w-md md:text-5xl lg:text-6xl lg:max-w-none uppercase mx-auto">{{ __('messages.AdikAsuh') }}</h1>
            <p class="mb-4 text-2xl font-extrabold tracking-wider leading-8 text-white max-w-[800px] mx-auto">{{ __('messages.AdikAsuhDescription') }}</p>
            <div class="px-0 py-5 text-center">
                <button type="button" class="w-fit px-3 py-3 bg-[#ff0000] rounded-lg uppercase font-bold" onclick="window.location='{{ route('adikasuh') }}'">
                    {{ __('messages.GiveSupport') }}
                </button>
            </div>
        </div>
    </div>
</section>

{{-- COUNT --}}
<section class="text-center max-w-none w-full bg-white">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="grid gap-8 md:grid-cols-2 font-bold">
            <div>
                <h3 class="px-3 py-3 text-red-500 text-7xl">
                    1788
                </h3>
                <p class="px-3 py-3 text-black text-xl font-museo700 uppercase">
                    {{ __('messages.AdikAsuh') }}
                </p>
            </div>
            <div>
                <h3 class="px-3 py-3 text-red-500 text-7xl">
                    35
                </h3>
                <p class="px-3 py-3 text-black text-xl font-museo700 uppercase">
                    {{ __('messages.Schools') }}
                </p>
            </div>
        </div>
    </div>
</section>

{{-- MAP --}}
<section class="text-center max-w-none w-full h-auto bg-neutral-200">
    <div class="p-4 xl:p-8 text-right">
        <button type="button" class="w-fit px-3 py-3 bg-[#ff0000] rounded-lg uppercase font-bold" onclick="window.location='{{ route('adikasuh') }}'">
            {{ __('messages.SeeAll') }}
        </button>
    </div>
    <div class="relative overflow-x-auto w-full h-auto">
        <img src="/image/share/IndonesiaMap.png"
            class="relative bg-cover p-4 xl:p-8">
        {{-- <button data-popover-target="popover-default" type="button"
            class="absolute top-[100px] left-[200px] bg-[#ffFF00] w-4 h-4 ring-4 ring-white focus:ring-4 focus:outline-none focus:ring-white rounded-xl">
        </button> --}}
    </div>
    {{-- <div data-popover id="popover-default" role="tooltip"
        class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
        <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
            <h3 class="font-semibold text-gray-900 dark:text-white">Popover title</h3>
        </div>
        <div class="px-3 py-2">
            <p>And here's some amazing content. It's very engaging. Right?</p>
        </div>
        <div data-popper-arrow></div>
    </div> --}}
</section>

{{-- CONTENT IMAGE --}}
<section class="flex relative max-w-none w-full h-[500px]">
    <div
        class="relative w-full max-w-none bg-cover bg-fixed bg-no-repeat bg-[url('/image/homepage/carousel/carousel03.jpg')]">
        <div class="px-12 text-left py-28 md:py-48 md:px-24 lg:py-32 lg:px-32 xl:py-40">
            <h1 class="mb-4 text-6xl font-extrabold tracking-tight leading-none text-[#ff0000] max-w-md md:text-5xl lg:text-6xl lg:max-w-none uppercase mx-auto">{{ __('messages.Aku') }} <span class="text-white underline underline-offset-4">{{ __('messages.Bintang') }}</span></h1>
            <h1 class="mb-4 text-6xl font-extrabold tracking-tight leading-none text-[#ff0000] max-w-md md:text-5xl lg:text-6xl lg:max-w-none uppercase mx-auto">{{ __('messages.AnakTerang') }}</h1>
        </div>
    </div>
</section>

{{-- MEET MARIA --}}
<section class="text-center max-w-none w-full bg-white py-16 px-8">
    <h1 class="text-4xl font-extrabold tracking-tight leading-none text-black md:text-5xl lg:text-6xl px-24 uppercase mx-auto">{{ __('messages.MeetMaria') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-64 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <div class="gap-8 items-start py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 lg:grid lg:grid-cols-2 sm:py-16 lg:px-6">
        <div class="mt-4 md:mt-0">
            <div class="flex flex-wrap py-4">
                <table class="table-fit text-xs leading-6 text-left text-black md:text-xl md:leading-10">
                    <tbody>
                        <tr>
                            <td>{{ __('messages.Name') }}</td>
                            <td class="px-16">:</td>
                            <td class="font-bold">Maria Magdalena Natailia Katu</td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Nickname') }}</td>
                            <td class="px-16">:</td>
                            <td class="font-bold">Natailia</td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Age') }}</td>
                            <td class="px-16">:</td>
                            <td class="font-bold">12 years old</td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Education') }}</td>
                            <td class="px-16">:</td>
                            <td class="font-bold">Junior High School / SMP</td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Birth') }}</td>
                            <td class="px-16">:</td>
                            <td class="font-bold">Alor, 27 December 2009</td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Dream') }}</td>
                            <td class="px-16">:</td>
                            <td class="font-bold">Doctor</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex flex-wrap py-4">
                <div>
                    <p class="tracking-widest text-left text-black">
                        {{ __('messages.MeetDescription') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <img class="w-full rounded-3xl" src="/image/other/Act-of-Kindness-act-3.jpg">
        </div>
    </div>
</section>

{{-- WHY CHOOSE --}}
<section class="text-center max-w-none w-full bg-neutral-200 py-16">
    <h1 class="text-4xl font-extrabold tracking-tight leading-none text-black md:text-5xl lg:text-6xl px-24 uppercase">{{ __('messages.WhatWeHold') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-64 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <div class="flex flex-col flex-wrap justify-center w-full mx-auto py-5 my-5 max-w-[700px]">
        <div class="flex flex-col justify-center py-5 px-5">
            <img src="{{ URL::asset('image/homepage/icon/whatweholdicon01.png') }}" class="mx-auto max-w-xs py-2">
            <h3 class="px-3 py-3 text-black text-3xl text-center font-bold">
                {{ __('messages.DirectGiving') }}
            </h3>
            <p class="px-3 py-3 text-black text-base text-center">
                {{ __('messages.DirectGivingAdikAsuhDescription') }}
            </p>
        </div>
        <div class="flex flex-col justify-center py-5 px-5">
            <img src="{{ URL::asset('image/other/Nyata-5.png') }}" class="mx-auto max-w-xs py-2">
            <h3 class="px-3 py-3 text-black text-3xl text-center font-bold">
                {{ __('messages.GrowTeacher') }}
            </h3>
            <p class="px-3 py-3 text-black text-base text-center">
                {{ __('messages.GrowTeacherDescription') }}
            </p>
        </div>
        <div class="flex flex-col justify-center py-5 px-5">
            <img src="{{ URL::asset('image/other/Nyata-6.png') }}" class="mx-auto max-w-xs py-2">
            <h3 class="px-3 py-3 text-black text-3xl text-center font-bold">
                {{ __('messages.OperationalIntegrity') }}
            </h3>
            <p class="px-3 py-3 text-black text-base text-center">
                {{ __('messages.OperationalIntegrityAdikAsuhDescription') }}
            </p>
        </div>
    </div>
</section>

{{-- BE SAVIOR --}}
<section class="text-center max-w-none w-full bg-white py-16">
    <h1 class="text-4xl font-extrabold tracking-tight leading-none text-black md:text-5xl lg:text-6xl px-24 uppercase">{{ __('messages.BeSavior') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-64 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <div class="px-8 md:px-24">
        <p class="text-black dark:text-gray-400 pt-6 max-w-[68rem] text-left tracking-wider font-bold">{{ __('messages.WhyYouChooseOur') }}</p>
        <ul class="text-black dark:text-gray-400 pt-4 pb-2 max-w-[68rem] text-left tracking-wider list-disc px-6">
            <li>{{ __('messages.WhyYouChooseOur1') }}</li>
            <li>{{ __('messages.WhyYouChooseOur2') }}</li>
            <li>{{ __('messages.WhyYouChooseOur3') }}</li>
        </ul>

        <p class="text-black dark:text-gray-400 pt-6 max-w-[68rem] text-left tracking-wider font-bold">{{ __('messages.HowCanYouHelp') }}</p>
        <p class="text-black dark:text-gray-400 pt-4 pb-2 max-w-[68rem] text-left tracking-wider">{{ __('messages.HowCanYouHelpDescription') }}</p>
        <p class="text-black dark:text-gray-400 max-w-[68rem] text-left tracking-wider">{{ __('messages.AdikAsuhHelp') }}</p>
        <ul class="text-black dark:text-gray-400 pb-2 max-w-[68rem] text-left tracking-wider list-disc px-6">
            <li>{{ __('messages.AdikAsuhHelp1') }}</li>
            <li>{{ __('messages.AdikAsuhHelp2') }}</li>
            <li>{{ __('messages.AdikAsuhHelp3') }}</li>
            <li>{{ __('messages.AdikAsuhHelp4') }}</li>
        </ul>

        <p class="text-black dark:text-gray-400 pt-6 max-w-[68rem] text-left tracking-wider font-bold">{{ __('messages.WhoYouHelp') }}</p>
        <p class="text-black dark:text-gray-400 pt-4 pb-2 max-w-[68rem] text-left tracking-wider"><span class="font-bold uppercase">{{ __('messages.Schools') }} : </span> {{ __('messages.SchoolWhoYouHelpDescription') }}</p>
        <ul class="text-black dark:text-gray-400 max-w-[68rem] text-left tracking-wider list-disc px-6">
            <li>{{ __('messages.SchoolWhoYouHelp1') }}</li>
            <li>{{ __('messages.SchoolWhoYouHelp2') }}</li>
        </ul>

        <p class="text-black dark:text-gray-400 pt-4 pb-2 max-w-[68rem] text-left tracking-wider"><span class="font-bold uppercase">{{ __('messages.AdikAsuh') }} : </span>{{ __('messages.AdikAsuhWhoYouHelpDescription') }}</p>
        <ul class="text-black dark:text-gray-400 max-w-[68rem] text-left tracking-wider list-disc px-6">
            <li>{{ __('messages.AdikAsuhWhoYouHelp1') }}</li>
            <li>{{ __('messages.AdikAsuhWhoYouHelp2') }}</li>
            <li>{{ __('messages.AdikAsuhWhoYouHelp3') }}</li>
            <li>{{ __('messages.AdikAsuhWhoYouHelp4') }}</li>
            <li>{{ __('messages.AdikAsuhWhoYouHelp5') }}</li>

        </ul>
    </div>
</section>

@endsection
