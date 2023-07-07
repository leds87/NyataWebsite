@extends('layout.default')
@section('title', "ABOUT US")
@section('page-content')

{{-- header image --}}
<section class="flex relative bg-cover bg-center bg-no-repeat bg-[url('/image/donate/HomePageAnakTerangNyata.jpg')]">
    <div class="px-8 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-[#ff0000] md:text-5xl lg:text-6xl">ANAK TERANG</h1>
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">ANAK NYATA</h1>
    </div>
</section>

{{-- FOUNDING STORY --}}
<section class="text-center max-w-none w-full bg-white py-16">
    <h1 class="text-4xl font-extrabold tracking-tight leading-none text-black md:text-5xl lg:text-6xl px-24 uppercase">{{ __('messages.FoundingHistory') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-64 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <p class="text-black dark:text-gray-400 px-8 py-6 tracking-wider">{{ __('messages.FoundingHistoryDescription') }}</p>
</section>

{{-- OUR JOURNEY --}}
<section class="text-center max-w-none w-full bg-neutral-200 py-16">
    <h1 class="text-4xl font-extrabold tracking-tight leading-none text-black md:text-5xl lg:text-6xl px-8 uppercase">{{ __('messages.OurJourney') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-64 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <div class="flex flex-col md:grid grid-cols-9 mx-auto p-8">
        <!-- left -->
        <div class="flex flex-row-reverse md:contents">
            <div class="bg-[#ff0000] col-start-1 col-end-5 p-8 rounded-[28px] my-4 ml-auto shadow-md h-fit w-[36rem] min-h-[12rem] md:w-[20rem] lg:w-[26rem] xl:w-[32rem]">
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
            <div
                class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#ff0000] shadow"
            ></div>
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
            <div class="bg-[#ff0000] col-start-6 col-end-10 p-8 rounded-[28px] my-4 mr-auto shadow-md h-fit w-[36rem] min-h-[12rem] md:w-[20rem] lg:w-[26rem] xl:w-[32rem]">
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
            <div class="bg-[#ff0000] col-start-1 col-end-5 p-8 rounded-[28px] my-4 ml-auto shadow-md h-fit w-[36rem] min-h-[12rem] md:w-[20rem] lg:w-[26rem] xl:w-[32rem]">
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
            <div
                class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#ff0000] shadow"
            ></div>
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
            <div class="bg-[#ff0000] col-start-6 col-end-10 p-8 rounded-[28px] my-4 mr-auto shadow-md h-fit w-[36rem] min-h-[12rem] md:w-[20rem] lg:w-[26rem] xl:w-[32rem]">
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
            <div class="bg-[#ff0000] col-start-1 col-end-5 p-8 rounded-[28px] my-4 ml-auto shadow-md h-fit w-[36rem] min-h-[12rem] md:w-[20rem] lg:w-[26rem] xl:w-[32rem]">
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
            <div
                class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#ff0000] shadow"
            ></div>
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
            <div class="bg-[#ff0000] col-start-6 col-end-10 p-8 rounded-[28px] my-4 mr-auto shadow-md h-fit w-[36rem] min-h-[12rem] md:w-[20rem] lg:w-[26rem] xl:w-[32rem]">
            <h3 class="flex items-center py-2 mb-1 text-3xl font-bold text-white">2021</h3>
            <ul class="list-disc text-left p-4">
                <li>
                    <p class="text-base font-normal text-white py-1 ">
                        Adik Asuh 1000 children on several locations such as Flores, Kupang, Alor, Nias, Kalimanta, Papua
                    </p>
                </li>
            </ul>
            </div>
        </div>
    </div>
    {{-- <p class="text-black dark:text-gray-400 px-8 py-6">{{ __('messages.FoundingHistoryDescription') }}</p> --}}
</section>



    {{-- <section class="flex relative max-w-none w-full h-[400px] md:h-[950px]">
        <div style="background-image:url('/image/donate/HomePageAnakTerangNyata.jpg')"
            class="relative w-full max-w-none bg-cover bg-center bg-fixed">
            <div
                class="absolute bottom-0 w-full flex flex-col justify-center text-center mx-auto my-5 px-5 py-5 md:my-10 md:py-10">
                <h3 class="mx-auto px-3 py-3 text-5xl font-bold text-red-500">
                    ANAK TERANG
                </h3>
                <p class="mx-auto px-3 py-3 text-5xl font-bold text-white">
                    ANAK NYATA
                </p>
            </div>
    </section>
    <!-- just text with white background -->
    <section class="relative flex items-center max-w-none w-full bg-white h-[600px]">
        <div class="container justify-center max-w-none my-10 py-10">
            <h3 class="flex w-full justify-center text-5xl py-3 text-black font-bold">
                FOUNDING STORY
            </h3>
            <p class="flex text-center text-xl py-5 mx-[380px] text-black font-markpro">
                Started from the social service program held in high school every year, Nicole Oeij Teng, Pamela Berliana
                Sofian, and their friends and relatives were moved to continue their social service. Until 2013, Nicole
                decided to volunteer to teach in underprivileged schools and communites in Africa for 2 months. This
                experience gave birth an idea to help underprivileged and out of school children in Indonesia. This
                non-profit foundation was officially founded in 2014 by Nicole and Pamela and it keeps growing since then.
            </p>
        </div>
    </section>
    <!-- our journey timeline with grey background -->
    <section class="hidden md:block">
        <ol class="relative border-l bg-neutral-200 px-10 h-[1600px]">
            <li class="relative w-full mx-auto py-5">
                <h3 class=" text-center text-5xl font-bold py-5 mb-1 text-black">OUR
                    JOURNEY
                </h3>
            </li>
            <li class="relative w-full h-[200px] mb-10 ml-0">
                <div class="bg-[#ff0000] w-[350px] h-[200px] absolute left-[500px] rounded-[28px] px-10">
                    <span class="absolute flex items-center justify-center w-8 h-8 -right-16">
                        <img src="/image/other/RedDot.png" class="">
                    </span>
                    <h3 class="flex items-center pb-5 pt-5 mb-1 text-3xl font-bold text-white">2014
                    </h3>
                    <ul class="list-disc">
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
            </li>
            <li class="relative w-full h-[200px] mb-10 ml-0">
                <div class="bg-[#ff0000] w-[350px] h-[200px] absolute left-[950px] rounded-[28px] px-10">
                    <span class="absolute flex items-center justify-center w-8 h-8 -left-16">
                        <img src="/image/other/RedDot.png" class="">
                    </span>
                    <h3 class="flex items-center pt-5 pb-5 mb-1 text-3xl font-bold text-white">2015
                    </h3>
                    <ul class="list-disc">
                        <li>
                            <p class="text-base font-normal text-white py-1 ">
                                Travel Charity Flores
                            </p>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative w-full h-[200px] mb-10 ml-0">
                <div class="bg-[#ff0000] w-[350px] h-[200px] absolute left-[500px] rounded-[28px] px-10">
                    <span class="absolute flex items-center justify-center w-8 h-8 -right-16">
                        <img src="/image/other/RedDot.png" class="">
                    </span>
                    <h3 class="flex items-center pt-5 pb-5 mb-1 text-3xl font-bold text-white">2016
                    </h3>
                    <ul class="list-disc">
                        <li>
                            <p class="text-base font-normal text-white py-1 ">
                                Travel Charity Jogjakarya
                            </p>
                        </li>
                        <li>
                            <p class="text-base font-normal text-white py-1 ">
                                Travel Charity Pulau Sumba
                            </p>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative w-full h-[200px] mb-10 ml-0">
                <div class="bg-[#ff0000] w-[350px] h-[200px] absolute left-[950px] rounded-[28px] px-10">
                    <span class="absolute flex items-center justify-center w-8 h-8 -left-16">
                        <img src="/image/other/RedDot.png" class="">
                    </span>
                    <h3 class="flex items-center pt-5 pb-5 mb-1 text-3xl font-bold text-white">2017
                    </h3>
                    <ul class="list-disc">
                        <li>
                            <p class="text-base font-normal text-white py-1 ">
                                Travel Charity Malang
                            </p>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative w-full h-[200px] mb-10 ml-0">
                <div class="bg-[#ff0000] w-[350px] h-[200px] absolute left-[500px] rounded-[28px] px-10">
                    <span class="absolute flex items-center justify-center w-8 h-8 -right-16">
                        <img src="/image/other/RedDot.png" class="">
                    </span>
                    <h3 class="flex items-center pt-5 pb-5 mb-1 text-3xl font-bold text-white">2018
                    </h3>
                    <ul class="list-disc">
                        <li>
                            <p class="text-base font-normal text-white py-1 ">
                                Adik Asuh 100 Children
                            </p>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative w-full h-[200px] mb-10 ml-0">
                <div class="bg-[#ff0000] w-[350px] h-[200px] absolute left-[950px] rounded-[28px] px-10">
                    <span class="absolute flex items-center justify-center w-8 h-8 -left-16">
                        <img src="/image/other/RedDot.png" class="">
                    </span>
                    <h3 class="flex items-center pt-5 pb-5 mb-1 text-3xl font-bold text-white">2021
                    </h3>
                    <ul class="list-disc">
                        <li>
                            <p class="text-base font-normal text-white py-1 ">
                                Adik Asuh 1000 children on several locations such as Flores, Kupang, Alor, Anias,
                                Kalimantan, Papua
                            </p>
                        </li>
                    </ul>
                </div>
            </li>
        </ol>

    </section>
    <!-- divide into 2 text and picture with white background -->
    <section class="bg-white">
        <div class="flex flex-wrap bg-white w-full h-auto py-5 md:py-10 px-5 md:px-[100px]">
            <div class="flex flex-col mx-auto flex-1/2 md:w-1/2 w-full">
                <div class="flex flex-row justify-center">
                    <div>
                        <img src="/image/share/400nyata01.png" class="h-[150px] w-[150px] md:w-[180px] md:h-[180px]">
                    </div>
                    <div class="text-black h-[200px] w-[250px] px-5 py-5">
                        <h3 class="text-xl font-bold">
                            HOME
                        </h3>
                        <p class="text-left">
                            Mountain, a historic symbol of Indonesia, represents home to the children we are taking care of.
                        </p>
                    </div>
                </div>
                <div class="flex flex-row justify-center">
                    <div>
                        <img src="/image/share/400nyata02.png" class="h-[150px] w-[150px] md:w-[180px] md:h-[180px]">
                    </div>
                    <div class="text-black h-[200px] w-[250px] px-5 py-10">
                        <h3 class="text-xl font-bold">
                            EDUCATION
                        </h3>
                        <p class="text-left">
                            Education as the base of our value that we hold tightly to.
                        </p>
                    </div>
                </div>
                <div class="flex flex-row justify-center">
                    <div>
                        <img src="/image/share/400nyata03.png" class="h-[150px] w-[150px] md:w-[180px] md:h-[180px]">
                    </div>
                    <div class="text-black h-[200px] w-[250px] px-5 py-8">
                        <h3 class="text-xl font-bold">
                            CHILDREN
                        </h3>
                        <p class="text-left">
                            Like a flower that is blooming, we focus on nurturing children of the nation.
                        </p>
                    </div>
                </div>
                <div class="flex flex-row justify-center">
                    <div>
                        <img src="/image/share/400nyata03.png" class="h-[150px] w-[150px] md:w-[180px] md:h-[180px]">
                    </div>
                    <div class="text-black h-[200px] w-[250px] px-5 py-10">
                        <h3 class="text-xl font-bold">
                            LIGHT
                        </h3>
                        <p class="text-left">
                            Our children of light are our enlightment to the future.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center md:w-1/2 w-full items-left flex-1/2">
                <img src="/image/donate/HomePageuOurJourney.jpg" class="h-[750px] w-[500px] rounded-[25px]">
            </div>
        </div>
    </section>

    <!-- Text with picture background-->
    <div class="bg-white">
        <h3 class="text-center text-5xl font-bold py-5 text-black">OUR
            RESULTS
        </h3>
    </div>
    <section class="flex relative max-w-none w-full h-[600px] md:h-[950px]">
        <div style="background-image:url('/image/donate/AdikAsuhWide.jpg')"
            class="relative w-full max-w-none bg-cover bg-center bg-fixed">
    </section>

    <!-- Text with white background -->
    <section class="relative flex items-center max-w-none w-full bg-white ">
        <div class="container justify-center max-w-none my-10 py-10">
            <h3 class="flex w-full justify-center text-5xl py-3 text-[#ff0000] font-bold">
                ANAK NYATA, ANAK TERANG
            </h3>
            <div class="flex justify-start mx-[60px]">
                <div>
                    <p class="text-left text-xl text-black py-5">
                        Anak terang dari negeri Indonesia.
                    </p>
                    <button type="button" class="px-3 py-2 bg-red-600 text-xl rounded-[10px]">
                        LEARN MORE
                    </button>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
