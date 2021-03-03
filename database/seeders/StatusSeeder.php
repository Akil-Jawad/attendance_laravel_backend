<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $active = new Status();
        $active->status_name = "Active";
        $active->save();

        $banned = new Status();
        $banned->status_name = "Banned";
        $banned->save();
    }
}
