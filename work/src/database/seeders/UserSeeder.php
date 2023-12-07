<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'テストユーザーその1',
            'email' => 'test1@example.com',
            'password' => Hash::make('8CzKNEvsiyU78Eb'),
        ], [
            'name' => 'テストユーザーその2',
            'email' => 'test2@example.com',
            'password' => Hash::make('8CzKNEvsiyU78Eb'),
        ], [
            'name' => 'テストユーザーその3',
            'email' => 'test3@example.com',
            'password' => Hash::make('8CzKNEvsiyU78Eb'),
        ]);
    }
}
