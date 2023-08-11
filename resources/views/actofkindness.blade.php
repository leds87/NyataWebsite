@extends('layout.default')
@section('title', __('messages.ActOfKindnessTitle'))
@section('page-content')

{{-- HEADER IMAGE --}}
<section class="flex relative max-w-none w-full h-[500px]">
    <div
        class="relative w-full max-w-none bg-cover bg-fixed bg-no-repeat bg-[url('/image/act-of-kindness/header-bg.jpg')]">
        <div class="px-12 max-w-screen-xl text-left py-24 md:py-36 md:px-24 lg:py-32 lg:px-32 xl:py-40 animated animatedFadeInUp fadeInUp">
            <h1 class="title-header text-red uppercase">{{ __('messages.ActOfKindness') }}</h1>
            <p class="text-white content-header pt-4">
                {{ __('messages.ActOfKindnessHeaderDescription') }}
            </p>
        </div>
    </div>
</section>

{{-- RECORD --}}
<section class="text-center max-w-none w-full bg-white py-16 px-8 lg:text-left">
    <div class="grid px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-start lg:col-span-5 pb-10 text-black">
            <h1 class="title-body text-black uppercase">{{__('messages.Record') }}</h1>
            <p class="text-black content-body max-w-[800px] py-20">
                {{ __('messages.RecordDescription') }}
            </p>
            <button class="w-[150px] h-[40px] bg-[#ff0000] rounded-xl text-white font-bold" onclick="window.location='{{ route('actofkindness') }}'">
                {{ __('messages.LearnMore') }}
            </button>
        </div>
        <div class="lg:mt-0 lg:col-span-7 lg:flex">
            <div class="bg-cover bg-center bg-[url('/image/act-of-kindness/random-act-of-kindness.jpg')] w-full h-[500px] rounded-3xl"></div>
        </div>
    </div>
</section>

{{-- GET INVOLVED --}}
<section class="text-center w-full bg-white py-16 px-8">
    <h1 class="title-body text-black uppercase">{{ __('messages.GetInvolved') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0">
    </div>
    <div class="flex flex-wrap justify-around items-start mx-auto">
        <div class="flex flex-col justify-center 2xl:w-[500px] xl:w-[360px] lg:w-[280px] md:w-[700px]">
            <div class="flex relative bg-cover bg-center bg-no-repeat bg-[url('/image/act-of-kindness/Act-of-Kindness-act-1.jpg')] h-[350px] rounded-t-[25px]">
            </div>
            <div class="pb-8 py-5 bg-red rounded-b-[25px] text-white 2xl:h-[200px] xl:h-[230px] lg:h-[250px]">
                <h2 class="title-body px-3 text-center font-bold uppercase">
                    {{ __('messages.Act1') }}
                </h2>
                <p class="content-body px-10 py-5 text-center font-bold">
                    {{ __('messages.Act1Description') }}
                </p>
            </div>
            <div class="px-0 py-5 text-center">
                <button type="button" class="w-[200px] px-3 py-3 bg-[#ff0000] rounded-lg uppercase" onclick="window.location='{{ route('takeaction') }}'">
                    {{ __('messages.Volunteer') }}
                </button>
            </div>
        </div>
        <div class="flex flex-col justify-center 2xl:w-[500px] xl:w-[360px] lg:w-[280px] md:w-[700px]">
            <div class="flex relative bg-cover bg-center bg-no-repeat bg-[url('/image/act-of-kindness/Act-of-Kindness-act-2.jpg')] h-[350px] rounded-t-[25px]">
            </div>
            <div class="pb-4 py-5 bg-red rounded-b-[25px] text-white 2xl:h-[200px] xl:h-[230px] lg:h-[250px]">
                <h2 class="title-body px-3 text-center font-bold uppercase">
                    {{ __('messages.Act2') }}
                </h2>
                <p class="content-body px-10 py-5 text-center font-bold">
                    {{ __('messages.Act2Description') }}
                </p>
            </div>
            <div class="px-0 py-5 text-center">
                <button type="button" class="w-[200px] px-3 py-3 bg-[#ff0000] rounded-lg uppercase" onclick="window.location='{{ route('takeaction') }}'">
                    {{ __('messages.JoinTemanNyata') }}
                </button>
            </div>
        </div>
        <div class="flex flex-col justify-center 2xl:w-[500px] xl:w-[360px] lg:w-[280px] md:w-[700px]">
            <div class="flex relative bg-cover bg-center bg-no-repeat bg-[url('/image/act-of-kindness/Act-of-Kindness-act-3.jpg')] h-[350px] rounded-t-[25px]">
            </div>
            <div class="pb-6 py-5 bg-red rounded-b-[25px] text-white 2xl:h-[200px] xl:h-[230px] lg:h-[250px]">
                <h2 class="title-body px-3 text-center font-bold uppercase">
                    {{ __('messages.Act3') }}
                </h2>
                <p class="content-body px-10 py-5 text-center font-bold">
                    {{ __('messages.Act3Description') }}
                </p>
            </div>
            <div class="px-0 py-5 text-center">
                <button type="button" class="w-[200px] px-3 py-3 bg-[#ff0000] rounded-lg uppercase" onclick="window.open('https://www.instagram.com/nyatafoundation/', '_blank')">
                    {{ __('messages.VisitInstagram') }}
                </button>
            </div>
        </div>
    </div>
</section>

{{-- EXPLORE BEAUTY --}}
<section class="text-center max-w-none w-full bg-white py-16">
    <h1 class="title-body text-black uppercase">{{__('messages.ExploreBeauty') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0">
    </div>
    <div class="px-8 mx-auto 2xl:max-w-[1200px] lg:max-w-[800px] md:max-w-[600px]">
        <p class="text-black pt-6 max-w-[68rem] text-left tracking-wider font-bold">{{ __('messages.WhyYouChooseAct') }}</p>
        <p class="text-black pt-4 pb-2 max-w-[68rem] text-left tracking-wider">{{ __('messages.WhyYouChooseActDescription') }}</p>

        <p class="text-black pt-6 max-w-[68rem] text-left tracking-wider font-bold">{{ __('messages.HowCanYouHelp') }}</p>
        <p class="text-black pt-4 pb-2 max-w-[68rem] text-left tracking-wider"><span class="font-bold">{{ __('messages.Volunteer') }} : </span> {{ __('messages.HowCanYouHelpVolunteerDescription') }}</p>
        <p class="text-black pb-2 max-w-[68rem] text-left tracking-wider"><span class="font-bold">{{ __('messages.Donate') }} : </span> {{ __('messages.HowCanYouHelpDonateDescription') }}</p>

        <p class="text-black pt-6 max-w-[68rem] text-left tracking-wider font-bold">{{ __('messages.WhoYouHelp') }}</p>
        <p class="text-black pt-4 pb-2 max-w-[68rem] text-left tracking-wider">{{ __('messages.WhoYouHelpAct') }}</p>
    </div>
</section>

@endsection
