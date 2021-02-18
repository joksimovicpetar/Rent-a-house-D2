<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 15; $i++) {
            $date_od = Carbon::today()->addDays(rand(0, 365));
            $date_do = $date_od->copy()->addDays(rand(1, 10));

            DB::table('renta')->insert([
                'date_od' => $date_od,
                'date_do' => $date_do,
                'kuca_id' => rand(1, 20)
            ]);
        }
    }
}
