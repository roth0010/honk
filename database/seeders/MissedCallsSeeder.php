<?php

namespace Database\Seeders;

use App\Models\missedCalls;
use Illuminate\Database\Seeder;

class MissedCallsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        missedCalls::factory(100)->create();
    }
}
