{{-- FOUNDING STORY --}}
<section class="text-center max-w-none w-full bg-neutral-200 py-16">
    <h1 class="text-4xl font-extrabold tracking-tight leading-none text-black md:text-5xl lg:text-6xl px-24 uppercase">{{ __('messages.JoinNyata') }}</h1>
    <p class="text-black dark:text-gray-400 px-8 py-6 max-w-[68rem] mx-auto tracking-wider">{{ __('messages.JoinNyataDescription') }}</p>
    <form class="flex flex-col w-11/12 mx-auto text-black justify-center">
        <div class="flex flex-wrap mx-auto w-full h-1/4 py-3 justify-center md:flex-row">
            <input
                class="w-11/12 mx-1.5 rounded-lg py-2 px-3 text-black mb-3 leading-tight focus:outline-none focus:shadow-outline max-w-xs"
                id="name" type="name" placeholder="{{ __('messages.Name') }}">
            <input
                class="w-11/12 mx-1.5 rounded-lg py-2 px-3 text-black mb-3 leading-tight focus:outline-none focus:shadow-outline max-w-xs"
                id="emailaddress" type="emailaddress" placeholder="{{ __('messages.EmailAddress') }}">
        </div>
        <button
            class="mx-auto w-11/12 bg-[#ff0000] text-white text-base font-bold mt-8 py-3 px-0 rounded-2xl focus:outline-none focus:shadow-outline max-w-xs md:mt-2"
            type="button">
            {{ __('messages.Join') }}
        </button>
    </form>
</section>
<div class="mx-auto w-full max-w-screen-full">
    <div class="grid grid-cols-1 gap-8 px-4 py-6 lg:py-8 md:grid-cols-2">
        <div class="w-full text-center mx-auto md:text-left">
            <a href="{{ route('home') }}">
                <img src="/image/share/LogoNyataWord.png" class="h-36 mx-auto md:mx-0">
            </a>
            <p class="uppercase font-bold text-xl mt-6">{{ __('messages.ContactUs') }}</p>
            <p class="text-xl"><a href="tel:6281222334708">Ph +62 812 2233 4708</a></p>
            <p class="text-xl"><a href="https://www.instagram.com/nyatafoundation/" target="blank">IG @nyatafoundation</a></p>
        </div>
        <div class="text-center md:text-right md:pt-16">
            <button class="mx-auto w-full bg-white text-[#ff0000] text-base font-bold py-3 rounded-2xl focus:outline-none focus:shadow-outline uppercase max-w-xs"
                type="button" onclick="window.location='{{ route('contactus') }}'">
                {{ __('messages.GiveSupport') }}
            </button>
            <p class="uppercase font-bold text-xl mt-6">{{ __('messages.SendYourDonation') }}</p>
            <p class="text-xl">Yayasan Anak-anak Tanah Air</p>
            <p class="text-xl">No. 233 999 6622</p>
            <p class="text-xl">BCA Cab. Sukajadi Bandung</p>
        </div>
    </div>
</div>
