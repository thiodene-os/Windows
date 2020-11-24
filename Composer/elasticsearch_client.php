<?php

//echo $_SERVER["DOCUMENT_ROOT"];

require '../../../../vendor/autoload.php';

//$client = new Elasticsearch\Client();


use Elasticsearch\ClientBuilder;
$client = ClientBuilder::create()->setHosts(['127.0.0.1:9200'])->build();


$params = array();
$params['body']  = array(
  'name' => 'Ash Ketchum',
  'age' => 10,
  'badges' => 8
);

$params['index'] = 'pokemon';
$params['type']  = 'pokemon_trainer';

$result = $client->index($params);

?>
