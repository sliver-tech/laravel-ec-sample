<?php

namespace Database\Factories;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        $statuses = ['販売', '在庫切れ', '期間限定'];

        return [
            'name' => $this->faker->word,
            'price' => $this->faker->numberBetween(100, 10000),
            'description' => $this->faker->sentence(),
            'sale_start_date' => $this->faker->date,
            'sale_end_date' => Carbon::parse($this->faker->date)->addYears(30)->toDateString(),
            'status' => $statuses[array_rand($statuses)],
            'company_id' => \App\Models\Company::factory(),
        ];
    }
}