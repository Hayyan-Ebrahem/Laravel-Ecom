<?php

use App\Option;
use App\OptionValue;
use Illuminate\Database\Seeder;

class OptionValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $size = Option::where(['name' => 'Size'])->first();
        factory(OptionValue::class)->create([
            'value' => 'small',
            'option_id' => $size->id
        ]);

        factory(OptionValue::class)->create([
            'value' => 'medium',
            'option_id' => $size->id
        ]);

        factory(OptionValue::class)->create([
            'value' => 'large',
            'option_id' => $size->id
        ]);

        $color = Option::where(['name' => 'Color'])->first();
        factory(OptionValue::class)->create([
            'value' => 'red',
            'option_id' => $color->id
        ]);

        factory(OptionValue::class)->create([
            'value' => 'blue',
            'option_id' => $color->id
        ]);

        factory(OptionValue::class)->create([
            'value' => 'green',
            'option_id' => $color->id
        ]);


    }
}
