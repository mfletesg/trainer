<?php

use Illuminate\Database\Seeder;
use LaraDex\Role;
use LaraDex\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first(); //Hacemos un query que trae la informacion con el nombre user
        $role_admin =  Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = "User";
        $user->email = "user@mail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_user); //Accedemos al metodo de roles creado en el Modelo y con attach relacionamos los modelos User y Roles

        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@mail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
