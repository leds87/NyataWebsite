@extends('layout.default')
@section('title', __('messages.AdikAsuhTitle'))
@section('page-content')

    {{-- HEADER IMAGE --}}
    <section class="flex relative max-w-none w-full h-[500px]">
        <div class="relative w-full max-w-none bg-cover bg-fixed bg-no-repeat bg-[url('/image/adik-asuh/header-bg.jpg')]">
            <div
                class="px-12 max-w-screen-xl text-center mx-auto py-16 md:py-28 md:px-24 lg:py-20 lg:px-32 xl:py-28 animated animatedFadeInUp fadeInUp">
                <h1 class="title-header text-red uppercase">{{ __('messages.AdikAsuh') }}</h1>
                <p class="text-white content-header pt-4 max-w-[600px] mx-auto">
                    {{ __('messages.AdikAsuhDescription') }}
                </p>
                <button type="button" class="bg-[#ff0000] px-3 py-2 my-8 text-xl rounded-[10px] uppercase"
                    onclick="window.location='{{ route('donationdetail') }}'">
                    {{ __('messages.GiveSupport') }}
                </button>
            </div>
        </div>
    </section>

    {{-- COUNT --}}
    <section class="text-center max-w-none w-full bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="grid gap-8 md:grid-cols-2 font-bold">
                <div>
                    <h3 class="px-3 py-3 text-red-500 text-7xl">
                        <span class="font-['Book']" id="AdikAsuhMember">0</span>
                    </h3>
                    <p class="px-3 py-3 text-black text-xl font-museo700 uppercase">
                        {{ __('messages.AdikAsuh') }}
                    </p>
                </div>
                <div>
                    <h3 class="px-3 py-3 text-red-500 text-7xl">
                        <span class="font-['Book']" id="SekolahMember">0</span>
                    </h3>
                    <p class="px-3 py-3 text-black text-xl font-museo700 uppercase">
                        {{ __('messages.Schools') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script>
        countUp('AdikAsuhMember', '2011', true);
        countUp('SekolahMember', '38', false);
    </script>

    {{-- MAP --}}
    <section class="text-center max-w-none w-full h-auto bg-neutral-200">
        <div class="p-4 xl:p-8 text-right">
            <button type="button" class="w-fit px-3 py-3 bg-[#ff0000] rounded-lg uppercase font-bold"
                onclick="window.location='{{ route('detailschool') }}'">
                {{ __('messages.SeeAll') }}
            </button>
        </div>
        <div class="relative overflow-x-auto w-full h-auto">
            <img src="/image/adik-asuh/indonesia-map.png" class="relative bg-cover p-4 xl:p-8">

            {{-- SIALOGO, SUMUT --}}
            <button data-popover-target="popover-sialogo" type="button" id="sialogo"
                class="absolute hidden md:block bg-transparent w-4 h-4 focus:outline-none rounded-xl">
            </button>
            <div data-popover id="popover-sialogo" role="tooltip"
                class="absolute z-10 invisible inline-block w-fit text-sm text-white transition-opacity duration-300 bg-[#ff0000] border-2 border-white rounded-lg shadow-sm opacity-0">
                <div class="px-3 py-2 rounded-t-lg">
                    <h1 class="font-semibold text-white text-3xl">Sialogo, Sumut</h1>
                </div>
                <div class="px-3 py-2">
                    <ul class="list-disc text-left mx-4 mb-4 leading-6 text-md">
                        <li>
                            Titik Lokasi : Ampolo & Sialogo, Sumatra Utara<br />
                            Nama Sekolah Partner Nyata : Sakola Pelangi<br />
                            Jumlah adik asuh : 60 orang
                        </li>
                    </ul>
                </div>
                <div data-popper-arrow></div>
            </div>


            {{-- NIAS, SUMUT --}}
            <button data-popover-target="popover-nias" type="button" id="nias"
                class="absolute hidden md:block bg-transparent w-4 h-4 focus:outline-none rounded-xl">
            </button>
            <div data-popover id="popover-nias" role="tooltip"
                class="absolute z-10 invisible inline-block w-fit text-sm text-white transition-opacity duration-300 bg-[#ff0000] border-2 border-white rounded-lg shadow-sm opacity-0">
                <div class="px-3 py-2 rounded-t-lg">
                    <h1 class="font-semibold text-white text-3xl">Nias, Sumut</h1>
                </div>
                <div class="px-3 py-2">
                    <ul class="list-disc text-left mx-4 mb-4 leading-6 text-md">
                        <li>
                            Titik Lokasi: Nias, Sumatra Utara<br />
                            Nama Sekolah Partner Nyata: Sakola adat Nias Bawomataluo & Hilimaeta<br />
                            Jumlah adik asuh: 69 orang
                        </li>
                    </ul>
                </div>
                <div data-popper-arrow></div>
            </div>

            {{-- SIMPANG HULU, KALBAR --}}
            <button data-popover-target="popover-simpanghulu" type="button" id="simpanghulu"
                class="absolute hidden md:block bg-transparent w-6 h-6 focus:outline-none rounded-xl">
            </button>
            <div data-popover id="popover-simpanghulu" role="tooltip"
                class="absolute z-10 invisible inline-block w-fit text-sm text-white transition-opacity duration-300 bg-[#ff0000] border-2 border-white rounded-lg shadow-sm opacity-0">
                <div class="px-3 py-2 rounded-t-lg">
                    <h1 class="font-semibold text-white text-3xl">Simpang Hulu, Kalimantan Barat</h1>
                </div>
                <div class="px-3 py-2">
                    <ul class="list-disc text-left mx-4 mb-4 leading-6 text-md">
                        <li>
                            Titik Lokasi : Simpang Hulu, Kalimantan<br />
                            Nama Sekolah Partner Nyata : Sakola Adat Arus Kualan<br />
                            Jumlah adik asuh : 169 orang
                        </li>
                    </ul>
                </div>
            </div>

            {{-- BANDUNG, JABAR --}}
            <button data-popover-target="popover-bandung" type="button" id="bandung"
                class="absolute hidden md:block bg-transparent w-5 h-5 focus:outline-none rounded-xl">
            </button>
            <div data-popover id="popover-bandung" role="tooltip"
                class="absolute z-10 invisible inline-block w-fit text-sm text-white transition-opacity duration-300 bg-[#ff0000] border-2 border-white rounded-lg shadow-sm opacity-0">
                <div class="px-3 py-2 rounded-t-lg">
                    <h1 class="font-semibold text-white text-3xl">Bandung, Jawa Barat</h1>
                </div>
                <div class="px-3 py-2">
                    <ul class="list-disc text-left mx-4 mb-4 leading-6 text-md">
                        <li>
                            Titik Lokasi : Bandung, Jawa Barat<br />
                            Nama Sekolah Partner Nyata : TK&SD Paulus<br />
                            Jumlah adik asuh : 30 orang
                        </li>
                    </ul>
                </div>
            </div>

            {{-- SUMBA, NTT --}}
            <button data-popover-target="popover-sumba" type="button" id="sumba"
                class="absolute hidden md:block bg-transparent w-5 h-5 focus:outline-none rounded-xl">
            </button>
            <div data-popover id="popover-sumba" role="tooltip"
                class="absolute z-10 invisible inline-block w-fit text-sm text-white transition-opacity duration-300 bg-[#ff0000] border-2 border-white rounded-lg shadow-sm opacity-0">
                <div class="px-3 py-2 rounded-t-lg">
                    <h1 class="font-semibold text-white text-3xl">Sumba, NTT</h1>
                </div>
                <div class="px-3 py-2">
                    <ul class="list-disc text-left mx-4 mb-4 leading-6 text-md">
                        <li>
                            Titik Lokasi : Sumba Tengah, NTT<br />
                            Nama Sekolah Partner Nyata : Via Romo Vinzent<br />
                            Jumlah adik asuh : 49 orang
                        </li>
                        <li>
                            Titik Lokasi : Sumba Tengah, NTT<br />
                            Nama Sekolah Partner Nyata : Via Pastor Nuel<br />
                            Jumlah adik asuh : 29 orang
                        </li>
                    </ul>
                </div>
            </div>

            {{-- NAGEKEO, FLORES --}}
            <button data-popover-target="popover-nagekeo" type="button" id="nagekeo"
                class="absolute hidden md:block bg-transparent w-5 h-5 focus:outline-none rounded-xl">
            </button>
            <div data-popover id="popover-nagekeo" role="tooltip"
                class="absolute z-10 invisible inline-block w-fit text-sm text-white transition-opacity duration-300 bg-[#ff0000] border-2 border-white rounded-lg shadow-sm opacity-0">
                <div class="px-3 py-2 rounded-t-lg">
                    <h1 class="font-semibold text-white text-3xl">Nagekeo, Flores</h1>
                </div>
                <div class="px-3 py-2">
                    <ul class="list-disc text-left mx-4 mb-4 leading-6 text-md">
                        <li>
                            Titik Lokasi : Nagekeo, Flores<br />
                            Nama Sekolah Partner Nyata : SD Inpreslea<br />
                            Jumlah adik asuh : 57 orang
                        </li>
                        <li>
                            Titik Lokasi : Giriwawo, Flores<br />
                            Nama Sekolah Partner Nyata : SD Giriwawo<br />
                            Jumlah adik asuh : 53 orang
                        </li>
                    </ul>
                </div>
            </div>

            {{-- LEMBATA, NTT --}}
            <button data-popover-target="popover-lembata" type="button" id="lembata"
                class="absolute hidden md:block bg-transparent w-4 h-4 focus:outline-none rounded-xl">
            </button>
            <div data-popover id="popover-lembata" role="tooltip"
                class="absolute z-10 invisible inline-block w-fit text-sm text-white transition-opacity duration-300 bg-[#ff0000] border-2 border-white rounded-lg shadow-sm opacity-0">
                <div class="px-3 py-2 rounded-t-lg">
                    <h1 class="font-semibold text-white text-3xl">Lembata, NTT</h1>
                </div>
                <div class="px-3 py-2">
                    <ul class="list-disc text-left mx-4 mb-4 leading-6 text-md">
                        <li>
                            Titik Lokasi : Lembata, NTT<br />
                            Nama Sekolah Partner Nyata : Via Suster Hillaria<br />
                            Jumlah adik asuh : 51 orang
                        </li>
                    </ul>
                </div>
            </div>

            {{-- ALOR, NTT --}}
            <button data-popover-target="popover-alor" type="button" id="alor"
                class="absolute hidden md:block bg-transparent w-5 h-5 focus:outline-none rounded-xl">
            </button>
            <div data-popover id="popover-alor" role="tooltip"
                class="absolute z-10 invisible inline-block w-fit text-sm text-white transition-opacity duration-300 bg-[#ff0000] border-2 border-white rounded-lg shadow-sm opacity-0">
                <div class="px-3 py-2 rounded-t-lg">
                    <h1 class="font-semibold text-white text-3xl">Alor, NTT</h1>
                </div>
                <div class="px-3 py-2">
                    <ul class="list-disc text-left mx-4 mb-4 leading-6 text-md">
                        <li>
                            Titik Lokasi : Alor , NTT<br />
                            Nama Sekolah Partner Nyata : SMTK Alor<br />
                            Jumlah adik asuh : 75 orang
                        </li>
                        <li>
                            Titik Lokasi : Alor, NTT<br />
                            Nama Sekolah Partner Nyata : SMP Maleipea<br />
                            Jumlah adik asuh : 35 orang
                        </li>
                    </ul>
                </div>
            </div>

            {{-- KUPANG, NTT --}}
            <button data-popover-target="popover-kupang" type="button" id="kupang"
                class="absolute hidden md:block bg-transparent w-5 h-5 focus:outline-none rounded-xl">
            </button>
            <div data-popover id="popover-kupang" role="tooltip"
                class="absolute z-10 invisible inline-block w-fit text-sm text-white transition-opacity duration-300 bg-[#ff0000] border-2 border-white rounded-lg shadow-sm opacity-0">
                <div class="px-3 py-2 rounded-t-lg">
                    <h1 class="font-semibold text-white text-3xl">Kupang, NTT</h1>
                </div>
                <div class="px-3 py-2">
                    <ul class="list-disc text-left mx-4 mb-4 leading-6 text-md">
                        <li>
                            Titik Lokasi : Semau, NTT<br />
                            Nama Sekolah Partner Nyata : Via Ka Cony<br />
                            Jumlah adik asuh : 61 orang
                        </li>
                        <li>
                            Titik Lokasi : Amfoang Kupang, NTT<br />
                            Nama Sekolah Partner Nyata : SD Naeelo<br />
                            Jumlah adik asuh : 45 orang
                        </li>
                    </ul>
                </div>
            </div>

            {{-- MOROTAI, MALUKU --}}
            <button data-popover-target="popover-morotai" type="button" id="morotai"
                class="absolute hidden md:block bg-transparent w-5 h-5 focus:outline-none rounded-xl">
            </button>
            <div data-popover id="popover-morotai" role="tooltip"
                class="absolute z-10 invisible inline-block w-fit text-sm text-white transition-opacity duration-300 bg-[#ff0000] border-2 border-white rounded-lg shadow-sm opacity-0">
                <div class="px-3 py-2 rounded-t-lg">
                    <h1 class="font-semibold text-white text-3xl">Morotai, Maluku</h1>
                </div>
                <div class="px-3 py-2">
                    <ul class="list-disc text-left mx-4 mb-4 leading-6 text-md">
                        <li>
                            Titik Lokasi : Morotai, Maluku Utara<br />
                            Nama Sekolah Partner Nyata : SMA Hohidai<br />
                            Jumlah adik asuh : 62 orang
                        </li>
                    </ul>
                </div>
            </div>

            {{-- MERAUKE, PAPUA --}}
            <button data-popover-target="popover-merauke" type="button" id="merauke"
                class="absolute hidden md:block bg-transparent w-5 h-5 focus:outline-none rounded-xl">
            </button>
            <div data-popover id="popover-merauke" role="tooltip"
                class="absolute z-10 invisible inline-block w-fit text-sm text-white transition-opacity duration-300 bg-[#ff0000] border-2 border-white rounded-lg shadow-sm opacity-0">
                <div class="px-3 py-2 rounded-t-lg">
                    <h1 class="font-semibold text-white text-3xl">Merauke, Papua</h1>
                </div>
                <div class="px-3 py-2">
                    <ul class="list-disc text-left mx-4 mb-4 leading-6 text-md">
                        <li>
                            Titik Lokasi : Koa, Papua<br />
                            Nama Sekolah Partner Nyata : SEKOLAH YPPK KOA MERAUKE<br />
                            Jumlah adik asuh : 129 orang
                        </li>
                        <li>
                            Titik Lokasi : Zanegi, Papua<br />
                            Nama Sekolah Partner Nyata : SD YPPK SENEGI<br />
                            Jumlah adik asuh : 123 orang
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTENT IMAGE --}}
    <section class="flex relative max-w-none w-full h-fit">
        <div
            class="relative w-full max-w-none bg-cover bg-fixed bg-no-repeat bg-[url('/image/adik-asuh/tagline-bg.jpg')] bg-white w-full h-[500px]">
            <div
                class="relative flex flex-col justify-start inset-x-[10%] py-16 md:py-36 xl:py-40 animated animat  edFadeInUp fadeInUp">
                <h1 class="text-red title-header max-w-xs md:max-w-[700px] lg:max-w-[900px] uppercase">
                    {{ __('messages.Aku') }} <span
                        class="text-white underline underline-offset-4">{{ __('messages.Bintang') }}</span>
                </h1>
                <h1 class="text-red title-header max-w-xs md:max-w-[700px] uppercase">
                    {{ __('messages.AnakTerang') }}
                </h1>
            </div>
        </div>
    </section>

    {{-- MEET MARIA --}}
    <section class="text-center max-w-none w-full bg-white py-16 px-8">
        <h1 class="title-body text-black uppercase">{{ __('messages.MeetMaria') }}</h1>
        <div class="inline-flex items-center justify-center w-full px-24">
            <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0">
        </div>
        <div class="gap-8 items-start py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 lg:grid lg:grid-cols-2 sm:py-16 lg:px-6">
            <div class="mt-4 md:mt-0">
                <div class="flex flex-wrap py-4">
                    <table class="table-fit text-xs leading-6 text-left text-black md:text-xl md:leading-10">
                        <tbody>
                            <tr>
                                <td>{{ __('messages.Name') }}</td>
                                <td class="px-16">:</td>
                                <td class="font-bold">Maria Magdalena Natailia Katu</td>
                            </tr>
                            <tr>
                                <td>{{ __('messages.Nickname') }}</td>
                                <td class="px-16">:</td>
                                <td class="font-bold">Natailia</td>
                            </tr>
                            <tr>
                                <td>{{ __('messages.Age') }}</td>
                                <td class="px-16">:</td>
                                <td class="font-bold">12 years old</td>
                            </tr>
                            <tr>
                                <td>{{ __('messages.Education') }}</td>
                                <td class="px-16">:</td>
                                <td class="font-bold">Junior High School / SMP</td>
                            </tr>
                            <tr>
                                <td>{{ __('messages.Birth') }}</td>
                                <td class="px-16">:</td>
                                <td class="font-bold">Alor, 27 December 2009</td>
                            </tr>
                            <tr>
                                <td>{{ __('messages.Dream') }}</td>
                                <td class="px-16">:</td>
                                <td class="font-bold">Doctor</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-wrap py-4">
                    <div>
                        <p
                            class="text-black text-left content-body pt-4 max-w-[1100px] md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1000px] 2xl:max-w-[1200px]">
                            {{ __('messages.MeetDescription') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <img class="w-full rounded-3xl" src="/image/adik-asuh/maria-bg.jpg">
            </div>
        </div>
    </section>

    {{-- WHY CHOOSE --}}
    <section class="text-center max-w-none w-full bg-neutral-200 py-16">
        <h1 class="title-body text-black uppercase">{{ __('messages.WhyChoose') }}</h1>
        <div class="inline-flex items-center justify-center w-full px-24">
            <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0">
        </div>
        <div class="flex flex-col flex-wrap justify-center w-full mx-auto py-5 my-5 max-w-[700px]">
            <div class="flex flex-col justify-center py-5 px-5">
                <img src="{{ URL::asset('image/adik-asuh/direct-giving-icon.png') }}" class="mx-auto max-w-xs py-2">
                <h3 class="px-3 py-3 text-black text-3xl text-center font-bold">
                    {{ __('messages.DirectGiving') }}
                </h3>
                <p class="px-3 py-3 text-black text-base text-center">
                    {{ __('messages.DirectGivingAdikAsuhDescription') }}
                </p>
            </div>
            <div class="flex flex-col justify-center py-5 px-5">
                <img src="{{ URL::asset('image/adik-asuh/grow-teacher-icon.png') }}" class="mx-auto max-w-xs py-2">
                <h3 class="px-3 py-3 text-black text-3xl text-center font-bold">
                    {{ __('messages.GrowTeacher') }}
                </h3>
                <p class="px-3 py-3 text-black text-base text-center">
                    {{ __('messages.GrowTeacherDescription') }}
                </p>
            </div>
            <div class="flex flex-col justify-center py-5 px-5">
                <img src="{{ URL::asset('image/adik-asuh/operational-integrity-icon.png') }}"
                    class="mx-auto max-w-xs py-2">
                <h3 class="px-3 py-3 text-black text-3xl text-center font-bold">
                    {{ __('messages.OperationalIntegrity') }}
                </h3>
                <p class="px-3 py-3 text-black text-base text-center">
                    {{ __('messages.OperationalIntegrityAdikAsuhDescription') }}
                </p>
            </div>
        </div>
    </section>

    {{-- BE SAVIOR --}}
    <section class="text-center max-w-none w-full bg-white py-16">
        <h1 class="title-body text-black uppercase">{{ __('messages.BeSavior') }}</h1>
        <div class="inline-flex items-center justify-center w-full px-24">
            <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0">
        </div>
        <div class="px-8 mx-auto 2xl:max-w-[1200px] lg:max-w-[800px] md:max-w-[600px]">
            <p class="text-black pt-6 max-w-[68rem] text-left tracking-wider font-bold">
                {{ __('messages.WhyYouChooseOur') }}</p>
            <ul class="text-black pt-4 pb-2 max-w-[68rem] text-left tracking-wider list-disc px-6">
                <li>{{ __('messages.WhyYouChooseOur1') }}</li>
                <li>{{ __('messages.WhyYouChooseOur2') }}</li>
                <li>{{ __('messages.WhyYouChooseOur3') }}</li>
            </ul>

            <p class="text-black pt-6 max-w-[68rem] text-left tracking-wider font-bold">{{ __('messages.HowCanYouHelp') }}
            </p>
            <p class="text-black pt-4 pb-2 max-w-[68rem] text-left tracking-wider">
                {{ __('messages.HowCanYouHelpDescription') }}</p>
            <p class="text-black max-w-[68rem] text-left tracking-wider">{{ __('messages.AdikAsuhHelp') }}</p>
            <ul class="text-black pb-2 max-w-[68rem] text-left tracking-wider list-disc px-6">
                <li>{{ __('messages.AdikAsuhHelp1') }}</li>
                <li>{{ __('messages.AdikAsuhHelp2') }}</li>
                <li>{{ __('messages.AdikAsuhHelp3') }}</li>
                <li>{{ __('messages.AdikAsuhHelp4') }}</li>
            </ul>

            <p class="text-black pt-6 max-w-[68rem] text-left tracking-wider font-bold">{{ __('messages.WhoYouHelp') }}
            </p>
            <p class="text-black pt-4 pb-2 max-w-[68rem] text-left tracking-wider"><span
                    class="font-bold uppercase">{{ __('messages.Schools') }} : </span>
                {{ __('messages.SchoolWhoYouHelpDescription') }}</p>
            <ul class="text-black max-w-[68rem] text-left tracking-wider list-disc px-6">
                <li>{{ __('messages.SchoolWhoYouHelp1') }}</li>
                <li>{{ __('messages.SchoolWhoYouHelp2') }}</li>
            </ul>

            <p class="text-black pt-4 pb-2 max-w-[68rem] text-left tracking-wider"><span
                    class="font-bold uppercase">{{ __('messages.AdikAsuh') }} :
                </span>{{ __('messages.AdikAsuhWhoYouHelpDescription') }}</p>
            <ul class="text-black max-w-[68rem] text-left tracking-wider list-disc px-6">
                <li>{{ __('messages.AdikAsuhWhoYouHelp1') }}</li>
                <li>{{ __('messages.AdikAsuhWhoYouHelp2') }}</li>
                <li>{{ __('messages.AdikAsuhWhoYouHelp3') }}</li>
                <li>{{ __('messages.AdikAsuhWhoYouHelp4') }}</li>
                <li>{{ __('messages.AdikAsuhWhoYouHelp5') }}</li>

            </ul>
        </div>
    </section>

    <script>
        var width = window.innerWidth;
        var height = window.innerHeight;

        window.addEventListener('load', function(event) {
            console.log('Screen Load!');
            initPinPoint();
        });

        window.addEventListener('resize', function(event) {
            console.log('Screen size changed!');
            initPinPoint();
        });

        function initPinPoint() {
            var element = document.getElementById("sialogo");
            element.style.top = `${20.5}%`;
            element.style.left = `${9}%`;

            var element = document.getElementById("nias");
            element.style.top = `${23}%`;
            element.style.left = `${6.3}%`;

            var element = document.getElementById("simpanghulu");
            element.style.top = `${30.5}%`;
            element.style.left = `${31.9}%`;

            var element = document.getElementById("bandung");
            element.style.top = `${66.2}%`;
            element.style.left = `${27.1}%`;

            var element = document.getElementById("sumba");
            element.style.top = `${82.2}%`;
            element.style.left = `${53.4}%`;

            var element = document.getElementById("nagekeo");
            element.style.top = `${77.5}%`;
            element.style.left = `${55.5}%`;

            var element = document.getElementById("lembata");
            element.style.top = `${77.3}%`;
            element.style.left = `${59.4}%`;

            var element = document.getElementById("alor");
            element.style.top = `${75}%`;
            element.style.left = `${63.5}%`;

            var element = document.getElementById("morotai");
            element.style.top = `${16.2}%`;
            element.style.left = `${71.2}%`;

            var element = document.getElementById("kupang");
            element.style.top = `${85}%`;
            element.style.left = `${61.3}%`;

            var element = document.getElementById("merauke");
            element.style.top = `${75.2}%`;
            element.style.left = `${96.5}%`;
        }
    </script>

@endsection
