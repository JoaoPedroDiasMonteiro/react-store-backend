<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::query()->insert($this->products());
    }

    public function products(): array
    {
        return [
            [
                'name' => 'Caramel Macchiato',
                'description' => 'Steamed milk with vanilla-flavored syrup is marked with espresso and topped with caramel drizzle for an oh-so-sweet finish.',
                'price' => 4.50,
                'image' => 'https://images.pexels.com/photos/5305639/pexels-photo-5305639.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Cappuccino',
                'description' => 'Dark, rich espresso lies in wait under a smoothed and stretched layer of thick milk foam.',
                'price' => 3.70,
                'image' => 'https://images.pexels.com/photos/302904/pexels-photo-302904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Latte',
                'description' => 'Our smooth signature Espresso Roast with rich steamed milk and a hint of sweetness.',
                'price' => 4.20,
                'image' => 'https://images.pexels.com/photos/3704460/pexels-photo-3704460.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Espresso',
                'description' => 'Finely ground coffee beans brewed under pressure with near-boiling water.',
                'price' => 2.50,
                'image' => 'https://images.pexels.com/photos/324028/pexels-photo-324028.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Mocha',
                'description' => 'Bittersweet mocha sauce and steamed milk are combined with rich espresso, then topped with sweetened whipped cream.',
                'price' => 4.80,
                'image' => 'https://images.pexels.com/photos/3206433/pexels-photo-3206433.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Americano',
                'description' => 'Espresso shots topped with hot water create a light layer of crema culminating in this wonderfully rich cup with depth and nuance.',
                'price' => 3.00,
                'image' => 'https://images.pexels.com/photos/4195602/pexels-photo-4195602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Flat White',
                'description' => 'Ristretto shots of espresso, with rich, creamy steamed milk and a velvety layer of foam.',
                'price' => 4.50,
                'image' => 'https://images.pexels.com/photos/3371220/pexels-photo-3371220.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Cold Brew',
                'description' => 'Slow-steeped, the Cold Brew is made from our custom blend of beans for a smoother flavor.',
                'price' => 3.50,
                'image' => 'https://images.pexels.com/photos/2067404/pexels-photo-2067404.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Frappuccino',
                'description' => 'Coffee is blended with ice, then topped with whipped cream.',
                'price' => 5.20,
                'image' => 'https://images.pexels.com/photos/8743862/pexels-photo-8743862.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Iced Tea',
                'description' => 'Iced tea shaken with flavors and lemonade over ice for a refreshing lift.',
                'price' => 3.20,
                'image' => 'https://images.pexels.com/photos/792613/pexels-photo-792613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
        ];
    }
}
