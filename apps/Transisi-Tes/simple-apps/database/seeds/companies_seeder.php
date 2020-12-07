<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class companies_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 11; $i++) {
            DB::table('companies')->insert([
                'companies_name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'logo' => Str::random(15),
                'website' => Str::random(10),
            ]);
        }
    }
}
