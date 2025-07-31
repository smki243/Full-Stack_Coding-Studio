<?php

use Illuminate\Database\Seeder;
use App\Mobil;

class mobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mobil::factory()->create([
            'namemobil' =>'toyota',

        ]);
    }
}
