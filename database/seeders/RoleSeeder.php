<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = new Role();
        $admin->role_name = "Admin";
        $admin->save();

        $employee = new Role();
        $employee->role_name = "Employee";
        $employee->save();
    }
}
