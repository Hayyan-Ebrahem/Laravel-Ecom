<?php

<<<<<<< HEAD
use App\Brand;
=======
use App\Models\Brand;
>>>>>>> master
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Brand::class, 10)->create();

    }
}
