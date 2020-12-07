<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class employees_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'employees_name' => Str::random(10),
            'companies_id' => '1',
            'email' => Str::random(10) . '@gmail.com',
        ]);
    }
}
