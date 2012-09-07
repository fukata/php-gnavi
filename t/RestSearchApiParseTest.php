<?php

require_once "PHPUnit/Autoload.php";
require_once 'gnavi/GnaviRestSearchApi.php';

class RestSearchApiParseTest extends PHPUnit_Framework_TestCase {
    public $api;

    protected function setUp() {
        $this->api = new GnaviRestSearchApi();
    }

    public function testParseOne() {
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
        $data = $this->api->_parse($content);
        $restaurant = $data->rest[0];

        $this->assertEquals($expect, $restaurant);
    }

    public function testParseMulti() {
        $expect = (object) array(
            'total_hit_count' => '663',
            'hit_per_page' => '2',
            'page_offset' => '1',
            'rest' => array(
                (object) array(
                    'id' => 'e088102',
                    'update_date' => '2012-09-06 13:55:06',
                    'name' => '赤坂 個室 本格焼酎＆ワイン居酒屋 個室ダイニング 夢萬 赤坂見附店 赤坂見附駅前　赤坂 永田町 貸切 誕生日 テラス',
                    'name_kana' => 'アカサカコシツホンカクショウチュウアンドワインイザカヤ コシツダイニングユメマン アカサカミツケテン アカサカミツケエキマエアカサカナガタチョウカシキリタンジョウビテラス',
                    'latitude' => '35.673169',
                    'longitude' => '139.739739',
                    'category' => '赤坂見附 個室 居酒屋',
                    'url' => 'http://r.gnavi.co.jp/e088102/?ak=YEjILTeLAHlBj4qO8vKDWXm3yqrVIyjkHmKEON1QQ3s%3D',
                    'url_mobile' => 'http://mobile.gnavi.co.jp/shop/e088102/?ak=YEjILTeLAHlBj4qO8vKDWXm3yqrVIyjkHmKEON1QQ3s%3D',
                    'image_url' => (object) array(
                        'shop_image1' => 'http://apicache.gnavi.co.jp/image/rest/index.php?img=e088102v.jpg&sid=e088102',
                        'shop_image2' => 'http://apicache.gnavi.co.jp/image/rest/index.php?img=e088102l.jpg&sid=e088102',
                        'qrcode' => 'http://apicache.gnavi.co.jp/image/rest/index.php?img=e088102qr.png&sid=e088102',
                    ),
                    'address' => '〒107-0052 東京都港区赤坂3-10-19 赤坂第二対翠館ビル',
                    'tel' => '03-5573-4290',
                    'fax' => '03-5573-4291',
                    'opentime' => '月～木 16:00～24:00<BR>金 16:00～05:00<BR>土・日 15:00～24:00',
                    'holiday' => '無休',
                    'access' => (object) array(
                        'line' => '地下鉄銀座線',
                        'station' => '赤坂見附駅',
                        'station_exit' => '',
                        'walk' => '1',
                        'note' => '',
                    ),
                    'pr' => (object) array(
                        'pr_short' => '日テレ「news every.」で紹介された＊氷結しゃぶしゃぶ！ 系列店の《池袋 夢の庭》でも食べられます!! 赤坂見附1分！2h飲放付コース2980円～!',
                        'pr_long' => '【 厳選素材＆季節食材コース 】
＊海鮮コース  2h飲放+7品 3,500円
＊贅沢海鮮コース  2h飲放+8品 4,000円
＊和豚もちぶた しゃぶしゃぶコース  2h飲放+8品 4,000円
＊和豚もちぶた 豪華しゃぶしゃぶコース 2h飲放+9品 5,000円
【 赤坂のくつろぎ個室空間 】
最大３０名様の宴会個室ございます。
少人数様個室・16名様対応のロフト個室が人気です。
【 全国各地から揃えた銘酒地酒 】
魔王、佐藤 黒などプレミアム焼酎や浦霞・八海山などの日本酒！
女性に人気の梅酒・果実酒も多数♪

【 別館 赤坂夢萬HANARE 】
赤坂見附駅徒歩30秒の好立地！貸切宴会は店内35名様/テラス60名様対応。
6/1～テラス席でビアガーデンがNew Open♪
＊ＢＢＱコース 2h飲放+6品 4,000円～',
                    ),
                    'code' => (object) array(
                        'areacode' => 'AREA110',
                        'areaname' => '関東',
                        'prefcode' => 'PREF13',
                        'prefname' => '東京都',
                        'categories_l' => array(
                            (object) array( 'code' => 'CTG610', 'name' => '和風居酒屋', ),
                            (object) array( 'code' => 'CTG640', 'name' => 'ダイニングバー・ビアレストラン', ),
                        ),
                        'categories_s' => array(
                            (object) array( 'code' => 'CTG611', 'name' => '和風居酒屋', ),
                            (object) array( 'code' => 'CTG643', 'name' => 'ビアレストラン', ),
                        ),
                    ),
                    'equipment' => '個室あり,二人でも個室OK,完全個室あり,半個室あり,貸切可,座敷席あり,宴会用飲み放題メニューあり,3時間以上の宴会・パーティ可,掘りごたつ席あり,座椅子あり,ソフトバンク,NTT ドコモ,au,日曜営業あり,飲み放題メニューあり,誕生日特典あり,スポーツ観戦ができる,',
                    'budget' => '3500',
                    'flags' => (object) array(
                        'mobile_site' => '1',
                        'mobile_coupon' => '1',
                        'pc_coupon' => '1',
                    ),
                ),
                (object) array(
                    'id' => 'gasy101',
                    'update_date' => '2012-08-23 02:31:32',
                    'name' => '赤坂酒場 MARO SUN  赤坂の路地裏ワインカフェ',
                    'name_kana' => 'アカサカサカバマロサン アカサカノロジウラワインカフェ',
                    'latitude' => '35.666956',
                    'longitude' => '139.737456',
                    'category' => 'ワイン酒場 赤坂',
                    'url' => 'http://r.gnavi.co.jp/gasy101/?ak=YEjILTeLAHlBj4qO8vKDWXm3yqrVIyjkHmKEON1QQ3s%3D',
                    'url_mobile' => 'http://mobile.gnavi.co.jp/shop/gasy101/?ak=YEjILTeLAHlBj4qO8vKDWXm3yqrVIyjkHmKEON1QQ3s%3D',
                    'image_url' => (object) array(
                        'shop_image1' => 'http://apicache.gnavi.co.jp/image/rest/index.php?img=gasy101v.jpg&sid=gasy101',
                        'shop_image2' => '',
                        'qrcode' => 'http://apicache.gnavi.co.jp/image/rest/index.php?img=gasy101qr.png&sid=gasy101',
                    ),
                    'address' => '〒107-0052 東京都港区赤坂6-13-19',
                    'tel' => '03-6277-6831',
                    'fax' => '',
                    'opentime' => 'ランチ 月～金 11:30～14:30<BR>ディナー 17:30～23:00',
                    'holiday' => '土・日・祝,(予約宴会の場合営業)',
                    'access' => (object) array(
                        'line' => '地下鉄千代田線',
                        'station' => '赤坂駅',
                        'station_exit' => '',
                        'walk' => '5',
                        'note' => '',
                    ),
                    'pr' => (object) array(
                        'pr_short' => '[近いうちオープン」 ☆赤坂オイルフォンデュ(串揚げ)にワイン☆ ご予約のみ対応致します。',
                        'pr_long' => 'ディナー 「近いうちオープン」
◆オイルフォンデュ(串揚げ)プラン各種 
別途メニューにて 
◆ランチ 8月 13日～19日休み 
■大好評のＲＯＯＭ ＲＥＮＴＡＬプラン■
★結婚式二次会や同窓会・企業様の歓送迎会などに',
                    ),
                    'code' => (object) array(
                        'areacode' => 'AREA110',
                        'areaname' => '関東',
                        'prefcode' => 'PREF13',
                        'prefname' => '東京都',
                        'categories_l' => array(
                            (object) array( 'code' => 'CTG620', 'name' => '洋風居酒屋', ),
                            (object) array( 'code' => 'CTG650', 'name' => 'バー・パブ', ),
                        ),
                        'categories_s' => array(
                            (object) array( 'code' => 'CTG621', 'name' => '洋風居酒屋', ),
                            (object) array( 'code' => 'CTG654', 'name' => 'ワインバー', ),
                        ),
                    ),
                    'equipment' => '個室あり,完全個室あり,貸切可,カウンター席あり,3時間以上の宴会・パーティ可,ソフトバンク,昼間の宴会・パーティ対応可,NTT ドコモ,au,飲み放題メニューあり,誕生日特典あり,ワインセラーがある,',
                    'budget' => '4000',
                    'flags' => (object) array(
                        'mobile_site' => '1',
                        'mobile_coupon' => '0',
                        'pc_coupon' => '1',
                    ),
                ),
            ),
        );

        $content = file_get_contents('./t/fixture/RestSearchAPI_multi.xml');
        $data = $this->api->_parse($content);

        $this->assertEquals($expect, $data);
    }

    public function testParseFailed() {
        $expect = (object) array(
            'error' => (object) array( 'code' => '600' ),
        );

        $content = file_get_contents('./t/fixture/RestSearchAPI_failed.xml');
        $data = $this->api->_parse($content);

        $this->assertEquals($expect, $data);
    }
}
