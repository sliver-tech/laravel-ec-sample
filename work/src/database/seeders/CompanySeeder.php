<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('companies')->insert(
        //     [
        //         'name' => 'オレンジ株式会社',
        //         'description' => 'オレンジ株式会社は、オレンジを作っています。',
        //     ], [
        //         'name' => 'アップルカンパニー',
        //         'description' => 'アップルカンパニーは、世界に羽ばたく家電を作っています。',
        //     ], [
        //         'name' => '株式会社バナナ',
        //         'description' => '株式会社バナナは、バナナを作っていましたが、今ではブドウを作っています。',
        //     ], [
        //         'name' => '株式会社グレープ',
        //         'description' => '株式会社グレープは、グレープを作っています。',
        //     ], [
        //         'name' => '株式会社メロン',
        //         'description' => '株式会社メロンは、メロンを作っています。',
        //     ], [
        //         'name' => '株式会社パイナップル',
        //         'description' => '株式会社パイナップルは、パイナップルを作っています。',
        //     ], [
        //         'name' => '株式会社キウイ',
        //         'description' => '株式会社キウイは、キウイを作っています。',
        //     ], [
        //         'name' => '株式会社マンゴー',
        //         'description' => '株式会社マンゴーは、マンゴーを作っています。',
        //     ], [
        //         'name' => '株式会社パパイヤ',
        //         'description' => '株式会社パパイヤは、パパイヤを作っています。',
        //     ], [
        //         'name' => '株式会社スイカ',
        //         'description' => '株式会社スイカは、スイカを作っています。',
        //     ], [
        //         'name' => '株式会社レモン',
        //         'description' => '株式会社レモンは、レモンを作っています。',
        //     ], [
        //         'name' => '株式会社ライム',
        //         'description' => '株式会社ライムは、ライムを作っています。',
        //     ], [
        //         'name' => '株式会社ブルーベリー',
        //         'description' => '株式会社ブルーベリーは、ブルーベリーを作っています。',
        //     ], [
        //         'name' => '株式会社ラズベリー',
        //         'description' => '株式会社ラズベリーは、ラズベリーを作っています。',
        //     ]
        // );

        Company::factory(15)->create();
    }
}
