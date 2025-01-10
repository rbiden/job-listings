<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(4)->create();
        Job::factory(5)->hasAttached($tags)->create(new Sequence(
            ['featured' => true],
            ['featured' => false]
        ));
    }
}
