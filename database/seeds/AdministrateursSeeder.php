<?php

use Illuminate\Database\Seeder;
use App\Models\Administrateurs;

class AdministrateursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Administrateurs::class, 50)->create();
    }
}
