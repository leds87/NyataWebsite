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
                    'status' => 'active',
                    'log' => 'User',
                ]);
            });
            }
        
}
