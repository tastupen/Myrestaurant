<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major_category_names = [
            '和食', '洋食・西洋料理', '中華料理', 'アジア・エスニック', 
            'カレー', '焼肉・ホルモン', '鍋', '居酒屋・ダイニングバー', 
            'ファミレス・カフェ', 'ラーメン', 'レストラン(その他)'
        ];
        
        $washoku_category_names = [
            '寿司', '天ぷら・揚げ物', 'そば・うどん・麺類', 'うなぎ・穴子', '焼き鳥・串焼き・鳥料理',
            'すき焼き・しゃぶしゅぶ', 'おでん', 'お好み焼き・たこ焼き', '丼もの', '和食(その他)'
        ];
        
        $youshoku_category_names = [
            'ステーキ・ハンバーグ・鉄板焼き', 'パスタ・ピザ', 'ハンバーガー', '洋食・欧風料理', 'フレンチ', 'イタリアン',
            'スペイン料理', '西洋各国料理'
        ];
        
        $chuuka_category_names = [
            '中華料理', '餃子・肉まん', '中華粥', '中華麺'
        ];
        
        $ajia_category_names = [
            '韓国料理', '東南アジア料理', '南アジア料理', '西アジア料理', '中南米料理', 'アフリカ料理', 'アジア・エスニック料理(その他)'
        ];
        
        $carry_category_names = [
            'カレーライス', '欧風カレー', 'インドカレー', 'タイカレー', 'スープカレー', 'カレー(その他)'
        ];
        
        $yakiniku_category_names = [
            '焼肉・ホルモン', 'ジンギスカン'
        ];
        
        $nabe_category_names = [
            'ちゃんこ鍋', 'うどんすき', 'もつ鍋', '水炊き', 'ちりとり鍋・鉄ちゃん鍋', '中華鍋・火鍋', '韓国鍋',
            'タイスキ', '鍋(その他)'
        ];
        
        $izakaya_category_names = [
            '居酒屋', 'ダイニングバー', '居酒屋・ダイニングバー(その他)'
        ];
        
        $family_category_names = [
            'ファミレス', 'カフェ', '喫茶店', 'ファミレス・カフェ(その他)'
        ];
        
        $ramen_category_names = [
            'ラーメン'
        ];
        
        $restaurant_category_names = [
            '定食・食堂', '弁当・おにぎり', 'レストラン(その他)'
        ];
        
        foreach ($major_category_names as $major_category_name) {
            if ($major_category_name == '和食') {
                foreach ($washoku_category_names as $washoku_category_name) {
                    Category::create([
                        'name' => $washoku_category_name,
                        'description' => $washoku_category_name,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
            
            if ($major_category_name == '洋食・西洋料理') {
                foreach ($youshoku_category_names as $youshoku_category_name) {
                    Category::create([
                        'name' => $youshoku_category_name,
                        'description' => $youshoku_category_name,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
            
            if ($major_category_name == '中華料理') {
                foreach ($chuuka_category_names as $chuuka_category_name) {
                    Category::create([
                        'name' => $chuuka_category_name,
                        'description' => $chuuka_category_name,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
            
            if ($major_category_name == 'アジア・エスニック') {
                foreach ($ajia_category_names as $ajia_category_name) {
                    Category::create([
                        'name' => $ajia_category_name,
                        'description' => $ajia_category_name,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
            
            if ($major_category_name == 'カレー') {
                foreach ($carry_category_names as $carry_category_name) {
                    Category::create([
                        'name' => $carry_category_name,
                        'description' => $carry_category_name,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
            
            if ($major_category_name == '焼肉・ホルモン') {
                foreach ($yakiniku_category_names as $yakiniku_category_name) {
                    Category::create([
                        'name' => $yakiniku_category_name,
                        'description' => $yakiniku_category_name,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
            
            if ($major_category_name == '鍋') {
                foreach ($nabe_category_names as $nabe_category_name) {
                    Category::create([
                        'name' => $nabe_category_name,
                        'description' => $nabe_category_name,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
            
            if ($major_category_name == '居酒屋・ダイニングバー') {
                foreach ($izakaya_category_names as $izakaya_category_name) {
                    Category::create([
                        'name' => $izakaya_category_name,
                        'description' => $izakaya_category_name,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
            
            if ($major_category_name == 'ファミレス・カフェ') {
                foreach ($family_category_names as $family_category_name) {
                    Category::create([
                        'name' => $family_category_name,
                        'description' => $family_category_name,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
            
            if ($major_category_name == 'ラーメン') {
                foreach ($ramen_category_names as $ramen_category_name) {
                    Category::create([
                        'name' => $ramen_category_name,
                        'description' => $ramen_category_name,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
            
            if ($major_category_name == 'レストラン(その他)') {
                foreach ($restaurant_category_names as $restaurant_category_name) {
                    Category::create([
                        'name' => $restaurant_category_name,
                        'description' => $restaurant_category_name,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
        };
    }
}
