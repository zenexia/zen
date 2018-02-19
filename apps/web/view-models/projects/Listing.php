<?php
/**
 * Created by PhpStorm.
 * User: uu103087
 * Date: 2018/02/16
 * Time: 11:16
 */

namespace viewmodels\projects;


use zen\gateways\db\DBGatewayInterface;

class Listing
{
    private $db;

    public function __construct(DBGatewayInterface $db)
    {
        $this->db = $db;
    }

    public function projects():array
    {
        $projects = $this->db->select("projects");
        if(!empty($projects)){
            foreach ($projects as $index => $project)
            {
                $dataSets = $this->db->select("data_sets", [], ["id_project" => $project["id"]]);
                $projects[$index]["data_sets"] = $dataSets;
                if(!empty($projects[$index]["data_sets"]))
                {
                    foreach ($projects[$index]["data_sets"] as $key => $dataSet)
                    {
                        $tables = $this->db->select("tables", [], ["id_dataset" => $dataSet["id"]]);
                        $projects[$index]["data_sets"][$key]["tables"] = $tables;
                        if(!empty($projects[$index]["data_sets"][$key]["tables"]))
                        {
                            foreach ($projects[$index]["data_sets"][$key]["tables"] as $i => $table)
                            {
                                $columns = $this->db->select("table_columns", [], ["id_table" => $table["id"]]);
                                $projects[$index]["data_sets"][$key]["tables"][$i]["columns"] = $columns;
                            }
                        }
                    }
                }
            }
        }

        return $projects;
    }

}