<?php

require_once "PHPUnit/Autoload.php";
require_once 'gnavi/GnaviCategorySmallSearchApi.php';

class CategorySmallSearchApiParseTest extends PHPUnit_Framework_TestCase {
    public $api;

    protected function setUp() {
        $this->api = new GnaviCategorySmallSearchApi();
    }

    public function testParse() {
        $expect = (object) array(
            'category_s' => array(
                (object) array(
                    'category_s_code' => 'CTG101',
                    'category_s_name' => '懐石',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG102',
                    'category_s_name' => '会席',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG103',
                    'category_s_name' => '割烹',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG104',
                    'category_s_name' => '小料理',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG105',
                    'category_s_name' => '定食',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG106',
                    'category_s_name' => '家庭料理',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG107',
                    'category_s_name' => '沖縄料理',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG108',
                    'category_s_name' => '郷土料理',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG109',
                    'category_s_name' => '釜飯',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG110',
                    'category_s_name' => '牛タン・たん料理',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG111',
                    'category_s_name' => '寿司',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG112',
                    'category_s_name' => '回転すし',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG113',
                    'category_s_name' => '活魚・海鮮',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG114',
                    'category_s_name' => 'かに',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG115',
                    'category_s_name' => 'ふぐ・てっちり',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG116',
                    'category_s_name' => 'すっぽん',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG117',
                    'category_s_name' => 'うなぎ',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG118',
                    'category_s_name' => 'どじょう',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG119',
                    'category_s_name' => '串揚げ・揚げ物',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG120',
                    'category_s_name' => '焼鳥',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG142',
                    'category_s_name' => '串焼き',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG121',
                    'category_s_name' => '鶏料理',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG122',
                    'category_s_name' => '炭火焼き・ろばた焼き',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG123',
                    'category_s_name' => '鉄板焼き',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG124',
                    'category_s_name' => 'すき焼き',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG125',
                    'category_s_name' => 'しゃぶしゃぶ',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG126',
                    'category_s_name' => 'ステーキ',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG127',
                    'category_s_name' => '焼肉・ホルモン',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG144',
                    'category_s_name' => '豚料理',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG128',
                    'category_s_name' => 'お好み焼き',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG129',
                    'category_s_name' => 'もんじゃ焼き',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG130',
                    'category_s_name' => 'たこ焼き',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG131',
                    'category_s_name' => '鍋料理',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG132',
                    'category_s_name' => 'ちゃんこ',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG133',
                    'category_s_name' => 'おでん',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG134',
                    'category_s_name' => '天ぷら',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG135',
                    'category_s_name' => 'とんかつ',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG136',
                    'category_s_name' => 'そば',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG137',
                    'category_s_name' => 'うどん',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG138',
                    'category_s_name' => '丼もの',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG139',
                    'category_s_name' => '創作料理',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG140',
                    'category_s_name' => '薬膳料理',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG141',
                    'category_s_name' => 'オーガニック料理',
                    'category_l_code' => 'CTG100',
                ),
                (object) array(
                    'category_s_code' => 'CTG201',
                    'category_s_name' => 'フランス料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG202',
                    'category_s_name' => 'イタリア料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG203',
                    'category_s_name' => 'スペイン料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG204',
                    'category_s_name' => 'ポルトガル料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG205',
                    'category_s_name' => 'ドイツ料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG206',
                    'category_s_name' => 'ロシア料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG207',
                    'category_s_name' => 'スイス料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG208',
                    'category_s_name' => 'ベルギー料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG209',
                    'category_s_name' => '地中海料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG210',
                    'category_s_name' => '欧風料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG211',
                    'category_s_name' => 'カリフォルニア料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG212',
                    'category_s_name' => 'アメリカ料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG213',
                    'category_s_name' => 'ケイジャン料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG214',
                    'category_s_name' => 'パシフィックリム',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG215',
                    'category_s_name' => 'ハワイアン',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG216',
                    'category_s_name' => 'フュージョン料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG217',
                    'category_s_name' => 'ステーキ',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG218',
                    'category_s_name' => 'ブッフェ・バイキング',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG219',
                    'category_s_name' => 'カジュアルレストラン',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG220',
                    'category_s_name' => '洋食屋',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG221',
                    'category_s_name' => 'シーフード',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG222',
                    'category_s_name' => 'オイスターバー',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG223',
                    'category_s_name' => 'パスタ',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG224',
                    'category_s_name' => 'ピザ',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG225',
                    'category_s_name' => 'オムレツ',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG226',
                    'category_s_name' => 'カレー',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG227',
                    'category_s_name' => 'ハンバーグ',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG228',
                    'category_s_name' => 'スープ',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG229',
                    'category_s_name' => '家庭料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG230',
                    'category_s_name' => '創作料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG231',
                    'category_s_name' => '薬膳料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG232',
                    'category_s_name' => 'オーガニック料理',
                    'category_l_code' => 'CTG200',
                ),
                (object) array(
                    'category_s_code' => 'CTG301',
                    'category_s_name' => '広東料理',
                    'category_l_code' => 'CTG300',
                ),
                (object) array(
                    'category_s_code' => 'CTG302',
                    'category_s_name' => '北京料理',
                    'category_l_code' => 'CTG300',
                ),
                (object) array(
                    'category_s_code' => 'CTG303',
                    'category_s_name' => '四川料理',
                    'category_l_code' => 'CTG300',
                ),
                (object) array(
                    'category_s_code' => 'CTG304',
                    'category_s_name' => '上海料理',
                    'category_l_code' => 'CTG300',
                ),
                (object) array(
                    'category_s_code' => 'CTG305',
                    'category_s_name' => '台湾料理',
                    'category_l_code' => 'CTG300',
                ),
                (object) array(
                    'category_s_code' => 'CTG306',
                    'category_s_name' => '香港料理',
                    'category_l_code' => 'CTG300',
                ),
                (object) array(
                    'category_s_code' => 'CTG307',
                    'category_s_name' => '中華料理',
                    'category_l_code' => 'CTG300',
                ),
                (object) array(
                    'category_s_code' => 'CTG308',
                    'category_s_name' => 'ラーメン',
                    'category_l_code' => 'CTG300',
                ),
                (object) array(
                    'category_s_code' => 'CTG309',
                    'category_s_name' => '餃子',
                    'category_l_code' => 'CTG300',
                ),
                (object) array(
                    'category_s_code' => 'CTG310',
                    'category_s_name' => '飲茶・点心・中華粥',
                    'category_l_code' => 'CTG300',
                ),
                (object) array(
                    'category_s_code' => 'CTG311',
                    'category_s_name' => '創作料理',
                    'category_l_code' => 'CTG300',
                ),
                (object) array(
                    'category_s_code' => 'CTG312',
                    'category_s_name' => '薬膳料理',
                    'category_l_code' => 'CTG300',
                ),
                (object) array(
                    'category_s_code' => 'CTG313',
                    'category_s_name' => 'オーガニック料理',
                    'category_l_code' => 'CTG300',
                ),
                (object) array(
                    'category_s_code' => 'CTG401',
                    'category_s_name' => '焼肉・ホルモン',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG421',
                    'category_s_name' => 'ジンギスカン',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG402',
                    'category_s_name' => '韓国料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG403',
                    'category_s_name' => 'タイ料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG404',
                    'category_s_name' => 'インドネシア・東南アジア料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG405',
                    'category_s_name' => 'ベトナム料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG406',
                    'category_s_name' => 'インド料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG407',
                    'category_s_name' => 'スリランカ料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG408',
                    'category_s_name' => 'ネパール料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG409',
                    'category_s_name' => '中近東・アラビア料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG410',
                    'category_s_name' => 'トルコ料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG411',
                    'category_s_name' => 'アフリカ料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG412',
                    'category_s_name' => 'エジプト料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG413',
                    'category_s_name' => 'モロッコ料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG414',
                    'category_s_name' => 'メキシコ・中米料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG415',
                    'category_s_name' => 'ブラジル・南米料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG420',
                    'category_s_name' => 'モンゴル料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG416',
                    'category_s_name' => '無国籍料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG417',
                    'category_s_name' => 'カレー',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG418',
                    'category_s_name' => '創作料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG419',
                    'category_s_name' => 'オーガニック料理',
                    'category_l_code' => 'CTG400',
                ),
                (object) array(
                    'category_s_code' => 'CTG501',
                    'category_s_name' => 'カフェ',
                    'category_l_code' => 'CTG500',
                ),
                (object) array(
                    'category_s_code' => 'CTG502',
                    'category_s_name' => '喫茶・軽食',
                    'category_l_code' => 'CTG500',
                ),
                (object) array(
                    'category_s_code' => 'CTG503',
                    'category_s_name' => '甘味',
                    'category_l_code' => 'CTG500',
                ),
                (object) array(
                    'category_s_code' => 'CTG504',
                    'category_s_name' => 'フルーツパーラー',
                    'category_l_code' => 'CTG500',
                ),
                (object) array(
                    'category_s_code' => 'CTG505',
                    'category_s_name' => 'ケーキ・スイーツ',
                    'category_l_code' => 'CTG500',
                ),
                (object) array(
                    'category_s_code' => 'CTG506',
                    'category_s_name' => 'アイスクリーム',
                    'category_l_code' => 'CTG500',
                ),
                (object) array(
                    'category_s_code' => 'CTG507',
                    'category_s_name' => 'パン・サンドウィッチ',
                    'category_l_code' => 'CTG500',
                ),
                (object) array(
                    'category_s_code' => 'CTG508',
                    'category_s_name' => 'ハンバーガー',
                    'category_l_code' => 'CTG500',
                ),
                (object) array(
                    'category_s_code' => 'CTG611',
                    'category_s_name' => '和風居酒屋',
                    'category_l_code' => 'CTG610',
                ),
                (object) array(
                    'category_s_code' => 'CTG621',
                    'category_s_name' => '洋風居酒屋',
                    'category_l_code' => 'CTG620',
                ),
                (object) array(
                    'category_s_code' => 'CTG631',
                    'category_s_name' => 'アジア・無国籍居酒屋',
                    'category_l_code' => 'CTG630',
                ),
                (object) array(
                    'category_s_code' => 'CTG641',
                    'category_s_name' => 'ダイニングバー',
                    'category_l_code' => 'CTG640',
                ),
                (object) array(
                    'category_s_code' => 'CTG642',
                    'category_s_name' => 'レストランバー',
                    'category_l_code' => 'CTG640',
                ),
                (object) array(
                    'category_s_code' => 'CTG643',
                    'category_s_name' => 'ビアレストラン',
                    'category_l_code' => 'CTG640',
                ),
                (object) array(
                    'category_s_code' => 'CTG644',
                    'category_s_name' => 'ビアホール',
                    'category_l_code' => 'CTG640',
                ),
                (object) array(
                    'category_s_code' => 'CTG651',
                    'category_s_name' => 'バー',
                    'category_l_code' => 'CTG650',
                ),
                (object) array(
                    'category_s_code' => 'CTG652',
                    'category_s_name' => 'ショットバー',
                    'category_l_code' => 'CTG650',
                ),
                (object) array(
                    'category_s_code' => 'CTG653',
                    'category_s_name' => 'アイリッシュパブ',
                    'category_l_code' => 'CTG650',
                ),
                (object) array(
                    'category_s_code' => 'CTG654',
                    'category_s_name' => 'ワインバー',
                    'category_l_code' => 'CTG650',
                ),
                (object) array(
                    'category_s_code' => 'CTG655',
                    'category_s_name' => '焼酎バー',
                    'category_l_code' => 'CTG650',
                ),
                (object) array(
                    'category_s_code' => 'CTG656',
                    'category_s_name' => '立ち飲み',
                    'category_l_code' => 'CTG650',
                ),
                (object) array(
                    'category_s_code' => 'CTG657',
                    'category_s_name' => 'ダーツバー',
                    'category_l_code' => 'CTG650',
                ),
                (object) array(
                    'category_s_code' => 'CTG658',
                    'category_s_name' => 'パブ・スナック',
                    'category_l_code' => 'CTG650',
                ),
                (object) array(
                    'category_s_code' => 'CTG659',
                    'category_s_name' => 'クラブ・ラウンジ',
                    'category_l_code' => 'CTG650',
                ),
                (object) array(
                    'category_s_code' => 'CTG701',
                    'category_s_name' => 'パーティスペース',
                    'category_l_code' => 'CTG700',
                ),
                (object) array(
                    'category_s_code' => 'CTG702',
                    'category_s_name' => 'パンケットルーム',
                    'category_l_code' => 'CTG700',
                ),
                (object) array(
                    'category_s_code' => 'CTG703',
                    'category_s_name' => '宴会場',
                    'category_l_code' => 'CTG700',
                ),
                (object) array(
                    'category_s_code' => 'CTG704',
                    'category_s_name' => 'カラオケＢＯＸ',
                    'category_l_code' => 'CTG700',
                ),
                (object) array(
                    'category_s_code' => 'CTG705',
                    'category_s_name' => 'マンガ喫茶',
                    'category_l_code' => 'CTG700',
                ),
                (object) array(
                    'category_s_code' => 'CTG706',
                    'category_s_name' => 'インターネットカフェ',
                    'category_l_code' => 'CTG700',
                ),
                (object) array(
                    'category_s_code' => 'CTG707',
                    'category_s_name' => 'テーマパークレストラン',
                    'category_l_code' => 'CTG700',
                ),
                (object) array(
                    'category_s_code' => 'CTG708',
                    'category_s_name' => 'アミューズメント',
                    'category_l_code' => 'CTG700',
                ),
                (object) array(
                    'category_s_code' => 'CTG709',
                    'category_s_name' => 'ライブハウス・クラブ(踊る)',
                    'category_l_code' => 'CTG700',
                ),
                (object) array(
                    'category_s_code' => 'CTG710',
                    'category_s_name' => 'クルージング',
                    'category_l_code' => 'CTG700',
                ),
                (object) array(
                    'category_s_code' => 'CTG711',
                    'category_s_name' => '屋形船',
                    'category_l_code' => 'CTG700',
                ),
                (object) array(
                    'category_s_code' => 'CTG801',
                    'category_s_name' => 'ファミリーレストラン',
                    'category_l_code' => 'CTG800',
                ),
                (object) array(
                    'category_s_code' => 'CTG802',
                    'category_s_name' => 'ファーストカジュアル',
                    'category_l_code' => 'CTG800',
                ),
                (object) array(
                    'category_s_code' => 'CTG803',
                    'category_s_name' => 'ファーストフード',
                    'category_l_code' => 'CTG800',
                ),
            ),
        );

        $content = file_get_contents('./t/fixture/CategorySmallSearchAPI.xml');
        $data = $this->api->_parse($content);

        $this->assertEquals($expect, $data);
    }
}
