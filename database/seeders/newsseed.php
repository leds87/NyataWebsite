<?php

namespace Database\Seeders;

use App\Models\news;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class newsseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        news::create(
            [
                'title' => 'Child1',
                'date' => '2024-01-01',
                'slug' => 'child1%N001',
                'description' => 'Child1',
                'category' => 'Donation',
                'children_id' => '1',
            ],
        );
        news::create(
            [
                'title' => 'Child2',
                'date' => '2024-01-01',
                'slug' => 'child2%N002',
                'description' => 'Child2',
                'category' => 'Donation',
                'children_id' => '2',
            ],
        );
        news::create(
            [
                'title' => 'Child3',
                'date' => '2024-01-01',
                'slug' => 'child3%N003',
                'description' => 'Child3',
                'category' => 'Donation',
                'children_id' => '3',
            ],
        );
        news::create(
            [
                'title' => 'Child4',
                'date' => '2024-01-01',
                'slug' => 'child4%N004',
                'description' => 'Child4',
                'category' => 'Donation',
                'children_id' => '4',
            ],
        );
        news::create(
            [
                'title' => 'FOR ALL',
                'date' => '2024-01-01',
                'slug' => 'forall%N005',
                'description' => 'ALL',
                'category' => 'Donation',
                'children_id' => null,
            ],
        );
    }
}
