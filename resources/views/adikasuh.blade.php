@extends('layout.default')
@section('page-content')
    <section class="flex relative max-w-none w-full h-[400px] md:h-[950px]">
        <div style="background-image:url('/image/donate/HomePageAnakTerangNyata.jpg')"
            class="relative w-full max-w-none bg-cover bg-center bg-fixed">
            <div
                class="absolute bottom-0 w-full flex flex-col justify-center text-center mx-auto my-5 px-5 py-5 md:my-10 md:py-10">
                <h3 class="mx-auto px-3 py-3 text-5xl font-bold text-red-500">
                    ADIK ASUH
                </h3>
                <p class="mx-auto px-3 py-3 text-xl font-bold text-white">
                    Be Kakak Asuh to provide support for our younger siblings so they can continue to go to school and
                    achieve a brighter future
                </p>
            </div>
        </div>
    </section>
    <section class="flex flex-row items-center max-w-none w-full bg-neutral-200 py-10 md:py-5">
        <div class="container justify-center max-w-none py-6">
            <h3 class="w-full text-center font-bold text-5xl py-3 text-black font-museo700">
                OUR PROGRESS
            </h3>
            <div class="flex flex-row justify-evenly">
                <div class="justify-center max-w-md py-3 px-6 text-center font-bold">
                    <h3 class="px-3 py-3 text-red-500 text-7xl">
                        1089
                    </h3>
                    <p class="px-3 py-3 text-black text-xl font-museo700">
                        ADIK ASUH
                    </p>
                </div>
                <div class="justify-center max-w-md py-3 px-6 text-center font-bold">
                    <h3 class="px-3 py-3 text-red-500 text-7xl">
                        89
                    </h3>
                    <p class="px-3 py-3 text-black text-xl font-museo700">
                        SCHOOLS
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
                class="absolute bottom-10 w-full flex flex-col justify-center text-center mx-auto my-5 px-5 py-5 md:my-10 md:py-10">
                <h3 class="text-left px-10 py-3 text-5xl font-bold text-red-500">
                    AKU BINTANG
                </h3>
                <p class="text-left px-10 py-3 text-5xl font-bold text-white">
                    ANAK TERANG
                </p>
            </div>
    </section>

    <section class="flex relative max-w-non w-full h-auto bg-white text-black">
        <div class="flex-wrap mx-auto px-3 py-3 text-3xl text-black">
            <h3 class="px-5 py-3 text-black text-5xl text-center font-bold">
                MEET MARIA
            </h3>
            <div class="grid grid-cols-2 m-[100px]">
                <div>
                    <p class="px-3 py-3 text-black text-base text-left">
                        Name : Maria Magdalena
                    </p>
                    <p class="px-3 py-3 text-black text-base text-left">
                        Nickname : Natalia
                    </p>
                    <p class="px-3 py-3 text-black text-base text-left">
                        Age : 12 years old
                    </p>
                    <p class="px-3 py-3 text-black text-base text-left">
                        Education : Junior High School / SMP
                    </p>
                    <p class="px-3 py-3 text-black text-base text-left">
                        Birth : Alor, 27 December 2009
                    </p>
                    <p class="px-3 py-3 text-black text-base text-left">
                        Dream : Doctor
                    </p>
                    <p class="px-3 py-3 text-black text-base text-left">
                        Natalia is a 12 years old girl who is currently in junior high school in Kupang City, NTT and lives
                        with her elderly grandparents. Due to poor economic condition Natalia has to work to meet the daily
                        needs of her grandfather, grandmother and herself by becoming a stone crusher and rice field guard
                        at harvest time after school. Struggling to become a doctor who will be able to help the people
                        around her, including her grandparents.
                    </p>
                </div>
                <div class="text-center">
                    Gambar
                </div>
            </div>
        </div>

        </div>

        </div>

        </div>

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
                    <p class="text-black text-base text-center">
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
        <div class="bg-white text-black text-left mx-auto px-[450px]">
            <div class="px-3 py-5 font-bold text-center text-5xl">
                BE SAVIOR, GIVE HOPE
            </div>
            <h2 class="pt-5 mb-3 font-bold text-2xl">WHY YOU CHOOSE OUR TRAVEL CHARITY PROGRAM</h2>
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
            <div class="pt-5 mb-3 font-bold text-2xl">
                HOW CAN YOU HELP
            </div>
            <h2 class="mb-3 text-lg font-semibold">Through this program, Kakak Asuh can help Adik
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
            <div class="pt-5 mb-3 font-bold text-2xl">
                WHO YOU HELP
            </div>
            <h2 class="pt-1 mb-2 text-lg font-semibold"><span class="font-bold text-1xl">SCHOOLS</span> : NYATA has received
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
            <h2 class="pt-4 mb-2 text-lg font-semibold"><span class="font-bold text-1xl">ADIK ASUH</span> : When the Kakak
                Asuh
                joins
                the
                NYATA Adik Asuh program. The Kakak Asuh will receive:</h2>
            <ul class="pb-5 space-y-1 list-disc list-inside text-left">
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
