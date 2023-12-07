<?php

namespace Database\Seeders;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::insert([
            [
                'name' => 'ハロウィンセール【最大70%OFF!!】',
                'description' => 'ハッピーハロウィン！ハロウィンセールでは、普段はなかなか手に入らないようなレア商品を最大70%OFFで販売します！',
                'date' => Carbon::create(2023, 10, 31),
                'start_time' => Carbon::create(2023, 10, 31, 10, 0, 0),
                'end_time' => Carbon::create(2023, 10, 31, 23, 59, 59),
            ],
            [
                'name' => 'クリスマスセール【最大50%OFF!!】',
                'description' => 'メリークリスマス！クリスマスセールでは、普段はなかなか手に入らないようなレア商品を最大50%OFFで販売します！',
                'date' => Carbon::create(2023, 12, 25),
                'start_time' => Carbon::create(2023, 12, 25, 10, 0, 0),
                'end_time' => Carbon::create(2023, 12, 25, 23, 59, 59),
            ],
            [
                'name' => 'バレンタインセール【最大60%OFF!!】',
                'description' => 'ハッピーバレンタイン！バレンタインセールでは、普段はなかなか手に入らないようなレア商品を最大60%OFFで販売します！',
                'date' => Carbon::create(2024, 2, 14),
                'start_time' => Carbon::create(2024, 2, 14, 10, 0, 0),
                'end_time' => Carbon::create(2024, 2, 14, 23, 59, 59),
            ],
            [
                'name' => 'イースターセール【最大50%OFF!!】',
                'description' => 'ハッピーイースター！イースターセールでは、普段はなかなか手に入らないようなレア商品を最大50%OFFで販売します！',
                'date' => Carbon::create(2024, 4, 1),
                'start_time' => Carbon::create(2024, 4, 1, 10, 0, 0),
                'end_time' => Carbon::create(2024, 4, 1, 23, 59, 59),
            ],
            [
                'name' => 'サマーセール【最大70%OFF!!】',
                'description' => 'ハッピーサマー！サマーセールでは、普段はなかなか手に入らないようなレア商品を最大70%OFFで販売します！',
                'date' => Carbon::create(2024, 8, 1),
                'start_time' => Carbon::create(2024, 8, 1, 10, 0, 0),
                'end_time' => Carbon::create(2024, 8, 1, 23, 59, 59),
            ],
        ]);
    }
}
