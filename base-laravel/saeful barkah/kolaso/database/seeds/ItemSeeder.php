<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kemeja = Item::create([
            'name' => 'kemeja'
        ]);
        $jersey = Item::create([
            'name' => 'jersey'
        ]);
        $jacket = Item::create([
            'name' => 'jacket'
        ]);
        $tshirt = Item::create([
            'name' => 'tshirt'
        ]);
    }
}
