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
