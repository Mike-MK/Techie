<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'name' => 'Laptop 1',
            'slug' => 'laptop-1',
            'details' => '15 inch, 1TB SSD 16GB RAM',
            'price' => '149999',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quasi rerum delectus eos vitae quisquam corrupti nisi dolorum quae! Et id alias explicabo laboriosam debitis esse architecto minus perferendis reiciendis.'
        ]);
        Product::create([
            'name' => 'Laptop 2',
            'slug' => 'laptop-2',
            'details' => '15 inch, 1TB SSD 16GB RAM',
            'price' => '139999',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quasi rerum delectus eos vitae quisquam corrupti nisi dolorum quae! Et id alias explicabo laboriosam debitis esse architecto minus perferendis reiciendis.'
        ]);
        Product::create([
            'name' => 'Laptop 3',
            'slug' => 'laptop-3',
            'details' => '15 inch, 1TB SSD 16GB RAM',
            'price' => '179999',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quasi rerum delectus eos vitae quisquam corrupti nisi dolorum quae! Et id alias explicabo laboriosam debitis esse architecto minus perferendis reiciendis.'
        ]);
        Product::create([
            'name' => 'Laptop 4',
            'slug' => 'laptop-4',
            'details' => '15 inch, 1TB SSD 16GB RAM',
            'price' => '189999',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quasi rerum delectus eos vitae quisquam corrupti nisi dolorum quae! Et id alias explicabo laboriosam debitis esse architecto minus perferendis reiciendis.'
        ]);
        Product::create([
            'name' => 'Laptop 5',
            'slug' => 'laptop-5',
            'details' => '15 inch, 1TB SSD 16GB RAM',
            'price' => '149999',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quasi rerum delectus eos vitae quisquam corrupti nisi dolorum quae! Et id alias explicabo laboriosam debitis esse architecto minus perferendis reiciendis.'
        ]);
        Product::create([
            'name' => 'Laptop 6',
            'slug' => 'laptop-6',
            'details' => '15 inch, 1TB SSD 16GB RAM',
            'price' => '149999',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quasi rerum delectus eos vitae quisquam corrupti nisi dolorum quae! Et id alias explicabo laboriosam debitis esse architecto minus perferendis reiciendis.'
        ]);
        Product::create([
            'name' => 'Laptop 7',
            'slug' => 'laptop-7',
            'details' => '15 inch, 1TB SSD 16GB RAM',
            'price' => '119999',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quasi rerum delectus eos vitae quisquam corrupti nisi dolorum quae! Et id alias explicabo laboriosam debitis esse architecto minus perferendis reiciendis.'
        ]);
        Product::create([
            'name' => 'Laptop 8',
            'slug' => 'laptop-8',
            'details' => '15 inch, 1TB SSD 16GB RAM',
            'price' => '149999',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quasi rerum delectus eos vitae quisquam corrupti nisi dolorum quae! Et id alias explicabo laboriosam debitis esse architecto minus perferendis reiciendis.'
        ]);
        Product::create([
            'name' => 'Laptop 9',
            'slug' => 'laptop-9',
            'details' => '15 inch, 1TB SSD 16GB RAM',
            'price' => '149999',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quasi rerum delectus eos vitae quisquam corrupti nisi dolorum quae! Et id alias explicabo laboriosam debitis esse architecto minus perferendis reiciendis.'
        ]);

    }
}
