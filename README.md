# Client for gnavi

# How to

    require_once 'gnavi/Gnavi.php';
    
    $apikey = 'Your API KEY';
    $query = array(
        'name' => 'ワイン',
    );
    $gnavi = new Gnavi($apikey);
    $data = $gnavi->doRestSearchApi($query);

# API KEY

Registration [here](http://api.gnavi.co.jp/api/use.htm).

# Licence

Apache Licence 2.0
