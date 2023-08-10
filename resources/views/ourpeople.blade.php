@extends('layout.default')
@section('title', __('messages.OurPeopleTitle'))
@section('page-content')

{{-- FOUNDING STORY --}}
<section class="text-center max-w-none w-full bg-white py-16">
    <h1 class="text-4xl font-extrabold tracking-tight leading-none text-black md:text-5xl lg:text-6xl px-24 uppercase">{{ __('messages.OurPeople') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-64 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <div class="pt-10 px-8 mx-auto lg:px-12">
        <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2 lg:grid-cols-3 lg:gap-12 xl:gap-20">
            <div class="items-center rounded-[32px] shadow bg-[#ff0000]">
                <a href="#">
                    <img class="w-full rounded-t-[32px]" src="{{ URL::asset('image/our-people/Nicole.jpg') }}">
                </a>
                <div class="p-5 bg-[#ff0000] rounded-b-[32px]">
                    <h3 class="px-3 py-5 text-3xl text-center font-bold">
                        NICOLE OEIJ TENG
                    </h3>
                    <p class="px-3 py-3 text-base text-center font-bold">
                        Co-Founder / CEO
                    </p>
                    <p class="px-3 py-3 text-base text-center font-bold max-w-sm mx-auto">
                        Worked in Nepal & Dreams to Reality Foundation, South Africa.
                    </p>
                </div>
            </div>
            <div class="items-center rounded-[32px] shadow bg-[#ff0000]">
                <a href="#">
                    <img class="w-full rounded-t-[32px]" src="{{ URL::asset('image/our-people/Pamela.jpg') }}">
                </a>
                <div class="p-5 bg-[#ff0000] rounded-b-[32px]">
                    <h3 class="px-3 py-5 text-3xl text-center font-bold">
                        PAMELA BERLIANA
                    </h3>
                    <p class="px-3 py-3 text-base text-center font-bold">
                        Co-Founder / CMO
                    </p>
                    <p class="px-3 py-3 text-base text-center font-bold max-w-sm mx-auto">
                        Former Accountant at Sahabat Peduli Indonesia (SPI), 4 years of experience in Marketing field.
                    </p>
                </div>
            </div>
            <div class="items-center rounded-[32px] shadow bg-[#ff0000]">
                <a href="#">
                    <img class="w-full rounded-t-[32px]" src="{{ URL::asset('image/our-people/EvelynTobing.jpg') }}">
                </a>
                <div class="p-5 bg-[#ff0000] rounded-b-[32px]">
                    <h3 class="px-3 py-5 text-3xl text-center font-bold">
                        EVELYN TOBING
                    </h3>
                    <p class="px-3 py-3 text-base text-center font-bold">
                        Head of Program Adik ASUH
                    </p>
                    <p class="px-3 py-3 text-base text-center font-bold max-w-sm mx-auto">
                        8 years of experience in Teaching at SD Paulus Bandung.
                    </p>
                </div>
            </div>
            <div class="items-center rounded-[32px] shadow bg-[#ff0000]">
                <a href="#">
                    <img class="w-full rounded-t-[32px]" src="{{ URL::asset('image/our-people/ShintaFong.jpg') }}">
                </a>
                <div class="p-5 bg-[#ff0000] rounded-b-[32px]">
                    <h3 class="px-3 py-5 text-3xl text-center font-bold">
                        SHINTA FONG
                    </h3>
                    <p class="px-3 py-3 text-base text-center font-bold">
                        Accountant
                    </p>
                    <p class="px-3 py-3 text-base text-center font-bold max-w-sm mx-auto">
                        7 years of experience in Banking Industry.
                    </p>
                </div>
            </div>
            <div class="items-center rounded-[32px] shadow bg-[#ff0000]">
                <a href="#">
                    <img class="w-full rounded-t-[32px]" src="{{ URL::asset('image/our-people/AndrosOeijTeng.jpg') }}">
                </a>
                <div class="p-5 bg-[#ff0000] rounded-b-[32px]">
                    <h3 class="px-3 py-5 text-3xl text-center font-bold">
                        ANDROS
                    </h3>
                    <p class="px-3 py-3 text-base text-center font-bold">
                        Visual Communication
                    </p>
                    <p class="px-3 py-3 text-base text-center font-bold max-w-sm mx-auto">
                        17 years of experience in Art & Design field.
                    </p>
                </div>
            </div>
            <div class="items-center rounded-[32px] shadow bg-[#ff0000]">
                <a href="#">
                    <img class="w-full rounded-t-[32px]" src="{{ URL::asset('image/our-people/ElizabethYo.jpg') }}">
                </a>
                <div class="p-5 bg-[#ff0000] rounded-b-[32px]">
                    <h3 class="px-3 py-5 text-3xl text-center font-bold">
                        ELIZABETH YO
                    </h3>
                    <p class="px-3 py-3 text-base text-center font-bold">
                        Head of Program Nutrisi Adih Asuh
                    </p>
                    <p class="px-3 py-3 text-base text-center font-bold max-w-sm mx-auto">
                        10 years of experience in Banking. Multiple experience with Non-Profit Organization.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- <section class="flex flex-col items-center max-w-none w-full bg-white ">
        <div class="container justify-center max-w-none mt-10 py-6">
            <h3 class="w-full justify-center mx-auto text-5xl pt-[100px] pb-5 text-black text-center font-bold">
                OUR PEOPLE
            </h3>
            <div class="flex flex-wrap justify-evenly mx-auto">
                <div class="flex flex-col justify-center max-w-sm mx-5 my-5">
                    <img src="{{ URL::asset('image/people/people01.jpg') }}"
                        class="rounded-t-[25px] w-full h-[300px] items-center">
                    <div class="px-0 py-5 bg-red-500 rounded-b-[25px] text-white ">
                        <h3 class="px-3 py-5 text-3xl text-center font-bold">
                            NICOLE OEIJ TENG
                        </h3>
                        <p class="px-3 py-3 text-base text-center">
                            Co-Founder / CEO
                        </p>
                        <p class="px-3 py-3 text-base text-center">
                            Worked in Nepal & Dreams to Reality Foundation, South Africa.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col justify-center max-w-sm mx-5 my-5">
                    <img src="{{ URL::asset('image/people/people01.jpg') }}"
                        class="rounded-t-[25px] w-full h-[300px] items-center">
                    <div class="px-0 py-5 bg-red-500 rounded-b-[25px] text-white ">
                        <h3 class="px-3 py-5 text-3xl text-center font-bold">
                            PAMELA BERLIANA
                        </h3>
                        <p class="px-3 py-3 text-base text-center">
                            Co-Founder / CMO
                        </p>
                        <p class="px-3 py-3 text-base text-center">
                            Former Accountant at Sahabat Peduli Indonesia (SPI), 4 years of experience in Marketing field.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col justify-center max-w-sm mx-5 my-5">
                    <img src="{{ URL::asset('image/people/people01.jpg') }}"
                        class="rounded-t-[25px] w-full h-[300px] items-center">
                    <div class="px-0 py-5 bg-red-500 rounded-b-[25px] text-white ">
                        <h3 class="px-3 py-5 text-3xl text-center font-bold">
                            EVELYN TOBING
                        </h3>
                        <p class="px-3 py-3 text-base text-center">
                            Head of Program Adik ASUH
                        </p>
                        <p class="px-3 py-3 text-base text-center">
                            8 years of experience in Teaching at SD Paulus Bandung.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container justify-center max-w-none py-6">
            <div class="flex flex-wrap justify-evenly mx-auto">
                <div class="flex flex-col justify-center max-w-sm mx-5 my-5">
                    <img src="{{ URL::asset('image/people/people01.jpg') }}"
                        class="rounded-t-[25px] w-full h-[300px] items-center">
                    <div class="px-0 py-5 bg-red-500 rounded-b-[25px] text-white ">
                        <h3 class="px-3 py-5 text-3xl text-center font-bold">
                            SHINTA FONG
                        </h3>
                        <p class="px-3 py-3 text-base text-center">
                            Accountant
                        </p>
                        <p class="px-3 py-3 text-base text-center">
                            7 years of experience in Banking Industry.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col justify-center max-w-sm mx-5 my-5">
                    <img src="{{ URL::asset('image/people/people01.jpg') }}"
                        class="rounded-t-[25px] w-full h-[300px] items-center">
                    <div class="px-0 py-5 bg-red-500 rounded-b-[25px] text-white ">
                        <h3 class="px-3 py-5 text-3xl text-center font-bold">
                            ANDROS
                        </h3>
                        <p class="px-3 py-3 text-base text-center">
                            Visual Communication
                        </p>
                        <p class="px-3 py-3 text-base text-center">
                            17 years of experience in Art & Design field
                        </p>
                    </div>
                </div>
                <div class="flex flex-col justify-center max-w-sm mx-5 my-5">
                    <img src="{{ URL::asset('image/people/people01.jpg') }}"
                        class="rounded-t-[25px] w-full h-[300px] items-center">
                    <div class="px-0 py-5 bg-red-500 rounded-b-[25px] text-white ">
                        <h3 class="px-3 py-5 text-3xl text-center font-bold">
                            ELIZABETH YO
                        </h3>
                        <p class="px-3 py-3 text-base text-center">
                            Head of Program Nustrisi Adih Asuh
                        </p>
                        <p class="px-3 py-3 text-base text-center">
                            10 years of experience in Banking. Multiple experience with Non-Profit Organization.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
