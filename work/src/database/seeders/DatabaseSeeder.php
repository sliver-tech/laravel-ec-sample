<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'テストユーザー1',
            'email' => 'test1@example.com',
            'password' => Hash::make('password'),
        ]);

        \App\Models\User::factory(10)->create();

        \App\Models\Company::factory(10)->create();

        \App\Models\Company::all()->each(function ($company) {
            \App\Models\Product::factory(10)->create([
                'company_id' => $company->id,
            ]);
        });
    }
}
