<?php

namespace Database\Seeders;

use App\Models\admindata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admindata::withoutEvents(function () {
            admindata::create([
                'name' => 'raymond',
                'address' => '-',
                'password' => bcrypt('raymond'),
                'email' => 'raymond@mail.com',
                'phone' => '088484',
                'role' => 'Super',
                'note' => '-',
                'log' => 'Admin',
            ]);
        });
    }
}