<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:31
 */

namespace web\controllers;


use viewmodels\ColumnSettingView;
use zen\gateways\db\MySqlGateway;
use zen\gateways\google\BigQueryGateway;
use zen\mvc\controllers\Secure;
use Google\Cloud\BigQuery\BigQueryClient;


class ColumnSetting extends Secure
{

    public function index(){


        $params = $this->request->getParams([]);
        if(isset($params["id"])){
            if($this->request->isAjax()){
                echo "Hello moto";
            }else {
                $id =$params["id"];

                $db = $this->getDb();
                $viewModel = new ColumnSettingView($db, $id);

                $this->response->setView('columns/settings')->with([
                    'lang' => $this->request->getParam('lang'),
                    'vm' => $viewModel
                ]);
            }
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
        if(isset($params["_method"]) && $params["_method"] == "PUT"){
            return $this->update();
        } else {
            $db = $this->getDb();
            $min = isset($params["min_vl"]) && !(empty($params["min_vl"]))?$params["min_vl"]:NULL;
            $max = isset($params["max_vl"]) && !(empty($params["max_vl"]))?$params["max_vl"]:NULL;
            $idCSetting =  $db->insert("column_settings", [
                "id_column"=> $params["id"],
                "field_label" => $params["field_label"],
                "data_type" => $params["field_data_type"],
                "min_vl" => $min,
                "max_vl" => $max
            ]);
            echo $idCSetting;
        }

    }

    public function update()
    {
        $params = $this->request->getParams([]);
        $db = $this->getDb();
        $update = $db->update("column_settings", ["id" => $params["id"]], [$params["item_name"] => $params["item_val"]] );
        echo $update;
    }
}