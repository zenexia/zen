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


class Project extends Secure
{

    public function index(){

        $params = $this->request->getParams([]);
        if(isset($params["id"])){
            return $this->show($params["id"]);
        } else {
            $db = $this->getDb();
            $projects = $db->select("projects");
            for ($i=0; $i<sizeof($projects); $i++){
                $project = $projects[$i];
                $dSets = $db->select("data_sets", [], ["id_project" => $project["id"]]);
                $projects[$i]["dsets"] = $dSets;
            }

            $this->response->setView('projects/list')->with([
                'lang' => $this->request->getParam('lang'),
                'projects' => $projects
            ]);
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

        # Instantiates a client
        $bigQuery = new BigQueryClient([
            'projectId' => $params["project_name"],
            "keyFilePath" => __DIR__ . "/../../../conf/gcp-bigquery-key.json"
        ]);


        $ds = $bigQuery->datasets();
        $ds->rewind();
        while ($ds->valid()){
            $d = $ds->current();
            $d = $d->info();
            $db->insert("data_sets", ["id_project"=> $result, "name" => $d["datasetReference"]["datasetId"]]);
            $ds->next();
        }


        echo json_encode([
            "success" => true,
            "params" => $params,
            "db-result" => $result
        ]);
    }
}