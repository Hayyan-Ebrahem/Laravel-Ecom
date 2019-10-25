<?php

use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Database\Seeder;

class AttributeValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $size = Attribute::where(['name' => 'Size'])->first();
        factory(AttributeValue::class)->create([
            'value' => 'small',
            // 'attribute_id' => $size->id
        ]);

        factory(AttributeValue::class)->create([
            'value' => 'medium',
            // 'attribute_id' => $size->id
        ]);

        factory(AttributeValue::class)->create([
            'value' => 'large',
            // 'attribute_id' => $size->id
        ]);

        $color = Attribute::where(['name' => 'Color'])->first();
        factory(AttributeValue::class)->create([
            'value' => 'red',
            // 'attribute_id' => $color->id
        ]);

        factory(AttributeValue::class)->create([
            'value' => 'blue',
            // 'attribute_id' => $color->id
        ]);

        factory(AttributeValue::class)->create([
            'value' => 'green',
            // 'attribute_id' => $color->id
        ]);


    }
}
