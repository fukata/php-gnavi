<?php

require_once "PHPUnit/Autoload.php";
require_once 'gnavi/Gnavi.php';

class ParseTest extends PHPUnit_Framework_TestCase {
    public $gnavi;

    protected function setUp() {
        $this->gnavi = new Gnavi();
    }

    public function testRestSearchAPIParseOne() {
        $expect = (object) array(
            'id' => 'g045600',
            'update_date' => '2012-08-09 22:34:38',
            'name' => '表参道ワイン食堂 Den',
            'name_kana' => 'オモテサンドウワインショクドウ デン',
            'latitude' => '35.662211',
            'longitude' => '139.715619',
            'category' => 'ワイン食堂',
            'url' => 'http://r.gnavi.co.jp/g045600/?ak=YEjILTeLAHlBj4qO8vKDWXm3yqrVIyjkHmKEON1QQ3s%3D',
            'url_mobile' => 'http://mobile.gnavi.co.jp/shop/g045600/?ak=YEjILTeLAHlBj4qO8vKDWXm3yqrVIyjkHmKEON1QQ3s%3D',
            'image_url' => (object) array(
                'shop_image1' => 'http://apicache.gnavi.co.jp/image/rest/index.php?img=g045600v.jpg&sid=g045600',
                'shop_image2' => 'http://apicache.gnavi.co.jp/image/rest/index.php?img=g045600l.jpg&sid=g045600',
                'qrcode' => 'http://apicache.gnavi.co.jp/image/rest/index.php?img=g045600qr.png&sid=g045600',
            ),
            'address' => '〒107-0061 東京都港区北青山3-5-23 吉川表参道ビル1F',
            'tel' => '03-3796-8350',
            'fax' => '03-3796-8340',
            'opentime' => '月～木 17:00～24:00<BR>金・土・祝前 17:00～02:00<BR>日・祝 17:00～23:00',
            'holiday' => '年中無休',
            'access' => (object) array(
                'line' => '銀座線',
                'station' => '表参道駅',
                'station_exit' => 'Ａ３出口',
                'walk' => '1',
                'note' => '',
            ),
            'pr' => (object) array(
                'pr_short' => '美味しいもの満載の沖縄フェア開始♪ 気の合う仲間とワイワイ飲みましょう☆',
                'pr_long' => '表参道Ａ３出口より徒歩３０秒!!
当店ご来店の際は必ず、お腹を空かせて来て下さい!!!!
自慢の料理は全て自家製＆ボリューム満点で、パンも毎日焼いています！
料理長イチオシのお肉料理は特に必見！
ワインもグラス￥４８０～、ボトル￥２４００～で沢山の種類を御用意！
絶対！満足！感動！を約束いたします。',
            ),
            'code' => (object) array(
                'areacode' => 'AREA110',
                'areaname' => '関東',
                'prefcode' => 'PREF13',
                'prefname' => '東京都',
                'categories_l' => array(
                    (object) array( 'code' => 'CTG200', 'name' => '洋食', ),
                    (object) array( 'code' => 'CTG620', 'name' => '洋風居酒屋', ),
                ),
                'categories_s' => array(
                    (object) array( 'code' => 'CTG202', 'name' => 'イタリア料理', ),
                    (object) array( 'code' => 'CTG621', 'name' => '洋風居酒屋', ),
                ),
            ),
            'equipment' => '貸切可,宴会用飲み放題メニューあり,カウンター席あり,喫煙席あり,3時間以上の宴会・パーティ可,ソフトバンク,昼間の宴会・パーティ対応可,NTT ドコモ,au,23時以降も食事ができる,日曜営業あり,誕生日特典あり,ワインセラーがある,マイク利用可,プロジェクター・スクリーンあり,',
            'budget' => '3500',
            'flags' => (object) array(
                'mobile_site' => '1',
                'mobile_coupon' => '0',
                'pc_coupon' => '0',
            ),
        );

        $content = file_get_contents('./t/fixture/RestSearchAPI_one.xml');
        $data = $this->gnavi->_parseRestSearchAPI($content);
        $restaurant = $data->rest[0];

        $this->assertEquals($expect, $restaurant);
    }

    public function testRestSearchAPIParseMulti() {
        $content = file_get_contents('./t/fixture/RestSearchAPI_multi.xml');
        $data = $this->gnavi->_parseRestSearchAPI($content);
    }
}
