<?php

use App\User;
use Illuminate\Database\Seeder;

class UsuarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Criando usuario admin
        User::create(['name' => 'Admin', 'email' => 'admin@admin.com', 'password' => Hash::make('admin')]);
    }
}
