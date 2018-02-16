<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:31
 */

namespace web\controllers;

use viewmodels\Columns;
use zen\gateways\db\MySqlGateway;
use zen\gateways\google\BigQueryGateway;
use zen\mvc\controllers\Secure;
use Google\Cloud\BigQuery\BigQueryClient;


class Table extends Secure
{

    public function index(){


        $params = $this->request->getParams([]);
        if(isset($params["id"])){
            $id =$params["id"];

            $db = $this->getDb();
            $viewModel = new Columns($db, $id);

            $this->response->setView('columns/index')->with([
                'lang' => $this->request->getParam('lang'),
                'vm' => $viewModel
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
        $idProject = $db->insert("projects", ["name" => $params["project_name"]]);

        # Instantiates a client
        $bqClient = new BigQueryClient([
            'projectId' => $params["project_name"],
            "keyFilePath" => __DIR__ . "/../../../conf/gcp-bigquery-key.json"
        ]);

        $bqGateway = new BigQueryGateway($bqClient);
        $dataSets = $bqGateway->dataSets();
        foreach ($dataSets as $dataSet)
        {
            $idDataSet =  $db->insert("data_sets", ["id_project"=> $idProject, "name" => $dataSet]);

            $tables = $bqGateway->tables($dataSet);
            foreach ($tables as $table)
            {
                $idTable =  $db->insert("tables", ["id_project"=> $idProject, "id_dataset" => $idDataSet, "name" => $table]);

                $columns = $bqGateway->columns($dataSet, $table);
                foreach ($columns as $column)
                {
                    $idColumn =  $db->insert("table_columns", ["id_project"=> $idProject, "id_dataset" => $idDataSet, "id_table" => $idTable, "name" => $column]);
                }
            }

        }

        echo json_encode([
            "success" => true,
            "params" => $params,
            "db-result" => 1
        ]);
    }
}