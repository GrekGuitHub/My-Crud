<?php

namespace Database\Seeders;
use App\Models\Job;

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Job::factory()->count(20)->create();
    }
}
