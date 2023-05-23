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
    <section class="flex flex-row items-center max-w-none w-full bg-neutral-200 py-10 md:py-5">
        <div class="container justify-center max-w-none py-6">
            <h3 class="w-full text-center font-bold text-5xl py-3 text-black font-book">
                OUR PROGRESS
            </h3>
            <div class="flex flex-row justify-evenly">
                <div class="justify-center max-w-md py-3 px-6 text-center font-bold">
                    <h3 class="px-3 py-3 text-red-500 text-5xl">
                        1089
                    </h3>
                    <p class="px-3 py-3 text-black text-xl font-book">
                        ADIK ASUH
                    </p>
                </div>
                <div class="justify-center max-w-md py-3 px-6 text-center font-bold">
                    <h3 class="px-3 py-3 text-red-500 text-5xl">
                        89
                    </h3>
                    <p class="px-3 py-3 text-black text-xl">
                        SCHOOL
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="max-w-none w-full h-auto bg-neutral-200">
        <div class="relative overflow-x-auto w-[1920px] h-[900px]">
            <img src="/image/share/IndonesiaMap.png"
                class="relative top-[0px] left-[0px] object-none  p-2 md:p-5 whitespace-nowrap">
            <button data-popover-target="popover-default" type="button"
                class="absolute top-[100px] left-[200px] bg-[#ffFF00] w-4 h-4 ring-4 ring-white focus:ring-4 focus:outline-none focus:ring-white rounded-xl">
            </button>
        </div>

        <div data-popover id="popover-default" role="tooltip"
            class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                <h3 class="font-semibold text-gray-900 dark:text-white">Popover title</h3>
            </div>
            <div class="px-3 py-2">
                <p>And here's some amazing content. It's very engaging. Right?</p>
            </div>
            <div data-popper-arrow></div>
        </div>


    </section>

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
    </section>

    <section class="flex relative max-w-non w-full h-auto">
        <!-- Meet Maria -->
    </section>

    <section class="flex items-center max-w-none w-full bg-neutral-200 ">
        <div class="container justify-center max-w-none py-6">
            <h3 class="flex w-full justify-center mx-auto text-5xl py-3 my-5 text-black font-bold">
                WHY CHOOSE ADIK ASUH PROGRAM
            </h3>
            <div class="flex flex-col flex-wrap justify-center w-full mx-auto py-5 my-5">
                <div class="flex flex-col justify-center py-5 px-5">
                    <img src="{{ URL::asset('image/homepage/icon/whatweholdicon01.png') }}" class="mx-auto max-w-xs py-2">
                    <h3 class="px-3 py-3 text-black text-3xl text-center font-bold">
                        DIRECT GIVING
                    </h3>
                    <p class="px-3 py-3 text-black text-base text-center">
                        Donations given by Kakak Asuh are directly channeled to NYATA partner schools and are known by Adik
                        Asuh in a transparent manner, in order to avoid misuse of funds.
                    </p>
                </div>
                <div class="flex flex-col justify-center py-5 px-5">
                    <img src="{{ URL::asset('image/homepage/icon/whatweholdicon02.png') }}" class="mx-auto max-w-xs py-2">
                    <h3 class="px-3 py-3 text-black text-3xl text-center font-bold">
                        Grow Teacher's Wellbeing
                    </h3>
                    <p class="px-3 py-3 text-black text-base text-center">
                        Support the welfare of teachers in getting a decent wage, so that the teaching and learning process
                        can be carried out in a sustainable manner. NYATA also provides training programs for teachers in
                        the regions so that they can continue to develop their knowledge
                    </p>
                </div>
                <div class="flex flex-col justify-center py-5 px-5">
                    <img src="{{ URL::asset('image/homepage/icon/whatweholdicon03.png') }}" class="mx-auto max-w-xs py-2">
                    <h3 class="px-3 py-3 text-black text-3xl text-center font-bold">
                        OPERATIONAL INTEGRITY
                    </h3>
                    <p class="px-3 py-3 text-black text-base text-center">
                        NYATA is proactive in ensuring that every school and teachers can educate Adik Asuh properly. NYATA
                        involved in the development of each individual Kakak Asuh
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="bg-white text-black text-left mx-auto px-[600px]">
            <div class="font-bold text-center">
                BE SAVIOR, GIVE HOPE
            </div>
            <h2 class="mb-2 text-lg font-semibold">WHY YOU CHOOSE OUR TRAVEL CHARITY PROGRAM.</h2>
            <ul class="space-y-1 list-disc list-inside text-left">
                <li>
                    Donations given by Kakak Asuh are directly channeled to NYATA partner schools and are known by Adik Asuh
                    in
                    a transparent manner, in order to avoid misuse of funds
                </li>
                <li>
                    Support the welfare of teachers in getting a decent wage, so that the teaching and learning process can
                    be
                    carried out in a sustainable manner. NYATA also provides training programs for teachers in the regions
                    so
                    that they can continue to develop their knowledge
                </li>
                <li>
                    NYATA is proactive in ensuring that every school and teachers can educate Adik Asuh properly. NYATA
                    involved
                    in the development of each individual Kakak Asuh
                </li>
            </ul>
            <div class="font-bold">
                HOW CAN YOU HELP
            </div>
            <h2 class="mb-2 text-lg font-semibold">Through this program, Kakak Asuh can help Adik
                Asuh in various locations by providingg financial support for
                school fees or buying school supplies for teaching and learning activities at school.</h2>

            <ul class="space-y-1 list-disc list-inside text-left">
                <li>
                    In Adik Asuh program, Kakak Asuh indirectly help in
                </li>
                <li>
                    Lighten the burden on parents from Kakak Asuh
                </li>
                <li>
                    Realizing the dreams and ideals of Adik Asuh
                </li>
                <li>
                    Provide proper education for foster siblings in the area
                </li>
                <li>
                    Welface of teachers and other school workers by helping to prodive decent wages
                </li>
            </ul>
            <div class="font-bold">
                WHO YOU HELP
            </div>
            <h2 class="mb-2 text-lg font-semibold"><span class="font-bold">SCHOOLS</span> : NYATA has received
                recommendations for schools in Indonesia that need it after going through a
                direct survey process</h2>

            <ul class="space-y-1 list-disc list-inside text-left">
                <li>
                    NYATA team surveyed the location, the condition of the school building, the condition of the house and
                    environment where the children lived in the school, the relationship with other foundations, and the
                    teacher
                    salary system.
                </li>
                <li>
                    Schools will be selected if they meet all the criteria from the NYATA team, then schools will receive
                    assistance according to their needs.
                </li>
            </ul>
            <h2 class="mb-2 text-lg font-semibold"><span class="font-bold">ADIK ASUH</span> : When the Kakak Asuh
                joins
                the
                NYATA Adik Asuh program. The Kakak Asuh will receive:</h2>
            <ul class="space-y-1 list-disc list-inside text-left">
                <li>
                    Update Kakak Asuh’s activities every 1-2 months
                </li>
                <li>
                    Receipt of Adik Asuh dues per 3 months
                </li>
                <li>
                    Reports of Adik Asuh every end of semester school
                </li>
                <li>
                    Contract as Kakak Asuh for at least 1 school year
                </li>
                <li>
                    School tuition bills are sent every month via WhatsApp or email
                </li>
            </ul>


        </div>

    </section>
@endsection
