<?php

namespace Database\Seeders;

use App\Models\Company;
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
        Company::insert([
            // ['name' => 'デジタルマーケットプレイス株式会社', 'description' => '電子機器から生活雑貨まで幅広い商品を取り扱うECサイト運営企業。', 'status' => '非上場'],
            ['name' => 'グローバルファッションズ', 'description' => '世界中の最新ファッションアイテムを提供する、国際的なオンライン衣料品店。', 'status' => '上場'],
            // ['name' => 'ホーム＆ライフ', 'description' => '家具、インテリア、キッチン用品など、家庭用品の幅広いセレクションを提供。', 'status' => '非上場'],
            ['name' => 'ブックワールド', 'description' => 'あらゆるジャンルの書籍と電子書籍を販売するオンライン書店。', 'status' => '非上場'],
            // ['name' => 'ガジェットギャラリー', 'description' => '最新の電子ガジェットや家電製品を特化して取り扱うECサイト。', 'status' => '非上場'],
            // ['name' => 'ビューティーエクスプレス', 'description' => '化粧品、スキンケア製品、美容ツールを幅広く提供するオンラインビューティストア。', 'status' => '非上場'],
            ['name' => 'キッズパラダイス', 'description' => '子供向けのおもちゃ、教育用品、子供服を専門に扱うECサイト。', 'status' => '上場'],
            // ['name' => 'スポーツ＆フィットネスハブ', 'description' => 'スポーツ用品、フィットネス機器、アウトドア商品を豊富に取り揃えたオンラインストア。', 'status' => '非上場'],
            ['name' => 'ペットケアショップ', 'description' => 'ペットフード、用品、アクセサリーなどペット関連商品を取り扱う専門店。', 'status' => '非上場'],
            ['name' => 'グルメデリバリーサービス', 'description' => '高品質な食材、食品、飲料を提供するオンライン食品マーケット。', 'status' => '上場'],
            ['name' => 'アート＆クラフトワールド', 'description' => '手芸品、美術材料、クラフト用品を広範囲に提供するオンラインストア。', 'status' => '非上場'],
            ['name' => 'エコグッズマーケット', 'description' => '環境に優しい製品やサステナブルな生活用品を専門に販売するECサイト。', 'status' => '非上場'],
            ['name' => 'ヘルス＆ウェルネスストア', 'description' => '健康食品、サプリメント、ウェルネス製品を取り扱うオンラインヘルスショップ。', 'status' => '上場'],
            ['name' => 'トラベルギアショップ', 'description' => '旅行用品、アウトドア装備、旅行関連ガジェットを専門に販売するECサイト。', 'status' => '上場'],
            ['name' => 'ヴィンテージ＆コレクタブルズ', 'description' => 'ヴィンテージ商品、収集品、レアアイテムを専門に扱うオンラインマーケットプレイス。', 'status' => '非上場'],
            ['name' => 'ミュージック＆エンターテイメントストア', 'description' => '音楽、映画、ゲーム、エンターテイメント関連商品を提供するオンラインストア。', 'status' => '上場'],
            ['name' => 'オフィス＆ビジネスサプライ', 'description' => 'オフィス用品、ビジネス関連機器、文房具を広範囲に提供するECサイト。', 'status' => '非上場'],
            ['name' => 'ガーデン＆アウトドア', 'description' => '庭園用品、植物、アウトドア用品を取り揃えたオンラインガーデンショップ。', 'status' => '上場'],
            ['name' => 'ハイテック＆イノベーション', 'description' => '高性能なテクノロジー製品、イノベーティブなガジェットを特化して販売するECサイト。', 'status' => '上場'],
            ['name' => 'ライフスタイル＆ホームデコール', 'description' => '生活雑貨、家具、ホームデコレーションアイテムを提供するスタイリッシュなオンラインストア。', 'status' => '上場'],
        ]);
    }
}
