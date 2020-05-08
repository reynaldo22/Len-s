<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service')->insert([
            ['service_type' => "Potographer"],
            ['service_type' => "Videographer"],
        ]);
    }
}
