<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:31
 */

namespace web\controllers;

use zen\gateways\db\MySqlGateway;
use zen\mvc\controllers\Secure;
use Google\Cloud\BigQuery\BigQueryClient;


class DataSet extends Secure
{

    public function index(){

        echo "<pre>";
        $params = $this->request->getParams([]);
        if(isset($params["id"])){
            $id = $params["id"];
            $db = $this->getDb();
            $projects = $db->select("projects", [], ["id", $params["id"]]);
            $project = array_shift($projects);

            # Instantiates a client
            $bigQuery = new BigQueryClient([
                'projectId' => $project["name"],
                "keyFilePath" => __DIR__ . "/../../../conf/gcp-bigquery-key.json"
            ]);


            $ds = $bigQuery->datasets();
            $ds->rewind();
            while ($ds->valid()){
                $d = $ds->current();
                $tables = $d->tables();
                $tables->rewind();
                while ($tables->valid())
                {
                    $t= $tables->current()->info();
                    print_r($t);
                    $tables->next();
                }
                $d = $d->info();





                $db->insert("data_sets", ["id_project"=> $id, "name" => $d["datasetReference"]["datasetId"]]);
                $ds->next();
            }

            $ds->rewind();
            $this->response->setView('data-sets/list')->with([
                'lang' => $this->request->getParam('lang'),
                'ds' => $ds
            ]);
        }else{
            echo "Lotani";
        }

    }


    private function getDb()
    {
        return new MySqlGateway("localhost", "gcp", "root", "Sugar-2018");
    }

    public function show(int $id)
    {
        $db = $this->getDb();

        $dataSets = $db->select("data_sets", [], ["id_project" => $id]);

        $this->response->setView('projects/detail')->with([
            'lang' => $this->request->getParam('lang'),
            'dataSets' => $dataSets,
            'id' => $id
        ]);

    }
    public function store(){

        $params = $this->request->getParams([]);

        $db = $this->getDb();
        $result = $db->insert("projects", ["name" => $params["project_name"]]);

        echo json_encode([
            "success" => true,
            "params" => $params,
            "db-result" => $result
        ]);
    }
}