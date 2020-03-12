<?php

use Illuminate\Database\Seeder;

class FamillesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $familles1=App\Famille::firstOrCreate(["name"=>"BADJICOUNDA"],["quartiers_id"=>"1"],["uuid"=>Str::uuid()]);
        $familles2=App\Famille::firstOrCreate(["name"=>"SAMBOUCOUNDA"],["quartiers_id"=>"3"],["uuid"=>Str::uuid()]);
        $familles3=App\Famille::firstOrCreate(["name"=>"SOUCOUTA"],["quartiers_id"=>"1"],["uuid"=>Str::uuid()]);
        $familles4=App\Famille::firstOrCreate(["name"=>"SALICOUNDA"],["quartiers_id"=>"2"],["uuid"=>Str::uuid()]);
        $familles5=App\Famille::firstOrCreate(["name"=>"TABOCOTO"],["quartiers_id"=>"4"],["uuid"=>Str::uuid()]);
        $familles6=App\Famille::firstOrCreate(["name"=>"DIECOUNDA"],["quartiers_id"=>"1"],["uuid"=>Str::uuid()]);
        $familles7=App\Famille::firstOrCreate(["name"=>"SOUBATEL"],["quartiers_id"=>"2"],["uuid"=>Str::uuid()]);
        $familles8=App\Famille::firstOrCreate(["name"=>"THIANECOUNDA"],["quartiers_id"=>"3"],["uuid"=>Str::uuid()]);
    }
}
