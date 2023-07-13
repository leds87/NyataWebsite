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
                 <ul class="list-disc text-black leading-8 content-body text-black py-4">
                    <li>
                        Titik Lokasi: Alor , NTT<br/>
                        Nama Sekolah Partner Nyata: TK Sangkakala<br/>
                        Jumlah adik asuh: 44 orang
                    </li>
                    <li>
                        Titik Lokasi: Alor , NTT<br/>
                        Nama Sekolah Partner Nyata: SMP Maleipea<br/>
                        Jumlah adik asuh: 35 orang
                    </li>
                    <li>
                        Titik Lokasi: Alor , NTT<br/>
                        Nama Sekolah Partner Nyata: SMTK Alor<br/>
                        Jumlah adik asuh: 75 orang
                    </li>
                </ul>

            <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Nagekeo, Flores</h2>
                 <ul class="list-disc text-black leading-8 content-body text-black py-4">
                    <li>Titik Lokasi: Boamau , Flores<br>Nama Sekolah Partner Nyata: TK Anggrek<br>Jumlah adik asuh: 15 orang</li>
                    <li>Titik Lokasi: Boamau , Flores<br>Nama Sekolah Partner Nyata: SD Balesama<br>Jumlah adik asuh: 36 orang</li>
                    <li>Titik Lokasi: Nagekeo , Flores<br>Nama Sekolah Partner Nyata: TK Kasih<br>Jumlah adik asuh: 23 orang</li>
                    <li>Titik Lokasi: Nagekeo, Flores<br>Nama Sekolah Partner Nyata: SD Inpreslea<br>Jumlah adik asuh: 57 orang</li>
                    <li>Titik Lokasi: Giriwawo , Flores<br>Nama Sekolah Partner Nyata: TK Mutiara<br>Jumlah adik asuh: 21 orang</li>
                    <li>Titik Lokasi: Giriwawo, Flores<br>Nama Sekolah Partner Nyata: SD Giriwawo<br>Jumlah adik asuh: 53 orang</li>
                    <li>Titik Lokasi: Keo Tengah, Flores<br>Nama Sekolah Partner Nyata: SMPN 1 Keo Tengah Satap<br>Jumlah adik asuh: 24 orang</li>
                </ul>

            <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Kupang, NTT</h2>
                 <ul class="list-disc text-black leading-8 content-body text-black py-4">
                    <li>Titik Lokasi: Amfoang Kupang, NTT<br>Nama Sekolah Partner Nyata: TK Bibilu<br>Jumlah adik asuh: 25 orang</li>
                    <li>Titik Lokasi: Amfoang Kupang , NTT<br>Nama Sekolah Partner Nyata: SD Naeelo<br>Jumlah adik asuh: 45 orang</li>
                    <li>Titik Lokasi: Fatuleu Kupang, NTT<br>Nama Sekolah Partner Nyata: SD Amsila<br>Jumlah adik asuh: 52 orang</li>
                    <li>Titik Lokasi: Yogja dan Kupang<br>Nama Sekolah Partner Nyata: Via Suster Vincentania<br>Jumlah adik asuh: 21 orang</li>
                    <li>Titik Lokasi: Kupang, NTT<br>Nama Sekolah Partner Nyata: Via Monik<br>Jumlah adik asuh: 4 orang</li>
                    <li>Titik Lokasi: Noekele, NTT<br>Nama Sekolah Partner Nyata: SD Satu Atap<br>Jumlah adik asuh: 45 orang</li>
                    <li>Titik Lokasi: Semau, NTT<br>Nama Sekolah Partner Nyata: Via Ka Cony<br>Jumlah adik asuh: 61 orang</li>
                </ul>

            <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Morotai, Maluku</h2>
                 <ul class="list-disc text-black leading-8 content-body text-black py-4">
                    <li>Titik Lokasi: Morotai, Maluku Utara<br>Nama Sekolah Partner Nyata: SMA Hohidai<br>Jumlah adik asuh: 62 orang</li>
                </ul>

            <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Sialogo, Sumatera Utara</h2>
                <ul class="list-disc text-black leading-8 content-body text-black py-4">
                    <li>Titik Lokasi: Ampolo&amp;Sialogo, Sumatra Utara<br>Nama Sekolah Partner Nyata: Sakola Pelangi<br>Jumlah adik asuh: 60 orang</li>
                </ul>

            <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Bandung, Jawa Barat</h2>
                <ul class="list-disc text-black leading-8 content-body text-black py-4">
                    <li>Titik Lokasi: Bandung, Jawa Barat<br>Nama Sekolah Partner Nyata: TK&amp;SD Paulus<br>Jumlah adik asuh: 30 orang</li>
                </ul>
        </div>
        <div class="flex flex-col max-w-xl basis-full sm:basis-1/2 md:max-w-[300px] lg:max-w-[600px] pt-8">
            <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-8">Merauke, Papua</h2>
                 <ul class="list-disc text-black leading-8 content-body text-black py-4">
                    <li>
                        Titik Lokasi: Kurik , Papua<br/>
                        Nama Sekolah Partner Nyata: TK Santa Lucia II<br/>
                        Jumlah adik asuh: 59 orang
                    </li>
                    <li>
                        Titik Lokasi: Kurik , Papua
                        Nama Sekolah Partner Nyata: TK Santa Lucia I<br/>
                        Jumlah adik asuh: 13 orang<br/>
                    </li>
                    <li>
                        Titik Lokasi: Merauke , Papua<br/>
                        Nama Sekolah Partner Nyata: TK Batu Karang<br/>
                        Jumlah adik asuh: 38 orang
                    </li>
                    <li>
                        Titik Lokasi: Wayau , Papua<br/>
                        Nama Sekolah Partner Nyata: SD YPPK ST.FRANSISKUS XAVERIUS WAYAU<br/>
                        Jumlah adik asuh: 102 orang
                    </li>
                    <li>
                        Titik Lokasi: Koa , Papua<br/>
                        Nama Sekolah Partner Nyata: SEKOLAH YPPK KOA MERAUKE<br/>
                        Jumlah adik asuh: 129 orang
                    </li>
                    <li>
                        Titik Lokasi: Bad , Papua<br/>
                        Nama Sekolah Partner Nyata: SEKOLAH YPPK DISTRIK ANIMHA<br/>
                        Jumlah adik asuh: 92 orang
                    </li>
                    <li>
                        Titik Lokasi: Zanegi , Papua<br/>
                        Nama Sekolah Partner Nyata: SD YPPK SENEGI<br/>
                        Jumlah adik asuh: 123 orang
                    </li>
                    <li>
                        Titik Lokasi: Kumbe , Papua<br/>
                        Nama Sekolah Partner Nyata: Asrama Kumbe Via Pastor Yupen<br/>
                        Jumlah adik asuh: 80 orang
                    </li>
                    <li>Titik Lokasi: Merauke , Papua<br/>
                        Nama Sekolah Partner Nyata: SD Nusantara<br/>
                        Jumlah adik asuh: 79 orang
                    </li>
                    <li>
                        Titik Lokasi: Merauke , Papua<br/>
                        Nama Sekolah Partner Nyata: SMP Gudang Arang<br/>
                        Jumlah adik asuh: 46 orang
                    </li>
                    <li>
                        Titik Lokasi: Merauke , Papua<br/>
                        Nama Sekolah Partner Nyata: SMTK Setia<br/>
                        Jumlah adik asuh: 20 orang
                    </li>
                </ul>

            <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Simpang Hulu, Kalimantan Barat</h2>
                <ul class="list-disc text-black leading-8 content-body text-black py-4">
                    <li>Titik Lokasi: Simpang Hulu, Kalimantan<br>Nama Sekolah Partner Nyata: Sakola Adat Arus Kualan<br>Jumlah adik asuh: 169 orang</li>
                </ul>

            <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Lembata, NTT</h2>
                <ul class="list-disc text-black leading-8 content-body text-black py-4">
                    <li>Titik Lokasi: Lembata , NTT<br>Nama Sekolah Partner Nyata: Via Suster Hillary<br>Jumlah adik asuh: 20 orang</li>
                </ul>

            <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Nias, Sumatera Utara</h2>
                <ul class="list-disc text-black leading-8 content-body text-black py-4">
                    <li>Titik Lokasi: <span style="font-weight: 400;">Desa Baromataluo, Kecamatan Fanayama dan Desa Hiliamaeta, Kecamatan Lugundri Menamolo</span><br>Nama Sekolah Partner Nyata: <span style="font-weight: 400;">Sakola Adat Nias (</span><span style="font-weight: 400;">SDN 1 Bawomataluo dan</span> <span style="font-weight: 400;">SDN 071117 </span><span style="font-weight: 400;">Hiliamaetaniha)</span><br>Jumlah adik asuh: 69 orang</li>
                </ul>

            <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Sumba, NTT</h2>
                <ul class="list-disc text-black leading-8 content-body text-black py-4">
                    <li>Titik Lokasi: <span style="font-weight: 400;">Kecamatan Katikutana dan Kecamatan Mamboro, Sumba Tengah</span><br><span style="font-weight: 400;">Adik Asuh di Paroki St Klemens Katiku Loku Desa Anakalang dan Pos Pelayanan Mamboro Via </span><i><span style="font-weight: 400;">Romo Vinsen</span></i><br>Jumlah adik asuh: 49 orang</li>
                    <li>Titik Lokasi: <span style="font-weight: 400;">Kota Waikabubak</span><br><span style="font-weight: 400;">Adik Asuh di Waikabubak Via </span><i><span style="font-weight: 400;">Pastor Nuel</span></i><br>Jumlah adik asuh: 29 orang</li>
                </ul>

            <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Malaka, NTT</h2>
                <ul class="list-disc text-black leading-8 content-body text-black py-4">
                    <li>Titik Lokasi: Kecamatan Kobalima<br>Adik Asuh di Wilayah Kobalima Via <em>Suster Hillaria</em><br>Jumlah adik asuh: 51 orang</li>
                </ul>

            <h2 class="title-body text-black font-bold uppercase md:max-w-xs lg:max-w-none pt-10">Tapanuli Tengah, Sumatera Utara</h2>
                <ul class="list-disc text-black leading-8 content-body text-black py-4">
                    <li>Titik Lokasi: <span style="font-weight: 400;">Desa Sialogo dan Desa Lubuk Ampolu, Kecamatan Badiri</span><br><span style="font-weight: 400;">Nama Sekolah Partner Nyata :Sakola Pelangi</span><br>Jumlah adik asuh: 60 orang</li>
                </ul>

        </div>
    </div>
</section>

@endsection
