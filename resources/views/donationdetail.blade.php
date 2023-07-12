@extends('layout.default')
@section('title', __('messages.DonationDetailTitle'))
@section('page-content')

{{-- SUPPORT DONATION --}}
<section class="w-full bg-white py-16">
    <h1 class="title-body text-black uppercase text-center">{{ __('messages.SupportDonation') }}</h1>
    <div class="inline-flex items-center justify-center w-full px-24">
        <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
    </div>
    <div class="flex flex-row flex-wrap justify-around items-start my-5">
        <div class="flex flex-col justify-start pb-8 px-5 max-w-xl basis-full sm:basis-1/2">
            <h2 class="title-body text-black font-bold px-8 uppercase md:max-w-xs lg:max-w-none">Bank Central Asia</h2>
            <p class="content-body text-black max-w-xs px-8 md:max-w-md">Direct transfer to BCA</p>
            <p class="content-body text-black max-w-xs px-8 md:max-w-md">Yayasan Anak-anak Tanah Air</p>
            <p class="content-body text-black max-w-xs px-8 md:max-w-md">No. 233 999 6622</p>
            <p class="content-body text-black max-w-xs px-8 md:max-w-md">BCA Cab. Sukajadi Bandung</p>
        </div>
        <div class="flex flex-col justify-center pb-8 px-5 max-w-xl basis-full sm:basis-1/2">
            <h2 class="title-body text-black font-bold px-8 uppercase md:max-w-xs lg:max-w-none">Paypal and Credit Card</h2>
            <p class="content-body text-black py-4 px-8 max-w-xs md:max-w-xs">Cooming Soon</p>
        </div>
    </div>
</section>

@endsection
