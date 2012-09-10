# Client for gnavi

## How to

    require_once 'gnavi/Gnavi.php';
    
    $apikey = 'Your API KEY';
    $query = array(
        'name' => 'ワイン',
    );
    $gnavi = new Gnavi($apikey);
    $data = $gnavi->doRestSearchApi($query);

    if ( isset( $data->error ) ) {
        // error
    } else {
        // success
        foreach ( $data->rest as $r ) {
            print("name: " . $r->name);
        }
    }

## Support API

[API List](http://api.gnavi.co.jp/api/manual.htm)

- レストラン検索API
- エリアマスタ取得API 
- 都道府県マスタAPI 
- 大業態マスタ取得API
- 小業態マスタ取得API 

## API KEY

Registration [here](http://api.gnavi.co.jp/api/use.htm).

## ChangeLog

### v0.0.2 Mon Sep 10 23:37:34 JST 2012
- 下記項目についてstringではなく、intでキャストするように修正
 - total_hit_count 
 - hit_per_page 
 - page_offset 

### v0.0.1 Fri Sep  7 14:54:55 JST 2012

- 初回リリース 

## Licence

Apache Licence 2.0
