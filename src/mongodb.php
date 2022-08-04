<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require('vendor/autoload.php');

$client = new MongoDB\Client(
    'mongodb://root:root@mongo:27017'
);

$db = $client->selectDatabase('test');

$collection = $db->selectCollection('test');

$doc = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId( '62e8e4dbb0a8838563b746e5')]);

var_dump($doc);
