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
                'school_name' => 'school1',
                'location' => 'Bandung',
                'address' => '-',
                'children' => '100',
                'status' => 'Active',
                'required_donation' => '50000'
            ]);
        schooldata::create(
            [
                'school_name' => 'school2',
                'location' => 'Bandung',
                'address' => '-',
                'children' => '150',
                'status' => 'Inactive',
                'required_donation' => '125000'
            ]);
        schooldata::create(
            [
                'school_name' => 'school3',
                'location' => 'Jakarta',
                'address' => '-',
                'children' => '150',
                'status' => 'Active',
                'required_donation' => '75000'
            ]);
        schooldata::create(
            [
                'school_name' => 'school4',
                'location' => 'Jakarta',
                'address' => '-',
                'children' => '150',
                'status' => 'Inactive',
                'required_donation' => '25000'
            ]);
    }
}
