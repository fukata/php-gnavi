<?php
require_once __DIR__ . '/GnaviRestSearchApi.php';

class Gnavi {

    protected $apikey;

    public function __construct($apikey=null) {
        $this->apikey = $apikey;
    }

    public function doRestSearchApi($query=array()) {
        $api = new GnaviRestSearchApi($this->apikey);
        return $api->execute($query);
    }
}
