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
                'name' => 'user',
                'email' => 'user@mail.com',
                'password' => bcrypt('user'),
                'address' => '-',
                'phone' => '0818445',
                'tier' => 'Loyal',
                'note' => '-',
                'since' => '2024-01-01',
                'status' => 'active',
                'log' => 'User',
            ]);
    }
}
