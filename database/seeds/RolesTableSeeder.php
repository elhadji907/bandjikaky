<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $role1=App\Role::firstOrCreate(["name"=>"Administrateur"],["uuid"=>Str::uuid()]);
        $role2=App\Role::firstOrCreate(["name"=>"Membre"],["uuid"=>Str::uuid()]);
        $role3=App\Role::firstOrCreate(["name"=>"Gestionnaire"],["uuid"=>Str::uuid()]);
        $role4=App\Role::firstOrCreate(["name"=>"Nologin"],["uuid"=>Str::uuid()]);
    }
}
