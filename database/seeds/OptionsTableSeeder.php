<?php

<<<<<<< HEAD
use App\Option;
=======
use App\Models\Option;
>>>>>>> master
use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Option::class, 4)->create();

    }
}
