@extends('layout.default')
@section('page-content')
    <section class="flex relative max-w-none w-full h-[400px] md:h-[950px]">
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
    </section>
@endsection
