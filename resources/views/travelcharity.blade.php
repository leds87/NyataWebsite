@extends('layout.default')
@section('title', __('messages.TravelCharityTitle'))
@section('page-content')

{{-- HEADER IMAGE --}}
<section class="flex relative max-w-none w-full h-[500px]">
    <div
        class="relative w-full max-w-none bg-cover bg-fixed bg-no-repeat bg-[url('/image/travel-charity/header-bg.jpg')]">
        <div class="px-12 max-w-screen-xl text-center mx-auto py-16 md:py-28 md:px-24 lg:py-20 lg:px-32 xl:py-28 animated animatedFadeInUp fadeInUp">
            <h1 class="title-header text-red uppercase">{{__('messages.TravelCharity') }}</h1>
            <p class="text-white content-header pt-4 max-w-[600px] mx-auto">
                {{ __('messages.TravelCharityDescription') }}
            </p>
        </div>
    </div>
</section>

<section class="text-center max-w-none w-full bg-white py-16">
    <h1 class="title-body text-black uppercase">{{__('messages.OtherSide') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
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
            <div class="flex relative bg-cover bg-no-repeat bg-[url('/image/travel-charity/Travel-Charity-Jogjakarta.jpg')] w-full h-[750px]"></div>
        </div>
        <div class="hidden transition-all duration-700 ease-in-out" id="sumba" role="tabpanel"
            aria-labelledby="sumba-tab">
            <div class="flex relative bg-cover bg-no-repeat bg-[url('/image/travel-charity/Travel-Charity-Sumba.jpg')] w-full h-[750px]"></div>
        </div>
        <div class="hidden transition-all duration-700 ease-in-out" id="flores" role="tabpanel"
            aria-labelledby="flores-tab">
            <div class="flex relative bg-cover bg-no-repeat bg-[url('/image/travel-charity/Travel-Charity-Flores.jpg')] w-full h-[750px]"></div>
        </div>
        <div class="hidden transition-all duration-700 ease-in-out" id="alor" role="tabpanel"
            aria-labelledby="alor-tab">
            <div class="flex relative bg-cover bg-no-repeat bg-[url('/image/travel-charity/Travel-Charity-Alor.jpg')] w-full h-[750px]"></div>
        </div>
        <div class="hidden transition-all duration-700 ease-in-out" id="papua" role="tabpanel"
            aria-labelledby="papua-tab">
            <div class="flex relative bg-cover bg-no-repeat bg-[url('/image/travel-charity/Travel-Charity-Papua.jpg')] w-full h-[750px]"></div>
        </div>
    </div>
</section>

<section class="text-center max-w-none w-full bg-white py-16">
    <h1 class="title-body text-black uppercase">{{__('messages.ExploreShare') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <div class="px-8 mx-auto 2xl:max-w-[1200px] lg:max-w-[800px] md:max-w-[600px]">
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

@endsection
