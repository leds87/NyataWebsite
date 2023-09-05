@extends('layout.default')
@section('title', __('messages.DetailSchoolTitle'))
@section('page-content')

    {{-- DETAIL SCHOOL --}}
    <section class="text-center w-full bg-white pt-16">
        <h1 class="title-body text-black uppercase">{{ __('messages.DetailSchool') }}</h1>
        <div class="inline-flex items-center justify-center w-full px-24">
            <hr class="w-48 h-[2px] my-6 bg-gray-400 border-0 dark:bg-gray-700">
        </div>
    </section>

    <section class="text-left max-w-none w-full bg-white py-8 px-12">
        <div class="flex flex-row justify-around flex-wrap items-start">
            <div class="flex flex-col max-w-xl basis-full sm:basis-1/2 md:max-w-[300px] md:max-w-[600px] pt-8">
                <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-8">Alor, NTT</h2>
                <ul class="list-disc text-black leading-8 content-body py-4">
                    <li>
                        Titik Lokasi: Alor , NTT<br />
                        Nama Sekolah Partner Nyata: TK Sangkakala<br />
                        Jumlah adik asuh: 44 orang
                    </li>
                    <li>
                        Titik Lokasi: Alor , NTT<br />
                        Nama Sekolah Partner Nyata: SMP Maleipea<br />
                        Jumlah adik asuh: 35 orang
                    </li>
                    <li>
                        Titik Lokasi: Alor , NTT<br />
                        Nama Sekolah Partner Nyata: SMTK Alor<br />
                        Jumlah adik asuh: 75 orang
                    </li>
                </ul>

                <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Nagekeo, Flores</h2>
                <ul class="list-disc text-black leading-8 content-body py-4">
                    <li>Titik Lokasi: Boamau , Flores<br>Nama Sekolah Partner Nyata: TK Anggrek<br>Jumlah adik asuh: 18
                        orang</li>
                    <li>Titik Lokasi: Boamau , Flores<br>Nama Sekolah Partner Nyata: SD Balesama<br>Jumlah adik asuh: 40
                        orang</li>
                    <li>Titik Lokasi: Nagekeo , Flores<br>Nama Sekolah Partner Nyata: TK Kasih<br>Jumlah adik asuh: 22 orang
                    </li>
                    <li>Titik Lokasi: Nagekeo, Flores<br>Nama Sekolah Partner Nyata: SD Inpreslea<br>Jumlah adik asuh: 60
                        orang</li>
                    <li>Titik Lokasi: Giriwawo , Flores<br>Nama Sekolah Partner Nyata: TK Mutiara<br>Jumlah adik asuh: 16
                        orang</li>
                    <li>Titik Lokasi: Giriwawo, Flores<br>Nama Sekolah Partner Nyata: SD Giriwawo<br>Jumlah adik asuh: 61
                        orang</li>
                    <li>Titik Lokasi: Keo Tengah, Flores<br>Nama Sekolah Partner Nyata: SMPN 1 Keo Tengah Satap<br>Jumlah
                        adik asuh: 28 orang</li>
                    <li>Titik Lokasi: Aesena Selatan, Flores<br>Nama Sekolah Partner Nyata: SD Malawona<br>Jumlah adik
                        asuh:70 orang</li>
                </ul>

                <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Kupang, NTT</h2>
                <ul class="list-disc text-black leading-8 content-body py-4">
                    <li>Titik Lokasi: Amfoang Kupang, NTT<br>Nama Sekolah Partner Nyata: TK Bibilu<br>Jumlah adik asuh: 15
                        orang</li>
                    <li>Titik Lokasi: Amfoang Kupang , NTT<br>Nama Sekolah Partner Nyata: SD Naeelo<br>Jumlah adik asuh: 46
                        orang</li>
                    <li>Titik Lokasi: Fatuleu Kupang, NTT<br>Nama Sekolah Partner Nyata: SD Amsila<br>Jumlah adik asuh: 50
                        orang</li>
                    <li>Titik Lokasi: Yogja dan Kupang<br>Nama Sekolah Partner Nyata: Via Suster Vincentania<br>Jumlah adik
                        asuh: 20 orang</li>
                    <li>Titik Lokasi: Kupang, NTT<br>Nama Sekolah Partner Nyata: SD Nunka<br>Jumlah adik asuh: 43 orang</li>
                    <li>Titik Lokasi: Noekele, NTT<br>Nama Sekolah Partner Nyata: SD Satu Atap<br>Jumlah adik asuh: 83 orang
                    </li>
                    <li>Titik Lokasi: Semau, NTT<br>Nama Sekolah Partner Nyata: Via Ka Cony<br>Jumlah adik asuh: 57 orang
                    </li>
                </ul>

                <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Morotai, Maluku</h2>
                <ul class="list-disc text-black leading-8 content-body py-4">
                    <li>Titik Lokasi: Morotai, Maluku Utara<br>Nama Sekolah Partner Nyata: SMA Hohidai<br>Jumlah adik asuh:
                        50 orang</li>
                </ul>

                <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Sialogo, Sumatera
                    Utara</h2>
                <ul class="list-disc text-black leading-8 content-body py-4">
                    <li>Titik Lokasi: Ampolo&amp;Sialogo, Sumatra Utara<br>Nama Sekolah Partner Nyata: Sakola
                        Pelangi<br>Jumlah adik asuh: 58 orang</li>
                </ul>

                <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Bandung, Jawa Barat
                </h2>
                <ul class="list-disc text-black leading-8 content-body py-4">
                    <li>Titik Lokasi: Bandung, Jawa Barat<br>Nama Sekolah Partner Nyata: TK&amp;SD Paulus<br>Jumlah adik
                        asuh: 30 orang</li>
                </ul>
            </div>
            <div class="flex flex-col max-w-xl basis-full sm:basis-1/2 md:max-w-[300px] lg:max-w-[600px] pt-8">
                <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-8">Merauke, Papua</h2>
                <ul class="list-disc text-black leading-8 content-body py-4">
                    <li>
                        Titik Lokasi: Kurik , Papua<br />
                        Nama Sekolah Partner Nyata: TK Santa Lucia II<br />
                        Jumlah adik asuh: 36 orang
                    </li>
                    <li>
                        Titik Lokasi: Kurik , Papua
                        Nama Sekolah Partner Nyata: TK Santa Lucia I<br />
                        Jumlah adik asuh: 22 orang<br />
                    </li>
                    <li>
                        Titik Lokasi: Merauke , Papua<br />
                        Nama Sekolah Partner Nyata: TK Batu Karang<br />
                        Jumlah adik asuh: 30 orang
                    </li>
                    <li>
                        Titik Lokasi: Wayau , Papua<br />
                        Nama Sekolah Partner Nyata: SD YPPK ST.FRANSISKUS XAVERIUS WAYAU<br />
                        Jumlah adik asuh: 93 orang
                    </li>
                    <li>
                        Titik Lokasi: Koa , Papua<br />
                        Nama Sekolah Partner Nyata: SEKOLAH YPPK KOA MERAUKE<br />
                        Jumlah adik asuh: 107 orang
                    </li>
                    <li>
                        Titik Lokasi: Bad , Papua<br />
                        Nama Sekolah Partner Nyata: SEKOLAH YPPK DISTRIK ANIMHA<br />
                        Jumlah adik asuh: 92 orang
                    </li>
                    <li>
                        Titik Lokasi: Zanegi , Papua<br />
                        Nama Sekolah Partner Nyata: SD YPPK SENEGI<br />
                        Jumlah adik asuh: 70 orang
                    </li>
                    <li>
                        Titik Lokasi: Kumbe , Papua<br />
                        Nama Sekolah Partner Nyata: Asrama Kumbe Via Pastor Yupen<br />
                        Jumlah adik asuh: 55 orang
                    </li>
                    <li>Titik Lokasi: Merauke , Papua<br />
                        Nama Sekolah Partner Nyata: SD Nusantara<br />
                        Jumlah adik asuh: 76 orang
                    </li>
                    <li>
                        Titik Lokasi: Merauke , Papua<br />
                        Nama Sekolah Partner Nyata: SMP Gudang Arang<br />
                        Jumlah adik asuh: 28 orang
                    </li>
                    <li>
                        Titik Lokasi: Merauke , Papua<br />
                        Nama Sekolah Partner Nyata: SMTK Setia<br />
                        Jumlah adik asuh: 25 orang
                    </li>
                </ul>

                <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Simpang Hulu,
                    Kalimantan Barat</h2>
                <ul class="list-disc text-black leading-8 content-body py-4">
                    <li>Titik Lokasi: Simpang Hulu, Kalimantan<br>Nama Sekolah Partner Nyata: Sakola Adat Arus
                        Kualan<br>Jumlah adik asuh: 169 orang</li>
                </ul>

                <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Lembata, NTT</h2>
                <ul class="list-disc text-black leading-8 content-body py-4">
                    <li>Titik Lokasi: Lembata , NTT<br>Nama Sekolah Partner Nyata: Via Suster Hillary<br>Jumlah adik asuh:
                        20 orang</li>
                </ul>

                <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Nias, Sumatera Utara
                </h2>
                <ul class="list-disc text-black leading-8 content-body py-4">
                    <li>Titik Lokasi: <span style="font-weight: 400;">Desa Baromataluo, Kecamatan Fanayama dan Desa
                            Hiliamaeta, Kecamatan Lugundri Menamolo</span><br>Nama Sekolah Partner Nyata: <span
                            style="font-weight: 400;">Sakola Adat Nias (</span><span style="font-weight: 400;">SDN 1
                            Bawomataluo dan</span> <span style="font-weight: 400;">SDN 071117 </span><span
                            style="font-weight: 400;">Hiliamaetaniha)</span><br>Jumlah adik asuh: 69 orang</li>
                </ul>

                <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Sumba, NTT</h2>
                <ul class="list-disc text-black leading-8 content-body py-4">
                    <li>Titik Lokasi: <span style="font-weight: 400;">Kecamatan Katikutana dan Kecamatan Mamboro, Sumba
                            Tengah</span><br><span style="font-weight: 400;">Adik Asuh di Paroki St Klemens Katiku Loku Desa
                            Anakalang dan Pos Pelayanan Mamboro Via </span><i><span style="font-weight: 400;">Romo
                                Vinsen</span></i><br>Jumlah adik asuh: 49 orang</li>
                    <li>Titik Lokasi: <span style="font-weight: 400;">Kota Waikabubak</span><br><span
                            style="font-weight: 400;">Adik Asuh di Waikabubak Via </span><i><span
                                style="font-weight: 400;">Pastor Nuel</span></i><br>Jumlah adik asuh: 29 orang</li>
                </ul>

                <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Malaka, NTT</h2>
                <ul class="list-disc text-black leading-8 content-body py-4">
                    <li>Titik Lokasi: Kecamatan Kobalima<br>Adik Asuh di Wilayah Kobalima Via <em>Suster
                            Hillaria</em><br>Jumlah adik asuh: 46 orang</li>
                </ul>
            </div>
        </div>
    </section>

@endsection
