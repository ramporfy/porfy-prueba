<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //primero que se ejecute el factory
        factory(App\User::class, 20)->create();


        //ahora creamos un rol de acceso total
        Role::create([
        	'name'		=>'Admin',
        	'slug'		=>'admin',
        	'special'	=>'all-access',

        	]);
    }
}
