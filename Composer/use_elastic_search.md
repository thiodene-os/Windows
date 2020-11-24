# Using Elasticsearch
Now we can start playing with Elasticsearch. First, let’s install the official Elasticsearch client for PHP.
## Source: 
https://www.sitepoint.com/introduction-to-elasticsearch-in-php/

## Run the command to use ElasticSearch
composer require elasticsearch/elasticsearch

## Create a PHP file using ES Client:
Next, let’s create a new php file that we will use for testing and with the following code so that we can use the Elasticsearch client.
<?php
require 'vendor/autoload.php';

$client = new Elasticsearch\Client();

?>
