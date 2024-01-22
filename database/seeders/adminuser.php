<?php

namespace Database\Seeders;

use App\Models\userdata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class adminuser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        userdata::create(
        [
            'name' => 'user1',
            'email' => 'user1@mail.com',
            'password' => bcrypt('user1'),
            'address' => '-',
            'phone' => '0818445',
            'tier' => 'Loyal',
            'note' => '-',
            'since' => '01-01-2024',
            'status' => 'active',
        ],
        [
            'name' => 'user2',
            'email' => 'user2@mail.com',
            'password' => bcrypt('user2'),
            'address' => '-',
            'phone' => '0818445',
            'tier' => 'Loyal',
            'note' => '-',
            'since' => '01-01-2024',
            'status' => 'active',
        ],
        [
            'name' => 'user3',
            'email' => 'user3@mail.com',
            'password' => bcrypt('user3'),
            'address' => '-',
            'phone' => '0818445',
            'tier' => 'Loyal',
            'note' => '-',
            'since' => '01-01-2024',
            'status' => 'active',
        ]);
    }
}
