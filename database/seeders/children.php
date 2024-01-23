<?php

namespace Database\Seeders;

use App\Models\admindata;
use App\Models\childrendata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class children extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        childrendata::create(
            [
                'name' => 'child3',
                'school' => '-',
                'location' => '-',
                'age' => '2',
                'story' => '-',
                'description' => '-',
                'status' => 'Active',
            ],
        );
    }
}
