<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:31
 */

namespace web\controllers;

use zen\mvc\controllers\Secure;
use Google\Cloud\BigQuery\BigQueryClient;


class MetaData extends Secure
{

    public function index(){

        # Your Google Cloud Platform project ID
        $projectId = 'rhd-sugar-pj';

        # Instantiates a client
        $bigQuery = new BigQueryClient([
            'projectId' => $projectId,
             "keyFilePath" => __DIR__ . "/../../../conf/gcp-bigquery-key.json"
        ]);

        $tQ = $bigQuery->dataset("CAP_SAMPLE")->table("sugar_profile_sample2")->info();
        echo json_encode($tQ);
        /*
        echo "<pre>";
        print_r($tQ);
        $this->response->setView('metadata/index')->with([
            'lang' => $this->request->getParam('lang'),
            'data' => $tQ
        ]);
        */
    }
    public function before(){

    }
}