<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'name' => '腕時計',
            'price' => 15,000,
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Armani+Mens+Clock.jpg',
            'condition' => '良好',
            //'user_id' => 1 //適切に応じて適切なユーザー　IDを設定
        ]);
        Item::create([
            'name' => 'HDD',
            'price' => 5,000,
            'description' => '高速で信頼性の高いハードディスク',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/HDD+Hard+Disk.jpg',
            'condition' => '目立った傷や汚れなし',
            //'user_id' => 2
        ]);
        Item::create([
            'name'=> '玉ねぎ３束',
            'price'=> 300,
            'description' => '新鮮な玉ねぎ３束セット',
            'image'=> 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/iLoveIMG+d.jpg',
            'condition'=> 'やや傷や汚れあり',
            //'user_id' => 3
        ]);
        Item::create([
            'name'=> '革靴',
            'price'=> 4,000,
            'description'=> 'クラシックなデザインの革靴',
            'image'=> 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Leather+Shoes+Product+Photo.jpg',
            'condition'=> '状態が悪い',
            //'user_id' => 4
        ]);
        Item::create([
            'name'=> 'ノートPC',
            'price'=> 45,000,
            'description'=> '高性能なノートパソコン',
            'image'=> 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Living+Room+Laptop.jpg',
            'condition'=> '良好',
            //'user_id' => 5
        ]);
        Item::create([
            'name'=> 'マイク',
            'price'=> 8,000,
            'description'=> '高音質のレコーディング用マイク',
            'image'=> 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Music+Mic+4632231.jpg',
            'condition' => '目立った汚れや傷なし',
            //'user_id' => 6
        ]);
        Item::create([
            'name'=> 'ショルダーバッグ',
            'price'=> 3,500,
            'description'=> 'おしゃれなショルダーバッグ',
            'image'=> 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Purse+fashion+pocket.jpg',
            'condition' => 'やや傷や汚れあり',
            //'user_id' =>7
        ]);
        Item::create([
            'name'=> 'タンブラー',
            'price'=> 500,
            'description' => '使いやすいタンブラー',
            'image'=> 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Tumbler+souvenir.jpg',
            'condition' => '状態が悪い',
            //'user_id' => 8
        ]);
        Item::create([
            'name'=> 'コーヒーミル',
            'price' => 4,000,
            'description'=> '手動のコーヒーミル',
            'image'=> 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Waitress+with+Coffee+Grinder.jpg',
            'condition'=> '良好'
            //'user_id =>9,
        ]);
        Item::create([
            'name'=> 'メイクセット',
            'price'=> 2,500,
            'description'=> '便利なメイクアップセット',
            'image'=> 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/%E5%A4%96%E5%87%BA%E3%83%A1%E3%82%A4%E3%82%AF%E3%82%A2%E3%83%83%E3%83%95%E3%82%9A%E3%82%BB%E3%83%83%E3%83%88.jpg',
            'condition'=> '目立った傷や汚れなし'
            //'user_id' =>10
        ]);

    }
}
