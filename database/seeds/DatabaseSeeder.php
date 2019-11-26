<?php

use App\Skill;
use App\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee::class, 3)->create();

        Employee::each(function ($employe) {
            factory(Skill::class, 2)->create([
                'employe_id' => $employe->id,
            ]);
        });
    }
}
