<?php

use Illuminate\Database\Seeder;

class QuartiersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $quartier1=App\Quartier::firstOrCreate(["name"=>"NEMA"],["uuid"=>Str::uuid()]);
        $quartier2=App\Quartier::firstOrCreate(["name"=>"ETAMA"],["uuid"=>Str::uuid()]);
        $quartier3=App\Quartier::firstOrCreate(["name"=>"KABEKEL"],["uuid"=>Str::uuid()]);
        $quartier4=App\Quartier::firstOrCreate(["name"=>"CENTRAL"],["uuid"=>Str::uuid()]);
    }
}
