@extends('layout.default')
@section('title', __('messages.AboutUsTitle'))
@section('page-content')

    {{-- header image --}}
    <section class="flex relative max-w-none w-full h-[500px]">
        <div
            class="relative w-full max-w-none bg-cover bg-fixed bg-center bg-no-repeat bg-[url('/image/about-us/header-bg.jpg')]">
            <div
                class="px-12 max-w-screen-xl text-center mx-auto py-36 md:py-40 md:px-24 lg:py-20 lg:px-32 xl:py-28 animated animatedFadeInUp fadeInUp">
                <h1 class="title-header text-red uppercase">{{ __('messages.AnakTerang') }}</h1>
                <h1 class="title-header text-white uppercase">{{ __('messages.AnakNyata') }}</h1>
            </div>
        </div>
    </section>

    {{-- FOUNDING STORY --}}
    <section class="text-center max-w-none w-full bg-white py-16">
        <h1 class="title-body text-black uppercase">{{ __('messages.FoundingHistory') }}</h1>
        <div class="inline-flex items-center justify-center w-full px-24">
            <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
        </div>
        <p
            class="text-black content-body px-8 pt-4 max-w-[1100px] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1000px] 2xl:max-w-[1200px]">
            {{ __('messages.FoundingHistoryDescription') }}
        </p>
    </section>

    {{-- OUR JOURNEY --}}
    <section class="text-center max-w-none w-full bg-neutral-200 py-16">
        <h1 class="title-body text-black uppercase">{{ __('messages.OurJourney') }}</h1>
        <div class="inline-flex items-center justify-center w-full px-24">
            <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
        </div>
        <div class="flex flex-col md:grid grid-cols-9 mx-auto p-8">
            <!-- left -->
            <div class="flex flex-row-reverse md:contents">
                <div
                    class="bg-[#ff0000] col-start-1 col-end-5 p-8 rounded-[28px] my-4 ml-auto shadow-md h-fit w-[36rem] min-h-[12rem] md:w-[20rem] lg:w-[26rem] xl:w-[32rem]">
                    <h3 class="flex items-center py-2 mb-1 text-3xl font-bold text-white">2014</h3>
                    <ul class="list-disc text-left p-4">
                        <li>
                            <p class="text-base font-normal text-white py-1 ">
                                Birth of the foundation
                            </p>
                        </li>
                        <li>
                            <p class="text-base font-normal text-white py-1 ">
                                Travel Charity Kupang Program
                            </p>
                        </li>
                        <li>
                            <p class="text-base font-normal text-white py-1 ">
                                Bandung & Jakarta Event
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-start-5 col-end-6 md:mx-auto relative mr-10">
                    <div class="h-full w-6 flex items-center justify-center">
                        <div class="h-full w-1 bg-[#666] pointer-events-none"></div>
                    </div>
                    <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#ff0000] shadow"></div>
                </div>
            </div>
            <!-- right -->
            <div class="flex md:contents">
                <div class="col-start-5 col-end-6 mr-10 md:mx-auto relative">
                    <div class="h-full w-6 flex items-center justify-center">
                        <div class="h-full w-1 bg-[#666] pointer-events-none"></div>
                    </div>
                    <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#ff0000] shadow"></div>
                </div>
                <div
                    class="bg-[#ff0000] col-start-6 col-end-10 p-8 rounded-[28px] my-4 mr-auto shadow-md h-fit w-[36rem] min-h-[12rem] md:w-[20rem] lg:w-[26rem] xl:w-[32rem]">
                    <h3 class="flex items-center py-2 mb-1 text-3xl font-bold text-white">2015</h3>
                    <ul class="list-disc text-left p-4">
                        <li>
                            <p class="text-base font-normal text-white py-1 ">
                                Travel Charity Flores
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- left -->
            <div class="flex flex-row-reverse md:contents">
                <div
                    class="bg-[#ff0000] col-start-1 col-end-5 p-8 rounded-[28px] my-4 ml-auto shadow-md h-fit w-[36rem] min-h-[12rem] md:w-[20rem] lg:w-[26rem] xl:w-[32rem]">
                    <h3 class="flex items-center py-2 mb-1 text-3xl font-bold text-white">2016</h3>
                    <ul class="list-disc text-left p-4">
                        <li>
                            <p class="text-base font-normal text-white py-1 ">
                                Travel Charity Jogjakarta
                            </p>
                        </li>
                        <li>
                            <p class="text-base font-normal text-white py-1 ">
                                Travel Charity Pulau Sumba
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-start-5 col-end-6 md:mx-auto relative mr-10">
                    <div class="h-full w-6 flex items-center justify-center">
                        <div class="h-full w-1 bg-[#666] pointer-events-none"></div>
                    </div>
                    <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#ff0000] shadow"></div>
                </div>
            </div>
            <!-- right -->
            <div class="flex md:contents">
                <div class="col-start-5 col-end-6 mr-10 md:mx-auto relative">
                    <div class="h-full w-6 flex items-center justify-center">
                        <div class="h-full w-1 bg-[#666] pointer-events-none"></div>
                    </div>
                    <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#ff0000] shadow"></div>
                </div>
                <div
                    class="bg-[#ff0000] col-start-6 col-end-10 p-8 rounded-[28px] my-4 mr-auto shadow-md h-fit w-[36rem] min-h-[12rem] md:w-[20rem] lg:w-[26rem] xl:w-[32rem]">
                    <h3 class="flex items-center py-2 mb-1 text-3xl font-bold text-white">2017</h3>
                    <ul class="list-disc text-left p-4">
                        <li>
                            <p class="text-base font-normal text-white py-1 ">
                                Travel Charity Malang
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- left -->
            <div class="flex flex-row-reverse md:contents">
                <div
                    class="bg-[#ff0000] col-start-1 col-end-5 p-8 rounded-[28px] my-4 ml-auto shadow-md h-fit w-[36rem] min-h-[12rem] md:w-[20rem] lg:w-[26rem] xl:w-[32rem]">
                    <h3 class="flex items-center py-2 mb-1 text-3xl font-bold text-white">2018</h3>
                    <ul class="list-disc text-left p-4">
                        <li>
                            <p class="text-base font-normal text-white py-1 ">
                                Adik Asuh 100 children
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-start-5 col-end-6 md:mx-auto relative mr-10">
                    <div class="h-full w-6 flex items-center justify-center">
                        <div class="h-full w-1 bg-[#666] pointer-events-none"></div>
                    </div>
                    <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#ff0000] shadow"></div>
                </div>
            </div>
            <!-- right -->
            <div class="flex md:contents">
                <div class="col-start-5 col-end-6 mr-10 md:mx-auto relative">
                    <div class="h-full w-6 flex items-center justify-center">
                        <div class="h-full w-1 bg-[#666] pointer-events-none"></div>
                    </div>
                    <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#ff0000] shadow"></div>
                </div>
                <div
                    class="bg-[#ff0000] col-start-6 col-end-10 p-8 rounded-[28px] my-4 mr-auto shadow-md h-fit w-[36rem] min-h-[12rem] md:w-[20rem] lg:w-[26rem] xl:w-[32rem]">
                    <h3 class="flex items-center py-2 mb-1 text-3xl font-bold text-white">2021</h3>
                    <ul class="list-disc text-left p-4">
                        <li>
                            <p class="text-base font-normal text-white py-1 ">
                                Adik Asuh 1000 children on several locations such as Flores, Kupang, Alor, Nias, Kalimanta,
                                Papua
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- FILOSOPHY --}}
    <section class="text-center max-w-none w-full bg-white py-16 px-8 lg:text-left">
        <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 lg:grid lg:grid-cols-2 sm:py-16 lg:px-6">
            <div class="mt-4 md:mt-0">
                <div class="flex flex-wrap justify-center py-4">
                    <div>
                        <img src="/image/about-us/home-icon.png" class="h-[150px] w-[150px] md:w-[180px] md:h-[180px]">
                    </div>
                    <div class="text-black h-[200px] w-[250px] px-5 py-10">
                        <h3 class="text-xl font-bold uppercase">
                            {{ __('messages.Home') }}
                        </h3>
                        <p class="tracking-wide">
                            {{ __('messages.HomeDescription') }}
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center py-4">
                    <div>
                        <img src="/image/about-us/education-icon.png" class="h-[150px] w-[150px] md:w-[180px] md:h-[180px]">
                    </div>
                    <div class="text-black h-[200px] w-[250px] px-5 py-10">
                        <h3 class="text-xl font-bold uppercase">
                            {{ __('messages.Education') }}
                        </h3>
                        <p class="tracking-wide">
                            {{ __('messages.EducationDescription') }}
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center py-4">
                    <div>
                        <img src="/image/about-us/children-icon.png" class="h-[150px] w-[150px] md:w-[180px] md:h-[180px]">
                    </div>
                    <div class="text-black h-[200px] w-[250px] px-5 py-8">
                        <h3 class="text-xl font-bold uppercase">
                            {{ __('messages.Children') }}
                        </h3>
                        <p class="tracking-wide">
                            {{ __('messages.ChildrenDescription') }}
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center py-4">
                    <div>
                        <img src="/image/about-us/light-icon.png" class="h-[150px] w-[150px] md:w-[180px] md:h-[180px]">
                    </div>
                    <div class="text-black h-[200px] w-[250px] px-5 py-10">
                        <h3 class="text-xl font-bold uppercase">
                            {{ __('messages.Light') }}
                        </h3>
                        <p class="tracking-wide">
                            {{ __('messages.LightDescription') }}
                        </p>
                    </div>
                </div>
            </div>
            <img class="w-full rounded-3xl" src="/image/about-us/filosophy-bg.jpg">
        </div>
    </section>

    {{-- OUR RESULTS --}}
    <section class="text-center max-w-none w-full bg-white py-16">
        <h1 class="title-body text-black uppercase">{{ __('messages.OurResults') }}</h1>
        <div class="inline-flex items-center justify-center w-full px-24">
            <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
        </div>
    </section>
    <section class="flex relative max-w-none w-full h-[500px]">
        <div
            class="relative w-full max-w-none bg-cover bg-center bg-fixed bg-no-repeat bg-[url('/image/about-us/our-result-bg.jpg')]">
        </div>
    </section>
    <section class="text-center max-w-none w-full bg-white py-16">
        <h1 class="title-body text-red uppercase">{{ __('messages.TagLine') }}</h1>
        <p class="text-black content-body py-6 max-w-[800px] mx-auto">
            {{ __('messages.TagLineDescription') }}
        </p>
        <div>
            <button type="button" class="px-3 py-2 my-8 bg-[#ff0000] text-xl rounded-[10px] uppercase w-[200px] mx-auto"
                onclick="window.location='{{ asset('/pdf/SertifikatYayasanNYATA.png') }}'">
                {{ __('messages.Certificate') }}
            </button>
        </div>
    </section>
@endsection
