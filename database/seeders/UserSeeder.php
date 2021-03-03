<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('role_name','Admin')->first();
        $empRole = Role::where('role_name','Employee')->first();

        $activeStatus = Status::where('status_name','Active')->first();

        $adminUser1 = User::create([
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=> Hash::make('administrator')
        ]);

        $adminUser2 = User::create([
            'name'=>'Admin2',
            'email'=>'admin2@admin.com',
            'password'=> Hash::make('administrator2')
        ]);

        $empUser1 = User::create([
            'name'=>'Emp',
            'email'=>'emp@Employee.com',
            'password'=> Hash::make('employee')
        ]);

        $empUser2 = User::create([
            'name'=>'Emp2',
            'email'=>'emp2@Employee.com',
            'password'=> Hash::make('employee2')
        ]);

        $adminUser1->roles()->attach($adminRole);
        $adminUser1->statuses()->attach($activeStatus);

        $adminUser2->roles()->attach($adminRole);
        $adminUser2->statuses()->attach($activeStatus);

        $empUser1->roles()->attach($empRole);
        $empUser1->statuses()->attach($activeStatus);

        $empUser2->roles()->attach($empRole);
        $empUser2->statuses()->attach($activeStatus);

    }
}
