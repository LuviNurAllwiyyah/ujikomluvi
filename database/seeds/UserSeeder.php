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

         //membuat role admin
         $memberRole = new Role();
         $memberRole->name = "luvi";
         $memberRole->display_name = "Luvi";
         $memberRole->save();

        //membuat sample admin
        $adminRole = new User;
        $adminRole->name ='Admin';
        $adminRole->email = 'admin@gmail.com';
        $adminRole->password = bcrypt('rahasia');
        $adminRole->save();
        $adminRole->attachRole($adminRole);

        //membuat user admin role
        $memberRole = new User;
        $memberRole->name ='Luvi';
        $memberRole->email = 'luvi@gmail.com';
        $memberRole->password = bcrypt('rahasia');
        $memberRole->save();
        $memberRole->attachRole($memberRole);

    }
}
