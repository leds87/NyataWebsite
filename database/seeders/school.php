<?php

namespace Database\Seeders;

use App\Models\schooldata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class school extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        schooldata::create(
            [
                'school_name' => 'TK Alor',
                'location' => 'Nusa Tenggara Timur',
                'address' => '-',
                'children' => '15',
                'status' => 'Active',
                'required_donation' => '130000'
            ]);
        schooldata::create(
            [
                'school_name' => 'TK Batu Karang',
                'location' => 'Jakarta Timur',
                'address' => '-',
                'children' => '14',
                'status' => 'Active',
                'required_donation' => '130000'
            ]);
        schooldata::create(
            [
                'school_name' => 'TK Santa Lucia II',
                'location' => 'Papua Selatan',
                'address' => 'Kecamatan Kurik,Kabupaten Merauke,Papua Selatan',
                'children' => '16',
                'status' => 'Active',
                'required_donation' => '130000'
            ]);
        schooldata::create(
            [
                'school_name' => 'Sakola Adat Nias',
                'location' => 'Sumatera Utara',
                'address' => '-',
                'children' => '1',
                'status' => 'Active',
                'required_donation' => '90000'
            ]);
        schooldata::create(
            [
                'school_name' => 'SD Koa Papua',
                'location' => 'Papua',
                'address' => '-',
                'children' => '2',
                'status' => 'Active',
                'required_donation' => '105000'
            ]);
        schooldata::create(
            [
                'school_name' => 'SMTK Alor',
                'location' => 'Nusa Tenggara Timur',
                'address' => '-',
                'children' => '22',
                'status' => 'Active',
                'required_donation' => '250000'
            ]);
        schooldata::create(
            [
                'school_name' => 'Sakola Adat Arus Kualan',
                'location' => 'Kalimantan Barat',
                'address' => '-',
                'children' => '1',
                'status' => 'Active',
                'required_donation' => '70000'
            ]);
        schooldata::create(
            [
                'school_name' => 'Sakola Adat Dayak Lebang',
                'location' => 'Kalimantan',
                'address' => '-',
                'children' => '1',
                'status' => 'Active',
                'required_donation' => '70000'
            ]);
        schooldata::create(
            [
                'school_name' => 'Via Suster Hillari',
                'location' => '-',
                'address' => '-',
                'children' => '1',
                'status' => 'Active',
                'required_donation' => '105000'
            ]);
        schooldata::create(
            [
                'school_name' => 'Sumba',
                'location' => 'Sumatra Barat',
                'address' => '-',
                'children' => '9',
                'status' => 'Active',
                'required_donation' => '130000'
            ]);
        schooldata::create(
            [
                'school_name' => 'Kumbe',
                'location' => 'Papua Selatan',
                'address' => 'Jl. Ahmad Yani Kumbe, Kumbe, Kec. Malind, Kab. Merauke Prov. Papua Selatan ',
                'children' => '2',
                'status' => 'Active',
                'required_donation' => '250000'
            ]);
        schooldata::create(
            [
                'school_name' => 'SMP Flores',
                'location' => 'Nusa Tenggara Timur',
                'address' => '-',
                'children' => '1',
                'status' => 'Active',
                'required_donation' => '120000'
            ]);
    }
}
