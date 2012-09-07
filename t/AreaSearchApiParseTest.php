<?php

require_once "PHPUnit/Autoload.php";
require_once 'gnavi/GnaviAreaSearchApi.php';

class AreaSearchApiParseTest extends PHPUnit_Framework_TestCase {
    public $api;

    protected function setUp() {
        $this->api = new GnaviAreaSearchApi();
    }

    public function testParse() {
        $expect = (object) array(
            'area' => array(
                (object) array( 'area_code' => 'AREA110', 'area_name' => '関東', ),
                (object) array( 'area_code' => 'AREA120', 'area_name' => '関西', ),
                (object) array( 'area_code' => 'AREA130', 'area_name' => '中部', ),
                (object) array( 'area_code' => 'AREA140', 'area_name' => '九州', ),
                (object) array( 'area_code' => 'AREA150', 'area_name' => '北海道', ),
                (object) array( 'area_code' => 'AREA160', 'area_name' => '東北', ),
                (object) array( 'area_code' => 'AREA170', 'area_name' => '北陸', ),
                (object) array( 'area_code' => 'AREA180', 'area_name' => '中国', ),
                (object) array( 'area_code' => 'AREA190', 'area_name' => '四国', ),
                (object) array( 'area_code' => 'AREA200', 'area_name' => '沖縄', ),
            ),
        );

        $content = file_get_contents('./t/fixture/AreaSearchAPI.xml');
        $data = $this->api->_parse($content);

        $this->assertEquals($expect, $data);
    }
}
