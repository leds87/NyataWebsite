<div class="flex flex-wrap bg-neutral-200 w-full h-[400px] md:h-[350px] justify-center">
    <form class="flex flex-col max-w-full py-5 mx-auto md:py-10 text-black justify-center">
        <div class="mx-auto font-bold text-5xl text-center px-5 py-3 uppercase">
            {{ __('messages.JoinNyata') }}
        </div>
        <div class="mx-auto text-base text-center px-5 py-3">
            {{ __('messages.JoinNyataDescription') }}
        </div>
        <div class="flex flex-wrap mx-auto w-full h-[80px] py-3 justify-center">
            <input class="w-[350px] md:w-[400px] mx-[5px] rounded-[25px] py-2 px-3 text-black mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="name" type="name" placeholder="{{ __('messages.Name') }}">
            <input class="w-[350px] md:w-[400px] mx-[5px] rounded-[25px] py-2 px-3 text-black mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="emailaddress" type="emailaddress" placeholder="{{ __('messages.EmailAddress') }}">
        </div>
        <button class="mx-auto w-[300px] bg-[#ff0000] text-white text-base font-bold mt-10 md:mt-5 py-3 px-0 rounded-[25px] focus:outline-none focus:shadow-outline"
            type="button">
            {{ __('messages.Join') }}
        </button>
    </form>
</div>
<div class="flex flex-row bg-[#ff0000] w-full justify-between">
    <div class="flex flex-col bg-[#ff0000] py-5 pl-5 md:py-10 md:pl-10">
        <img src="/image/share/LogoNyataWord.png" class="w-full h-[100px] pr-5">

        <a href="{{ route('contactus') }}" class="text-white font-bold text-left uppercase">
            {{ __('messages.ContactUs') }}
        </a>
        <div class="text-left">
            <a href="tel:6281222334708">
                Ph +62 812 2233 4708
            </a>
        </div>
        <div class="text-left">
            <a href="https://www.instagram.com/nyatafoundation/" target="blank">
                IG @nyatafoundation
            </a>
        </div>
    </div>
    <div class="flex flex-col bg-[#ff0000] py-5 pr-5 md:py-10 md:pr-10 justify-end items-end">
        <div>
            <a href="{{ route('contactus') }}" class="text-white font-bold text-left uppercase">
                {{ __('messages.GiveSupport') }}
            </a>
        </div>
        <div class="uppercase">
            {{ __('messages.SendYourDonation') }}
        </div>
        <div>
            Yayasan Anak-anak Tanah Air
        </div>
        <div>
            No. 233 999 6622
        </div>
        <div>
            BCA Cab. Sukajadi Bandung
        </div>
    </div>
</div>