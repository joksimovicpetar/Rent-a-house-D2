<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class KucaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('kuca')->insert([
                'adresa' =>  Str::random(4) . " " . Str::random(4) . " " . rand(66, 99),
                'grad' =>  Str::random(5),
                'drzava' =>   Str::random(10),
                'kirija' =>   rand(100, 500),
            ]);
        }
    }
}
