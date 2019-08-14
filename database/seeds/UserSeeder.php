<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //membuat sample admin
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        //membuat user admin role
        $adminRole = new User;
        $adminRole->name ='Luvi';
        $adminRole->email = 'admin@gmail.com';
        $adminRole->password = bcrypt('rahasia');
        $adminRole->save();
        $adminRole->attachRole($adminRole);

        //membuat user admin
        $admin = new User;
        $admin->name ='Luvi';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($admin);
    }
}
