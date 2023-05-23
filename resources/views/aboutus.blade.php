@extends('layout.default')
@section('page-content')
    <section class="flex relative max-w-none w-full h-[400px] md:h-[950px]">
        <div style="background-image:url('/image/donate/HomePageAnakTerangNyata.jpg')"
            class="relative w-full max-w-none bg-cover bg-center bg-fixed">
            <div
                class="absolute bottom-0 w-full flex flex-col justify-center text-center mx-auto my-5 px-5 py-5 md:my-10 md:py-10">
                <h3 class="mx-auto px-3 py-3 text-5xl font-bold text-red-500">
                    ANAK TERANG
                </h3>
                <p class="mx-auto px-3 py-3 text-white text-xl">
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
            <p class="flex text-center text-xl py-5 mx-[60px] text-black ">
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
                <div class="bg-[#ff0000] w-[350px] h-[200px] absolute left-[500px] rounded-xl px-10">
                    <span class="absolute flex items-center justify-center w-8 h-8 -right-16">
                        <img src="/image/other/RedDot.png" class="">
                    </span>
                    <h3 class="flex items-center pt-5 mb-1 text-lg font-semibold text-white">2014
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
                <div class="bg-[#ff0000] w-[350px] h-[200px] absolute left-[950px] rounded-xl px-10">
                    <span class="absolute flex items-center justify-center w-8 h-8 -left-16">
                        <img src="/image/other/RedDot.png" class="">
                    </span>
                    <h3 class="flex items-center pt-5 mb-1 text-lg font-semibold text-white">2015
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
                <div class="bg-[#ff0000] w-[350px] h-[200px] absolute left-[500px] rounded-xl px-10">
                    <span class="absolute flex items-center justify-center w-8 h-8 -right-16">
                        <img src="/image/other/RedDot.png" class="">
                    </span>
                    <h3 class="flex items-center pt-5 mb-1 text-lg font-semibold text-white">2016
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
                <div class="bg-[#ff0000] w-[350px] h-[200px] absolute left-[950px] rounded-xl px-10">
                    <span class="absolute flex items-center justify-center w-8 h-8 -left-16">
                        <img src="/image/other/RedDot.png" class="">
                    </span>
                    <h3 class="flex items-center pt-5 mb-1 text-lg font-semibold text-white">2017
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
                <div class="bg-[#ff0000] w-[350px] h-[200px] absolute left-[500px] rounded-xl px-10">
                    <span class="absolute flex items-center justify-center w-8 h-8 -right-16">
                        <img src="/image/other/RedDot.png" class="">
                    </span>
                    <h3 class="flex items-center pt-5 mb-1 text-lg font-semibold text-white">2018
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
                <div class="bg-[#ff0000] w-[350px] h-[200px] absolute left-[950px] rounded-xl px-10">
                    <span class="absolute flex items-center justify-center w-8 h-8 -left-16">
                        <img src="/image/other/RedDot.png" class="">
                    </span>
                    <h3 class="flex items-center pt-5 mb-1 text-lg font-semibold text-white">2021
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
    <section>
        <div class="flex flex-wrap bg-white w-full h-auto py-5 md:py-10 px-5 md:px-[100px]">
            <div class="flex flex-col mx-auto flex-1/2 md:w-1/2 w-full">
                <div class="flex flex-row justify-center">
                    <div>
                        <img src="/image/share/400nyata01.png" class="h-[150px] w-[150px] md:w-[200px] md:h-[200px]">
                    </div>
                    <div class="text-black h-[200px] w-[250px] px-5">
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
                        <img src="/image/share/400nyata02.png" class="h-[150px] w-[150px] md:w-[200px] md:h-[200px]">
                    </div>
                    <div class="text-black h-[200px] w-[250px] px-5">
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
                        <img src="/image/share/400nyata03.png" class="h-[150px] w-[150px] md:w-[200px] md:h-[200px]">
                    </div>
                    <div class="text-black h-[200px] w-[250px] px-5">
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
                        <img src="/image/share/400nyata03.png" class="h-[150px] w-[150px] md:w-[200px] md:h-[200px]">
                    </div>
                    <div class="text-black h-[200px] w-[250px] px-5">
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
    <section class="flex relative max-w-none w-full h-[600px] md:h-[950px]">
        <div style="background-image:url('/image/donate/AdikAsuhWide.jpg')"
            class="relative w-full max-w-none bg-cover bg-center bg-fixed">
    </section>
    <!-- Text with white background -->
    <section class="relative flex items-center max-w-none w-full bg-white ">
        <div class="container justify-center max-w-none my-10 py-10">
            <h3 class="flex w-full justify-center text-5xl py-3 text-[#ff0000] font-bold">
                ANAK TERANG, ANAK NYATA
            </h3>
            <p class="text-center text-xl py-5 mx-[60px] text-black">
                Anak terang dari negeri Indonesia.
            </p>
            <div class="flex flex-col justify-center">
                <button type="button" class="mx-auto px-3 py-3 bg-red-600 text-center rounded-[10px]">
                    Learn More
                </button>
            </div>
        </div>
    </section>
@endsection
