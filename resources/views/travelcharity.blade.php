@extends('layout.default')
@section('title', __('messages.TravelCharityTitle'))
@section('page-content')

{{-- HEADER IMAGE --}}
<section class="flex relative max-w-none w-full h-[500px]">
    <div
        class="relative w-full max-w-none bg-cover bg-center bg-fixed bg-no-repeat bg-[url('/image/travel-charity/header-bg.jpg')]">
        <div class="px-12 text-center py-8 md:py-36 md:px-24 lg:py-32 lg:px-32 xl:py-40">
            <h1 class="mb-4 text-6xl font-extrabold tracking-tight leading-none text-[#ff0000] max-w-md md:text-5xl lg:text-6xl lg:max-w-none uppercase mx-auto">{{ __('messages.TravelCharity') }}</h1>
            <p class="mb-4 text-2xl font-extrabold tracking-wider leading-8 text-white max-w-[800px] mx-auto">{{ __('messages.TravelCharityDescription') }}</p>
        </div>
    </div>
</section>

<section class="text-center max-w-none w-full bg-white py-16">
    <h1 class="text-4xl font-extrabold tracking-tight leading-none text-black md:text-5xl lg:text-6xl px-24 uppercase">{{ __('messages.OtherSide') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-64 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
</section>

<section>
    <div class="sm:hidden">
        <div>
            <div class="inline-block w-full font-bold text-xl bg-neutral-200">
                <div class=" p-4 text-black">
                    JOGJAKARTA
                </div>
            </div>
            <img src="{{ URL::asset('image/travel-charity/Travel-Charity-Jogjakarta.jpg') }}" class="w-full transition duration-700">
        </div>
        <div>
            <div class="inline-block w-full font-bold text-xl bg-neutral-200">
                <div class=" p-4 text-black">
                    SUMBA, NTT
                </div>
            </div>
            <img src="{{ URL::asset('image/travel-charity/Travel-Charity-Sumba.jpg') }}" class="w-full transition duration-700">
        </div>
        <div>
            <div class="inline-block w-full font-bold text-xl bg-neutral-200">
                <div class=" p-4 text-black">
                    FLORES
                </div>
            </div>
            <img src="{{ URL::asset('image/travel-charity/Travel-Charity-Flores.jpg') }}" class="w-full transition duration-700">
        </div>
        <div>
            <div class="inline-block w-full font-bold text-xl bg-neutral-200">
                <div class=" p-4 text-black">
                    ALOR
                </div>
            </div>
            <img src="{{ URL::asset('image/travel-charity/Travel-Charity-Alor.jpg') }}" class="w-full transition duration-700">
        </div>
        <div>
            <div class="inline-block w-full font-bold text-xl bg-neutral-200">
                <div class=" p-4 text-black">
                    OTHER
                </div>
            </div>
            <img src="{{ URL::asset('image/travel-charity/Travel-Charity-Papua.jpg') }}" class="w-full transition duration-700">
        </div>
    </div>
    <div>
        <ul class="hidden text-xl font-medium text-center divide-x active:text-[#ff0000] divide-[#ff0000] sm:flex"
            id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="w-full" role="presentation">
                <button
                    class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                    id="jogjakarta-tab" data-tabs-target="#jogjakarta" type="button" role="tab"
                    aria-controls="jogjakarta" aria-selected="false">
                    <div class=" p-4 text-black hover:text-[white]">
                        JOGJAKARTA
                    </div>
                </button>
            </li>
            <li class="w-full" role="presentation">
                <button
                    class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                    id="sumba-tab" data-tabs-target="#sumba" type="button" role="tab"
                    aria-controls="sumba" aria-selected="false">
                    <div class=" p-4 text-black hover:text-[white]">
                        SUMBA, NTT
                    </div>
                </button>
            </li>
            <li class="w-full" role="presentation">
                <button
                    class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                    id="flores-tab" data-tabs-target="#flores" type="button" role="tab"
                    aria-controls="flores" aria-selected="false">
                    <div class="p-4 text-black hover:text-[white]">
                        FLORES
                    </div>
                </button>
            </li>
            <li class="w-full" role="presentation">
                <button
                    class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                    id="alor-tab" data-tabs-target="#alor" type="button" role="tab"
                    aria-controls="alor" aria-selected="false">
                    <div class="p-4 text-black hover:text-[white]">
                        ALOR
                    </div>
                </button>
            </li>
            <li class="w-full" role="presentation">
                <button
                    class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                    id="papua-tab" data-tabs-target="#papua" type="button" role="tab"
                    aria-controls="papua" aria-selected="false">
                    <div class="p-4 text-black hover:text-[white]">
                        OTHER
                    </div>
                </button>
            </li>
        </ul>
    </div>
    <div id="myTabContent" class="hidden md:block">
        <div class="hidden transition-all duration-700 ease-in-out" id="jogjakarta" role="tabpanel"
            aria-labelledby="jogjakarta-tab">
            <img src="{{ URL::asset('image/travel-charity/Travel-Charity-Jogjakarta.jpg') }}" class="w-full transition duration-700">
        </div>
        <div class="hidden transition-all duration-700 ease-in-out" id="sumba" role="tabpanel"
            aria-labelledby="sumba-tab">
            <img src="{{ URL::asset('image/travel-charity/Travel-Charity-Sumba.jpg') }}" class="w-full">
        </div>
        <div class="hidden transition-all duration-700 ease-in-out" id="flores" role="tabpanel"
            aria-labelledby="flores-tab">
            <img src="{{ URL::asset('image/travel-charity/Travel-Charity-Flores.jpg') }}" class="w-full">
        </div>
        <div class="hidden transition-all duration-700 ease-in-out" id="alor" role="tabpanel"
            aria-labelledby="alor-tab">
            <img src="{{ URL::asset('image/travel-charity/Travel-Charity-Alor.jpg') }}" class="w-full">
        </div>
        <div class="hidden transition-all duration-700 ease-in-out" id="papua" role="tabpanel"
            aria-labelledby="papua-tab">
            <img src="{{ URL::asset('image/travel-charity/Travel-Charity-Papua.jpg') }}" class="w-full">
        </div>
    </div>
</section>

<section class="text-center max-w-none w-full bg-white py-16">
    <h1 class="text-4xl font-extrabold tracking-tight leading-none text-black md:text-5xl lg:text-6xl px-24 uppercase">{{ __('messages.ExploreShare') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-64 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <div class="px-8 md:px-24">
        <p class="text-black dark:text-gray-400 pt-6 max-w-[68rem] text-left tracking-wider font-bold">{{ __('messages.WhyYouChooseTravel') }}</p>
        <ul class="text-black dark:text-gray-400 pt-4 pb-2 max-w-[68rem] text-left tracking-wider list-disc px-6">
            <li>{{ __('messages.WhyYouChooseTravel1') }}</li>
            <li>{{ __('messages.WhyYouChooseTravel2') }}</li>
            <li>{{ __('messages.WhyYouChooseTravel3') }}</li>
        </ul>

        <p class="text-black dark:text-gray-400 pt-6 max-w-[68rem] text-left tracking-wider font-bold">{{ __('messages.HowCanYouHelp') }}</p>
        <p class="text-black dark:text-gray-400 pt-4 pb-2 max-w-[68rem] text-left tracking-wider">{{ __('messages.HowCanYouHelpTravelDescription') }}</p>

        <p class="text-black dark:text-gray-400 pt-6 max-w-[68rem] text-left tracking-wider font-bold">{{ __('messages.WhoYouHelp') }}</p>
        <p class="text-black dark:text-gray-400 pt-4 pb-2 max-w-[68rem] text-left tracking-wider"><span class="font-bold">{{ __('messages.Children') }} : </span> {{ __('messages.WhoYouHelpChildren') }}</p>
        <p class="text-black dark:text-gray-400 pt-4 pb-2 max-w-[68rem] text-left tracking-wider"><span class="font-bold">{{ __('messages.LocalCommunities') }} : </span> {{ __('messages.LocalCommunitiesDescription') }}</p>
    </div>
</section>




    {{-- <section class="flex relative max-w-none w-full h-[400px] md:h-[950px]">
        <div style="background-image:url('/image/donate/HomePageAnakTerangNyata.jpg')"
            class="relative w-full max-w-none bg-cover bg-center bg-fixed">
            <div
                class="absolute bottom-0 w-full flex flex-col justify-center text-center mx-auto my-5 px-5 py-5 md:my-10 md:py-10">
                <h3 class="mx-auto px-3 py-3 text-5xl font-bold text-red-500">
                    TRAVEL CHARITY
                </h3>
                <p class="mx-auto px-3 py-3 text-white text-xl">
                    Help the livelihoods and economy of local communities while exploring the beauty of Indonesia
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="text-center font-bold bg-white text-5xl text-black h-[200px] pt-10">
            THE OTHER SIDE OF INDONESIA
        </div>
    </section>

    <section>
        <div class="sm:hidden">
            <label for="tabs" class="sr-only">Select your country</label>
            <select id="tabs" class="bg-neutral-200 border text-black text-xl font-bold block w-full p-0 ">
                <option>JOGJAKARTA</option>
                <option>SUMBA, NTT</option>
                <option>FLORES</option>
                <option>ALOR</option>
                <option>OTHER</option>
            </select>
        </div>
        <div>
            <ul class="hidden text-xl font-medium text-center divide-x active:text-[#ff0000] divide-[#ff0000] sm:flex"
                id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="w-full" role="presentation">
                    <button
                        class="inline-block w-full font-bold text-xl  bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                        id="shcoolbuild-tab" data-tabs-target="#profile" type="button" role="tab"
                        aria-controls="profile" aria-selected="false">
                        <div class=" p-4 text-black hover:text-[white]">
                            JOGJAKARTA
                        </div>
                    </button>
                </li>
                <li class="w-full" role="presentation">
                    <button
                        class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                        id="growsteacher-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">
                        <div class=" p-4 text-black hover:text-[white]">
                            SUMBA, NTT
                        </div>
                    </button>
                </li>
                <li class="w-full" role="presentation">
                    <button
                        class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                        id="childrennutrition-tab" data-tabs-target="#settings" type="button" role="tab"
                        aria-controls="settings" aria-selected="false">
                        <div class="p-4 text-black hover:text-[white]">
                            FLORES
                        </div>
                    </button>
                </li>
                <li class="w-full" role="presentation">
                    <button
                        class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                        id="scholarships-tab" data-tabs-target="#contacts" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false">
                        <div class="p-4 text-black hover:text-[white]">
                            ALOR
                        </div>
                    </button>
                </li>
                <li class="w-full" role="presentation">
                    <button
                        class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                        id="scholarships-tab" data-tabs-target="#contacts" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false">
                        <div class="p-4 text-black hover:text-[white]">
                            OTHER
                        </div>
                    </button>
                </li>
            </ul>
        </div>
        <div id="myTabContent">
            <div class="hidden transition-all duration-700 ease-in-out" id="profile" role="tabpanel"
                aria-labelledby="shcoolbuild-tab">
                <img src="{{ URL::asset('image/donate/Donate01.jpg') }}" class="w-full transition duration-700">
            </div>
            <div class="hidden transition-all duration-700 ease-in-out" id="dashboard" role="tabpanel"
                aria-labelledby="growsteacher-tab">
                <img src="{{ URL::asset('image/donate/TravelCharity01.jpg') }}" class="w-full">
            </div>
            <div class="hidden transition-all duration-700 ease-in-out" id="settings" role="tabpanel"
                aria-labelledby="childrennutrition-tab">
                <img src="{{ URL::asset('image/donate/HomePageAnakTerangNyata.jpg') }}" class="w-full">
            </div>
            <div class="hidden transition-all duration-700 ease-in-out" id="contacts" role="tabpanel"
                aria-labelledby="scholarships-tab">
                <img src="{{ URL::asset('image/donate/AdikAsuhWide.jpg') }}" class="w-full">
            </div>
        </div>
    </section>

    <section>
        <div class="bg-white text-black text-left mx-auto px-[400px] h-[600px]">
            <div class="px-3 py-10 font-bold text-center text-5xl">
                EXPLORE BEAUTY, SHARE KINDNESS
            </div>
            <h2 class="pt-5 mb-3 font-bold text-2xl">WHY YOU CHOOSE OUR TRAVEL CHARITY PROGRAM</h2>
            <ul class="space-y-1 list-disc list-inside text-left">
                <li>
                    Welfare of local businesses to help improve the standard of living of the people in the area.
                </li>
                <li>
                    Closer to understanding the problems faced by local communities, it becomes an opportunity to provide
                    NYATA help for them.
                </li>
                <li>
                    Explore and enjoy the beauty and culture of the regions in Indonesia.
                </li>
            </ul>
            <div class="pt-5 mb-3 font-bold text-2xl">
                HOW CAN YOU HELP
            </div>
            <h2 class="mb-3 text-lg font-normal">By choosing this program, NYATA helps the local community while traveling
                on vacation. Everything you do contributes to long-term and sustainable goals of the area.</h2>
            <div class="pt-5 mb-3 font-bold text-2xl">
                WHO YOU HELP
            </div>
            <h2 class="pt-1 mb-2 text-lg font-semibold"><span class="font-bold text-1xl">CHILDREN</span> : Share knowledge
                and provides a fun educational experience for children across Indonesia.</h2>
            <h2 class="pt-4 text-lg font-semibold"><span class="font-bold text-1xl">LOCAL COMMUNITIES</span> :
                Provide new job opportunities to prosper and improve the standard of living of local communities.</h2>
        </div>
    </section> --}}
@endsection
