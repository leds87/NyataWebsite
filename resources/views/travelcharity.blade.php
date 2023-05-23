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
        </div>
    </section>

    <section>
        <div class="text-center font-bold">
            THE OTHER SIDE OF INDONESIA
        </div>
    </section>

    <section>
        <div class="sm:hidden">
            <label for="tabs" class="sr-only">Select your country</label>
            <select id="tabs" class="bg-neutral-200 border text-black text-xl font-bold block w-full p-0 ">
                <option>SCHOOL BUILD</option>
                <option>GROWS TEACHERS WELL-BEING</option>
                <option>CHILDREN'S NUTRITION</option>
                <option>SCHOLARSHIPS</option>
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
                            SCHOOL BUILD
                        </div>
                    </button>
                </li>
                <li class="w-full" role="presentation">
                    <button
                        class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                        id="growsteacher-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">
                        <div class=" p-4 text-black hover:text-[white]">
                            GROWS TEACHERS WELL-BEING
                        </div>
                    </button>
                </li>
                <li class="w-full" role="presentation">
                    <button
                        class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                        id="childrennutrition-tab" data-tabs-target="#settings" type="button" role="tab"
                        aria-controls="settings" aria-selected="false">
                        <div class="p-4 text-black hover:text-[white]">
                            CHILDREN'S NUTRITION
                        </div>
                    </button>
                </li>
                <li class="w-full" role="presentation">
                    <button
                        class="inline-block w-full font-bold text-xl bg-neutral-200 hover:text-[white] hover:bg-[#ff0000]"
                        id="scholarships-tab" data-tabs-target="#contacts" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false">
                        <div class="p-4 text-black hover:text-[white]">
                            SCHOLARSHIPS
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
@endsection
