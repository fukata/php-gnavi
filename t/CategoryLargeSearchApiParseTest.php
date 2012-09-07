<?php

require_once "PHPUnit/Autoload.php";
require_once 'gnavi/GnaviCategoryLargeSearchApi.php';

class CategoryLargeSearchApiParseTest extends PHPUnit_Framework_TestCase {
    public $api;

    protected function setUp() {
        $this->api = new GnaviCategoryLargeSearchApi();
    }

    public function testParse() {
        $expect = (object) array(
            'category_l' => array(
                (object) array(
                    'category_l_code' => 'CTG100',
                    'category_l_name' => '和食',
                ),
                (object) array(
                    'category_l_code' => 'CTG200',
                    'category_l_name' => '洋食',
                ),
                (object) array(
                    'category_l_code' => 'CTG300',
                    'category_l_name' => '中華',
                ),
                (object) array(
                    'category_l_code' => 'CTG400',
                    'category_l_name' => 'アジア・焼肉・エスニック・無国籍',
                ),
                (object) array(
                    'category_l_code' => 'CTG500',
                    'category_l_name' => 'カフェ',
                ),
                (object) array(
                    'category_l_code' => 'CTG610',
                    'category_l_name' => '和風居酒屋',
                ),
                (object) array(
                    'category_l_code' => 'CTG620',
                    'category_l_name' => '洋風居酒屋',
                ),
                (object) array(
                    'category_l_code' => 'CTG630',
                    'category_l_name' => 'アジア・無国籍居酒屋',
                ),
                (object) array(
                    'category_l_code' => 'CTG640',
                    'category_l_name' => 'ダイニングバー・ビアレストラン',
                ),
                (object) array(
                    'category_l_code' => 'CTG650',
                    'category_l_name' => 'バー・パブ',
                ),
                (object) array(
                    'category_l_code' => 'CTG700',
                    'category_l_name' => 'スペース・エンターテイメント',
                ),
                (object) array(
                    'category_l_code' => 'CTG800',
                    'category_l_name' => 'ファミレス・ファーストフード',
                ),
            ),
        );

        $content = file_get_contents('./t/fixture/CategoryLargeSearchAPI.xml');
        $data = $this->api->_parse($content);

        $this->assertEquals($expect, $data);
    }
}
