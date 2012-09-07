<?php
require_once __DIR__ . '/GnaviRestSearchApi.php';
require_once __DIR__ . '/GnaviAreaSearchApi.php';
require_once __DIR__ . '/GnaviPrefSearchApi.php';
require_once __DIR__ . '/GnaviCategoryLargeSearchApi.php';
require_once __DIR__ . '/GnaviCategorySmallSearchApi.php';

class Gnavi {

    protected $apikey;

    public function __construct($apikey=null) {
        $this->apikey = $apikey;
    }

    public function doRestSearchApi($query=array()) {
        $api = new GnaviRestSearchApi($this->apikey);
        return $api->execute($query);
    }

    public function doAreaSearchApi($query=array()) {
        $api = new GnaviAreaSearchApi($this->apikey);
        return $api->execute($query);
    }

    public function doPrefSearchApi($query=array()) {
        $api = new GnaviPrefSearchApi($this->apikey);
        return $api->execute($query);
    }

    public function doCategoryLargeSearchApi($query=array()) {
        $api = new GnaviCategoryLargeSearchApi($this->apikey);
        return $api->execute($query);
    }

    public function doCategorySmallSearchApi($query=array()) {
        $api = new GnaviCategorySmallSearchApi($this->apikey);
        return $api->execute($query);
    }

}
