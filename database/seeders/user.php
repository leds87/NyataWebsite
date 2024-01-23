<?php

namespace Database\Seeders;

use App\Models\userdata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        userdata::withoutEvents(function () {
            userdata::create(
                [
                    'name' => 'user',
                    'email' => 'user@mail.com',
                    'password' => bcrypt('user'),
                    'address' => '-',
                    'phone' => '0818445',
                    'tier' => 'Loyal',
                    'note' => '-',
                    'since' => '2024-01-01',
                    'status' => 'Active',
                    'log' => 'user',
                ]);
            userdata::create(
                [
                    'name' => 'user1',
                    'email' => 'user1@mail.com',
                    'password' => bcrypt('user1'),
                    'address' => '-',
                    'phone' => '0818445',
                    'tier' => 'Loyal',
                    'note' => '-',
                    'since' => '2024-01-01',
                    'status' => 'Inactive',
                    'log' => 'user',
                ]);
            userdata::create(
                [
                    'name' => 'user2',
                    'email' => 'user2@mail.com',
                    'password' => bcrypt('user2'),
                    'address' => '-',
                    'phone' => '0818445',
                    'tier' => 'Loyal',
                    'note' => '-',
                    'since' => '2024-01-01',
                    'status' => 'Postpone',
                    'log' => 'user',
                ]);
            userdata::create(
                [
                    'name' => 'user3',
                    'email' => 'user3@mail.com',
                    'password' => bcrypt('user3'),
                    'address' => '-',
                    'phone' => '0818445',
                    'tier' => 'Loyal',
                    'note' => '-',
                    'since' => '2024-01-01',
                    'status' => 'Active',
                    'log' => 'user',
                ]);
            });
    }
}
