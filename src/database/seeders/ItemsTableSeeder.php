<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'name' => '腕時計',
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'image_url' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Armani+Mens+Clock.jpg',
            'category' => 'ファッション,メンズ',
            'brand' => 'カシヲ',
            'status' => '良好',
            'price' => 15000,
        ];
        DB::table('items')->insert($param);
        // HDD	5,000	バイソン	家電	高速で信頼性の高いハードディスク	https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/HDD+Hard+Disk.jpg	目立った傷や汚れなし
        $param = [
            'user_id' => 1,
            'name' => 'HDD',
            'description' => '高速で信頼性の高いハードディスク',
            'image_url' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/HDD+Hard+Disk.jpg',
            'category' => '家電',
            'brand' => 'バイソン',
            'status' => '目立った傷や汚れなし',
            'price' => 5000,
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'name' => '玉ねぎ3束',
            'description' => '新鮮な玉ねぎ3束のセット',
            'image_url' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/iLoveIMG+d.jpg',
            'category' => 'キッチン',
            'brand' => '北海道産',
            'status' => 'やや傷や汚れあり',
            'price' => 300,
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'name' => '革靴',
            'description' => 'クラシックなデザインの革靴',
            'image_url' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Leather+Shoes+Product+Photo.jpg',
            'category' => 'ファッション,メンズ',
            'brand' => 'イリーガル',
            'status' => '状態が悪い',
            'price' => 4000,
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'name' => 'ノートPC',
            'description' => '高性能なノートパソコン',
            'image_url' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Living+Room+Laptop.jpg',
            'category' => '家電,ゲーム',
            'brand' => 'キャット',
            'status' => '良好',
            'price' => 45000,
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'name' => 'マイク',
            'description' => '高音質のレコーディング用マイク',
            'image_url' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Music+Mic+4632231.jpg',
            'category' => '家電,ゲーム,スポーツ',
            'brand' => 'ウミハ',
            'status' => '目立った傷や汚れなし',
            'price' => 8000,
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'name' => 'ショルダーバッグ',
            'description' => 'おしゃれなショルダーバッグ',
            'image_url' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Purse+fashion+pocket.jpg',
            'category' => 'ファッション,レディース',
            'brand' => 'ザサウスフェイス',
            'status' => 'やや傷や汚れあり',
            'price' => 3500,
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'name' => 'タンブラー',
            'description' => '使いやすいタンブラー',
            'image_url' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Tumbler+souvenir.jpg',
            'category' => 'キッチン',
            'brand' => '像印',
            'status' => '状態が悪い',
            'price' => 500,
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'name' => 'コーヒーミル',
            'description' => '手動のコーヒーミル',
            'image_url' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Waitress+with+Coffee+Grinder.jpg',
            'category' => '家電,キッチン',
            'brand' => 'カシタ',
            'status' => '良好',
            'price' => 4000,
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'name' => 'メイクセット',
            'description' => '便利なメイクアップセット',
            'image_url' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/%E5%A4%96%E5%87%BA%E3%83%A1%E3%82%A4%E3%82%AF%E3%82%A2%E3%83%83%E3%83%95%E3%82%9A%E3%82%BB%E3%83%83%E3%83%88.jpg',
            'category' => 'ファッション,レディース,コスメ',
            'brand' => 'shu kiriimu',
            'status' => '目立った傷や汚れなし',
            'price' => 2500,
        ];
        DB::table('items')->insert($param);
    }
}
