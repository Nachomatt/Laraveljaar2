<?php

use Illuminate\Database\Seeder;

class ShoppingcartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Shoppingcart::class ,50)->create();
    }
}
