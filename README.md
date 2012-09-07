# Client for gnavi

# How to

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

# Support API

[API List](http://api.gnavi.co.jp/api/manual.htm)

- レストラン検索API
- エリアマスタ取得API 
- 都道府県マスタAPI 
- 大業態マスタ取得API
- 小業態マスタ取得API 

# API KEY

Registration [here](http://api.gnavi.co.jp/api/use.htm).

# Licence

Apache Licence 2.0
