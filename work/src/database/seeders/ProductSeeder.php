<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productListData = [
            // デジタルマーケットプレイス株式会社
            [
                [
                    'name' => 'スマートLED電球',
                    'price' => 1500,
                    'description' => '調光可能で色温度変更も自由自在のスマートLED電球。',
                    'sale_start_date' => '2023-01-15',
                    'sale_end_date' => '2023-12-31',
                    'status' => '販売中',
                ],
                [
                    'name' => 'マルチファンクションブレンダー',
                    'price' => 8000,
                    'description' => 'スムージーからスープまで、さまざまな料理に対応する多機能ブレンダー。',
                    'sale_start_date' => '2022-11-01',
                    'sale_end_date' => '2023-10-31',
                    'status' => '在庫切れ',
                ],
                [
                    'name' => 'エコフレンドリーヨガマット',
                    'price' => 3500,
                    'description' => '環境に優しい素材を使用した、滑りにくいヨガマット。',
                    'sale_start_date' => '2023-05-10',
                    'sale_end_date' => '2024-05-09',
                    'status' => '販売中',
                ],
                [
                    'name' => 'ポータブルソーラーチャージャー',
                    'price' => 4500,
                    'description' => 'アウトドアや災害時に便利な、持ち運び可能なソーラーパネル式充電器。',
                    'sale_start_date' => '2023-08-20',
                    'sale_end_date' => '2024-08-19',
                    'status' => '期間限定',
                ],
                [
                    'name' => 'ワイヤレスイヤホン',
                    'price' => 6000,
                    'description' => '最新技術を搭載した高音質のワイヤレスイヤホン。',
                    'sale_start_date' => '2023-02-15',
                    'sale_end_date' => '2023-12-15',
                    'status' => '在庫切れ',
                ],
            ],
            // グローバルファッションズ
            [
                [
                    'name' => 'エレガントシルクドレス',
                    'price' => 12000,
                    'description' => '高品質のシルクを使用した、パーティーに最適なエレガントなドレス。',
                    'sale_start_date' => '2023-03-01',
                    'sale_end_date' => '2024-03-01',
                    'status' => '販売中',
                ],
                [
                    'name' => 'レザージャケット',
                    'price' => 15000,
                    'description' => '上質なレザーを使用した、スタイリッシュなデザインのジャケット。',
                    'sale_start_date' => '2023-09-10',
                    'sale_end_date' => '2024-09-09',
                    'status' => '期間限定',
                ],
                [
                    'name' => 'ビーガンレザーサンダル',
                    'price' => 4800,
                    'description' => '環境に優しいビーガンレザーを使用した快適なサンダル。',
                    'sale_start_date' => '2023-06-20',
                    'sale_end_date' => '2024-06-19',
                    'status' => '販売中',
                ],
                [
                    'name' => 'カジュアルデニムパンツ',
                    'price' => 7500,
                    'description' => 'どんなトップスにも合わせやすい、快適なカジュアルデニム。',
                    'sale_start_date' => '2022-12-05',
                    'sale_end_date' => '2023-12-04',
                    'status' => '在庫切れ',
                ],
                [
                    'name' => 'スマートウォッチ',
                    'price' => 20000,
                    'description' => '機能性とファッション性を兼ね備えた、高性能スマートウォッチ。',
                    'sale_start_date' => '2023-04-15',
                    'sale_end_date' => '2024-04-14',
                    'status' => '販売中',
                ],
            ],
            // ホーム＆ライフ
            [
                [
                    'name' => 'モダンデザインソファ',
                    'price' => 45000,
                    'description' => 'スタイリッシュなデザインと快適な座り心地を兼ね備えたソファ。',
                    'sale_start_date' => '2023-07-10',
                    'sale_end_date' => '2024-07-09',
                    'status' => '販売中',
                ],
                [
                    'name' => 'アンティーク風ウォールクロック',
                    'price' => 9800,
                    'description' => 'レトロな雰囲気を演出する、アンティーク風の壁掛け時計。',
                    'sale_start_date' => '2023-01-20',
                    'sale_end_date' => '2023-12-20',
                    'status' => '期間限定',
                ],
                [
                    'name' => 'セラミックキッチンナイフセット',
                    'price' => 12000,
                    'description' => '高品質セラミック製で切れ味抜群のキッチンナイフセット。',
                    'sale_start_date' => '2022-10-15',
                    'sale_end_date' => '2023-10-14',
                    'status' => '在庫切れ',
                ],
                [
                    'name' => 'デザイナーズテーブルランプ',
                    'price' => 6500,
                    'description' => '独特のデザインが特徴の、モダンなテーブルランプ。',
                    'sale_start_date' => '2023-08-05',
                    'sale_end_date' => '2024-08-04',
                    'status' => '販売中',
                ],
                [
                    'name' => 'エコフレンドリー洗剤',
                    'price' => 1200,
                    'description' => '環境に優しい成分で作られた、効果的な洗浄力を持つ洗剤。',
                    'sale_start_date' => '2023-11-01',
                    'sale_end_date' => '2024-11-01',
                    'status' => '販売中',
                ],
            ],
            // ブックワールド
            [
                [
                    'name' => '時間の旅人',
                    'price' => 1800,
                    'description' => '時間を超えた冒険を描いた、魅力的なファンタジー小説。',
                    'sale_start_date' => '2023-01-10',
                    'sale_end_date' => '2023-12-31',
                    'status' => '販売中',
                ],
                [
                    'name' => '心理学入門',
                    'price' => 2400,
                    'description' => '初心者向けに心理学の基礎をわかりやすく解説した教科書。',
                    'sale_start_date' => '2022-11-15',
                    'sale_end_date' => '2023-11-14',
                    'status' => '在庫切れ',
                ],
                [
                    'name' => '世界の美味しいレシピ100',
                    'price' => 2800,
                    'description' => '世界中の美味しい料理を自宅で楽しめるレシピ集。',
                    'sale_start_date' => '2023-05-01',
                    'sale_end_date' => '2024-04-30',
                    'status' => '期間限定',
                ],
                [
                    'name' => 'デジタルマーケティング最前線',
                    'price' => 3200,
                    'description' => '最新のデジタルマーケティング手法を紹介する専門書。',
                    'sale_start_date' => '2023-07-20',
                    'sale_end_date' => '2024-07-19',
                    'status' => '販売中',
                ],
                [
                    'name' => '子供と読みたい絵本集',
                    'price' => 2000,
                    'description' => '子供の想像力を育む、カラフルで楽しい絵本のコレクション。',
                    'sale_start_date' => '2023-02-15',
                    'sale_end_date' => '2023-12-15',
                    'status' => '在庫切れ',
                ],
            ],
            // ガジェットギャラリー
            [
                [
                    'name' => 'ワイヤレスイヤホン Pro',
                    'price' => 9800,
                    'description' => '高音質とノイズキャンセリング機能を備えたワイヤレスイヤホン。',
                    'sale_start_date' => '2023-03-01',
                    'sale_end_date' => '2024-03-01',
                    'status' => '販売中',
                ],
                [
                    'name' => 'スマートウォッチ Fitness',
                    'price' => 12000,
                    'description' => '健康管理機能とスポーツトラッキングを兼ね備えたスマートウォッチ。',
                    'sale_start_date' => '2023-04-10',
                    'sale_end_date' => '2024-04-09',
                    'status' => '期間限定',
                ],
                [
                    'name' => 'ポータブルBluetoothスピーカー',
                    'price' => 6500,
                    'description' => '高品質なサウンドと長時間バッテリー寿命を備えたコンパクトスピーカー。',
                    'sale_start_date' => '2023-06-15',
                    'sale_end_date' => '2024-06-14',
                    'status' => '販売中',
                ],
                [
                    'name' => '4Kアクションカメラ',
                    'price' => 18000,
                    'description' => '小型ながら4K画質で録画可能な高性能アクションカメラ。',
                    'sale_start_date' => '2022-12-05',
                    'sale_end_date' => '2023-12-04',
                    'status' => '在庫切れ',
                ],
                [
                    'name' => 'スマートホームセキュリティシステム',
                    'price' => 25000,
                    'description' => '自宅を守るための先進的なセキュリティシステム。',
                    'sale_start_date' => '2023-08-01',
                    'sale_end_date' => '2024-07-31',
                    'status' => '販売中',
                ],
            ],
            // ビューティーエクスプレス
            [
                [
                    'name' => 'ラグジュアリースキンケアセット',
                    'price' => 15000,
                    'description' => '高品質な成分を使用した、肌にやさしいスキンケアセット。',
                    'sale_start_date' => '2023-05-01',
                    'sale_end_date' => '2024-04-30',
                    'status' => '販売中',
                ],
                [
                    'name' => 'オーガニックヘアケアシャンプー',
                    'price' => 3800,
                    'description' => '自然由来の成分で髪に潤いを与えるオーガニックシャンプー。',
                    'sale_start_date' => '2023-07-20',
                    'sale_end_date' => '2024-07-19',
                    'status' => '期間限定',
                ],
                [
                    'name' => 'ナチュラルメイクアップキット',
                    'price' => 6500,
                    'description' => '日常使いに最適なナチュラルなメイクアップ製品のセット。',
                    'sale_start_date' => '2023-02-15',
                    'sale_end_date' => '2023-12-15',
                    'status' => '在庫切れ',
                ],
                [
                    'name' => 'アンチエイジングフェイスクリーム',
                    'price' => 8000,
                    'description' => '年齢サインに効果的な高濃度アンチエイジングクリーム。',
                    'sale_start_date' => '2023-09-01',
                    'sale_end_date' => '2024-08-31',
                    'status' => '販売中',
                ],
                [
                    'name' => 'サロン品質ヘアドライヤー',
                    'price' => 12000,
                    'description' => 'プロ仕様のパワフルで髪に優しいヘアドライヤー。',
                    'sale_start_date' => '2023-10-10',
                    'sale_end_date' => '2024-10-09',
                    'status' => '販売中',
                ],
            ],
            // キッズパラダイス
            [
                [
                    'name' => '魔法の学習タブレット',
                    'price' => 4500,
                    'description' => '子供向けの教育アプリがプリインストールされた、楽しく学べるタブレット。',
                    'sale_start_date' => '2023-01-10',
                    'sale_end_date' => '2023-12-31',
                    'status' => '販売中',
                ],
                [
                    'name' => 'ダイナソー冒険セット',
                    'price' => 3000,
                    'description' => '恐竜のフィギュアとプレイマットがセットになった、想像力を刺激するおもちゃ。',
                    'sale_start_date' => '2023-03-15',
                    'sale_end_date' => '2024-03-14',
                    'status' => '販売中',
                ],
                [
                    'name' => 'お絵かきデジタルボード',
                    'price' => 2500,
                    'description' => 'デジタルスクリーンで描いた絵を保存できる、クリエイティブなお絵かきボード。',
                    'sale_start_date' => '2023-05-20',
                    'sale_end_date' => '2023-12-20',
                    'status' => '在庫切れ',
                ],
                [
                    'name' => 'カラフルな知育パズル',
                    'price' => 1800,
                    'description' => '色と形を学ぶのに適した、安全な素材で作られた子供向けパズル。',
                    'sale_start_date' => '2023-02-01',
                    'sale_end_date' => '2023-12-01',
                    'status' => '期間限定',
                ],
                [
                    'name' => '星空プロジェクター',
                    'price' => 3800,
                    'description' => '室内に美しい星空を映し出す、子供部屋に最適なプロジェクター。',
                    'sale_start_date' => '2023-07-10',
                    'sale_end_date' => '2024-07-09',
                    'status' => '販売中',
                ],
            ],
            // スポーツ＆フィットネスハブ
            [
                [
                    'name' => 'ハイパフォーマンスランニングシューズ',
                    'price' => 12000,
                    'description' => '高いクッション性と耐久性を兼ね備えたランニング用シューズ。',
                    'sale_start_date' => '2023-01-20',
                    'sale_end_date' => '2023-12-31',
                    'status' => '販売中',
                ],
                [
                    'name' => 'オールインワンフィットネスキット',
                    'price' => 8500,
                    'description' => '自宅でのトレーニングに最適な、多機能フィットネスセット。',
                    'sale_start_date' => '2023-04-15',
                    'sale_end_date' => '2024-04-14',
                    'status' => '販売中',
                ],
                [
                    'name' => 'スマートヨガマット',
                    'price' => 5000,
                    'description' => 'ヨガのポーズをアシストするガイドライン付きの高機能ヨガマット。',
                    'sale_start_date' => '2023-03-01',
                    'sale_end_date' => '2023-12-01',
                    'status' => '在庫切れ',
                ],
                [
                    'name' => 'マルチスポーツGPSウォッチ',
                    'price' => 20000,
                    'description' => 'さまざまなスポーツのトラッキングに対応した高性能GPSウォッチ。',
                    'sale_start_date' => '2023-05-10',
                    'sale_end_date' => '2024-05-09',
                    'status' => '期間限定',
                ],
                [
                    'name' => '折りたたみ式エクササイズバイク',
                    'price' => 15000,
                    'description' => '省スペースで使用できる、高品質の折りたたみ式エクササイズバイク。',
                    'sale_start_date' => '2023-06-20',
                    'sale_end_date' => '2024-06-19',
                    'status' => '販売中',
                ],
            ],
            // ペットケアショップ
            [
                [
                    'name' => 'グルメキャットフード',
                    'price' => 2800,
                    'description' => 'プレミアムな素材を使用した、猫用の高品質なキャットフード。',
                    'sale_start_date' => '2023-02-10',
                    'sale_end_date' => '2023-12-10',
                    'status' => '販売中',
                ],
                [
                    'name' => 'しつけ用インテリジェントおもちゃ',
                    'price' => 4500,
                    'description' => '犬の訓練と遊びを兼ね備えた、インタラクティブなペットおもちゃ。',
                    'sale_start_date' => '2023-04-01',
                    'sale_end_date' => '2024-04-01',
                    'status' => '販売中',
                ],
                [
                    'name' => '快適ペットベッド',
                    'price' => 6000,
                    'description' => '高品質な素材で作られた、ペットが快適に過ごせるベッド。',
                    'sale_start_date' => '2023-05-15',
                    'sale_end_date' => '2024-05-14',
                    'status' => '在庫切れ',
                ],
                [
                    'name' => 'ペット用ウォーターファウンテン',
                    'price' => 3800,
                    'description' => '常に新鮮な水を提供する、自動給水機能付きのペット用ウォーターファウンテン。',
                    'sale_start_date' => '2023-06-10',
                    'sale_end_date' => '2023-12-10',
                    'status' => '期間限定',
                ],
                [
                    'name' => 'スタイリッシュペットカラー',
                    'price' => 1500,
                    'description' => 'おしゃれで快適な素材のペット用カラー。',
                    'sale_start_date' => '2023-07-20',
                    'sale_end_date' => '2024-07-19',
                    'status' => '販売中',
                ],
            ],
            // グルメデリバリーサービス
            [
                [
                    'name' => 'プレミアムオーガニック野菜セット',
                    'price' => 3000,
                    'description' => '農薬を使わずに栽培された、新鮮なオーガニック野菜のセット。',
                    'sale_start_date' => '2023-04-01',
                    'sale_end_date' => '2023-12-31',
                    'status' => '販売中',
                ],
                [
                    'name' => 'ワールドグルメスナックボックス',
                    'price' => 2500,
                    'description' => '世界各国の珍しいスナックを詰め合わせた、グルメなスナックボックス。',
                    'sale_start_date' => '2023-05-10',
                    'sale_end_date' => '2023-12-10',
                    'status' => '期間限定',
                ],
                [
                    'name' => 'アーティザン手作りチーズキット',
                    'price' => 4800,
                    'description' => '自宅で簡単にチーズ作りが楽しめる、手作りチーズキット。',
                    'sale_start_date' => '2023-06-15',
                    'sale_end_date' => '2024-06-14',
                    'status' => '販売中',
                ],
            ],
            // アート＆クラフトワールド
            [
                [
                    'name' => 'プロフェッショナル水彩ペイントセット',
                    'price' => 5000,
                    'description' => '高品質な顔料を使用した、プロ仕様の水彩絵の具セット。',
                    'sale_start_date' => '2023-07-01',
                    'sale_end_date' => '2023-12-31',
                    'status' => '販売中',
                ],
                [
                    'name' => 'DIYクラフトキット - 鳥の巣箱',
                    'price' => 3200,
                    'description' => '自分で組み立てることができる、環境に優しい素材の鳥の巣箱キット。',
                    'sale_start_date' => '2023-08-20',
                    'sale_end_date' => '2024-08-19',
                    'status' => '期間限定',
                ],
            ],
            // エコグッズマーケット
            [
                [
                    'name' => 'サステナブル竹製ストロー',
                    'price' => 1000,
                    'description' => '繰り返し使用可能で環境に優しい、竹製のストローセット。',
                    'sale_start_date' => '2023-09-01',
                    'sale_end_date' => '2023-12-31',
                    'status' => '販売中',
                ],
                [
                    'name' => 'エコフレンドリー洗濯ボール',
                    'price' => 2800,
                    'description' => '洗剤を使わずに洗濯できる、再利用可能な洗濯ボール。',
                    'sale_start_date' => '2023-10-10',
                    'sale_end_date' => '2024-10-09',
                    'status' => '在庫切れ',
                ],
            ],
            // ヘルス＆ウェルネスストア
            [
                [
                    'name' => 'オーガニックスーパーフードブレンド',
                    'price' => 4000,
                    'description' => '複数のスーパーフードをブレンドした、栄養豊富な健康食品。',
                    'sale_start_date' => '2023-01-01',
                    'sale_end_date' => '2023-12-31',
                    'status' => '販売中',
                ],
            ],
            // トラベルギアショップ
            [
                [
                    'name' => 'マルチファンクション旅行バッグ',
                    'price' => 8500,
                    'description' => '多機能ポケットと耐久性のある素材で作られた、旅行に最適なバッグ。',
                    'sale_start_date' => '2023-03-15',
                    'sale_end_date' => '2024-03-14',
                    'status' => '販売中',
                ],
            ],
            // ヴィンテージ＆コレクタブルズ
            [
                [
                    'name' => 'レトロデザインの壁掛け時計',
                    'price' => 12000,
                    'description' => '1950年代のデザインを再現した、ユニークな壁掛け時計。',
                    'sale_start_date' => '2023-05-01',
                    'sale_end_date' => '2023-12-31',
                    'status' => '期間限定',
                ],
            ],
            // ミュージック＆エンターテイメントストア
            [
                [
                    'name' => 'プレミアムサウンドヘッドフォン',
                    'price' => 15000,
                    'description' => '高品質なサウンドと快適な装着感を提供する、オーディオ愛好家向けのヘッドフォン。',
                    'sale_start_date' => '2023-06-10',
                    'sale_end_date' => '2024-06-09',
                    'status' => '販売中',
                ],
            ],
            // オフィス＆ビジネスサプライ
            [
                [
                    'name' => 'エルゴノミックデザインのオフィスチェア',
                    'price' => 20000,
                    'description' => '長時間のデスクワークでも快適に過ごせる、人間工学に基づいたオフィスチェア。',
                    'sale_start_date' => '2023-07-20',
                    'sale_end_date' => '2024-07-19',
                    'status' => '販売中',
                ],
            ],
            // ガーデン＆アウトドア
            [
                [
                    'name' => '自動灌漑スマートガーデンキット',
                    'price' => 10000,
                    'description' => 'スマホで操作可能な自動灌漑システムを備えた、家庭用のガーデニングキット。',
                    'sale_start_date' => '2023-03-01',
                    'sale_end_date' => '2023-12-31',
                    'status' => '販売中',
                ],
                [
                    'name' => '折りたたみ式キャンプチェア',
                    'price' => 4500,
                    'description' => '軽量かつ耐久性のある素材で作られた、快適な折りたたみ式キャンプチェア。',
                    'sale_start_date' => '2023-04-15',
                    'sale_end_date' => '2023-12-15',
                    'status' => '期間限定',
                ],
                [
                    'name' => 'ソーラー式ガーデンライト',
                    'price' => 3000,
                    'description' => '太陽光で充電される、美しい光を放つソーラー式のガーデンライト。',
                    'sale_start_date' => '2023-05-10',
                    'sale_end_date' => '2024-05-09',
                    'status' => '販売中',
                ],
            ],
            // ハイテック＆イノベーション
            [
                [
                    'name' => 'スマートホームアシスタント',
                    'price' => 15000,
                    'description' => '音声制御で家電を操作できる、AI搭載のスマートホームデバイス。',
                    'sale_start_date' => '2023-06-01',
                    'sale_end_date' => '2023-12-31',
                    'status' => '販売中',
                ],
                [
                    'name' => 'ワイヤレス充電パッド',
                    'price' => 2800,
                    'description' => '複数のデバイスを同時に充電できる、高効率のワイヤレス充電パッド。',
                    'sale_start_date' => '2023-07-20',
                    'sale_end_date' => '2024-07-19',
                    'status' => '期間限定',
                ],
                [
                    'name' => 'VRゲームセット',
                    'price' => 30000,
                    'description' => '高品質なグラフィックと没入感のある体験を提供する、最新型のVRゲームセット。',
                    'sale_start_date' => '2023-08-15',
                    'sale_end_date' => '2024-08-14',
                    'status' => '在庫切れ',
                ],
            ],
            // ライフスタイル＆ホームデコール
            [
                [
                    'name' => 'モダンアート壁掛け',
                    'price' => 6500,
                    'description' => 'コンテンポラリーなデザインのアート作品で、どんな部屋も洗練された雰囲気に。',
                    'sale_start_date' => '2023-09-01',
                    'sale_end_date' => '2023-12-31',
                    'status' => '販売中',
                ],
                [
                    'name' => 'スカンジナビアスタイルのソファ',
                    'price' => 45000,
                    'description' => '快適な座り心地とミニマリストデザインを兼ね備えた、スタイリッシュなソファ。',
                    'sale_start_date' => '2023-10-10',
                    'sale_end_date' => '2024-10-09',
                    'status' => '期間限定',
                ],
                [
                    'name' => 'アロマセラピー拡散器',
                    'price' => 3800,
                    'description' => 'エッセンシャルオイルを使用して、リラックスできる香りを広げるスタイリッシュな拡散器。',
                    'sale_start_date' => '2023-11-15',
                    'sale_end_date' => '2024-11-14',
                    'status' => '販売中',
                ],
            ],
        ];

        Company::all()->each(function ($company) use ($productListData) {
            foreach ($productListData[$company->id - 1] as $product) {
                $company->products()->create($product);
            }
        });
    }
}
