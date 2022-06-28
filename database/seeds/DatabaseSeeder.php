<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
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
        // $this->call(UsersTableSeeder::class);

        // factory(Category::class, 10)->create();
        // factory(Supplier::class, 10)->create();
        factory(Product::class, 10)->create();
    }
}
