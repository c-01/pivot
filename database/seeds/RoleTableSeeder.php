<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'ceo'
        ]);

        Role::create([
            'name' => 'shipper'
        ]);

        Role::create([
            'name' => 'leader'
        ]);
    }
}
