<?php
/**
 * Created by PhpStorm.
 * User: uu103087
 * Date: 2018/02/16
 * Time: 13:38
 */

namespace viewmodels;


use zen\gateways\db\DBGatewayInterface;

class SchemaView
{
    private $db;
    private $idTable;
    private $viewType;


    public function __construct(DBGatewayInterface $db, int $id, string $type)
    {
        $this->db = $db;
        $this->idTable = $id;
        $this->viewType = $type;
    }

    public function schema():string
    {
        $columns = $this->db->select("table_columns", [], ["id_table" => $this->idTable]);
        $data = [];
        foreach ($columns as $column)
        {
            $data[$column["name"]]["type"] = $column["type"];
            $settings = $this->db->select("column_settings", [], ["id_column" => $column["id"]]);
            if(!empty($settings)){
                $setting = array_shift($settings);
                $data[$column["name"]]["label"] = $setting["field_label"];
                $data[$column["name"]]["data_type"] = $setting["data_type"];
            }
        }
        if($this->viewType == "json")
        {
            $data = json_encode($data);

        } else {
            $data = json_encode($data); // encode to yaml
        }
        return $data;
    }

    public function tableID()
    {
        return $this->idTable;
    }

}