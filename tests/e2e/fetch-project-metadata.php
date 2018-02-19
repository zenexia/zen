<?php
require __DIR__ . '/../../external-libraries/autoload.php';
use Google\Cloud\BigQuery\BigQueryClient;
use zen\gateways\google\BigQueryGateway;

# Instantiates a client
$bq = new BigQueryClient([
    'projectId' => "rhd-sugar-pj",
    "keyFilePath" => __DIR__ . "/../../conf/gcp-bigquery-key.json"
]);

$bqGateway = new BigQueryGateway($bq);

echo " Data sets count = " . $bqGateway->countDataSets() . PHP_EOL;

//print_r($bqGateway->infoDataSets());

//print_r($bqGateway->dataSets());

//print_r($bqGateway->infoTables("CAP_SAMPLE"));
//print_r($bqGateway->tables("CAP_SAMPLE"));

//print_r($bqGateway->infoColumns("CAP_SAMPLE", "sugar_profile_sample2"));
//print_r($bqGateway->columns("CAP_SAMPLE", "sugar_profile_sample2"));

print_r($bqGateway->infoColumns("JLN_SAMPLE", "J_ACCOUNT"));
print_r($bqGateway->columns("JLN_SAMPLE", "J_ACCOUNT"));