<?php

use Illuminate\Database\Seeder;

class GenerationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $generation1=App\Generation::firstOrCreate(["name"=>"Thiacoumane"],["uuid"=>Str::uuid()]);
        $generation2=App\Generation::firstOrCreate(["name"=>"Dialidiali"],["uuid"=>Str::uuid()]);
        $generation3=App\Generation::firstOrCreate(["name"=>"Diamano"],["uuid"=>Str::uuid()]);
        $generation4=App\Generation::firstOrCreate(["name"=>"Ecole de foot"],["uuid"=>Str::uuid()]);
    }
}
