<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(RoleTableSeeder::class); // Linea Agregada para que sea llamado de 1.ero el Usuario con su Rol Pre-Definido.
        $this->call(UserTableSeeder::class);
    }
}
