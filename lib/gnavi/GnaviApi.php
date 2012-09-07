<?php

class GnaviApi {
    const API_BASE = "http://api.gnavi.co.jp/ver1";

    protected $apikey;
    
    public function __construct($apikey=null) {
        $this->apikey = $apikey;
    }

    protected function _parseErrorObject($xml) {
        $data = (object) array(
            'error' => (object) array(
                'code' => (string)$xml->error->code,
            ),
        );
        return $data;
    }
}
