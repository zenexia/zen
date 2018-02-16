<?php
/**
 * Created by PhpStorm.
 *
 *
 * check how to get bigquery project info
 *
 * User: uu103087
 * Date: 2018/02/16
 * Time: 12:06
 */
require __DIR__ . '/../../external-libraries/autoload.php';
use Google\Cloud\BigQuery\BigQueryClient;

# Instantiates a client
$bq = new BigQueryClient([
    'projectId' => "rhd-sugar-pj",
    "keyFilePath" => __DIR__ . "/../../conf/gcp-bigquery-key.json"
]);

$dSets = $bq->datasets();
$dSets->rewind();
while ($dSets->valid()){
    $dSet = $dSets->current();
    print_r($dSet->info());
    $dSets->next();
}


echo "info of a dataset tables" . PHP_EOL;

$ts = $bq->dataset("CAP_SAMPLE")->tables();
$ts->rewind();
while ($ts->valid()){
    $t = $ts->current();
    print_r($t->info());
    $ts->next();
}