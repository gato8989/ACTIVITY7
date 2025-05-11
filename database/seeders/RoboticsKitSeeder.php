<?php

use Illuminate\Database\Seeder;
use App\Models\RoboticsKit;

class RoboticsKitSeeder extends Seeder
{
    public function run()
    {
        RoboticsKit::create([
            'name' => 'KI1',
        ]);

        RoboticsKit::create([
            'name' => 'KIT2',
        ]);

        RoboticsKit::create([
            'name' => 'KIT3',
        ]);
    }
}
