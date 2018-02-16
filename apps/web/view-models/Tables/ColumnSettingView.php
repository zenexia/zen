<?php
/**
 * Created by PhpStorm.
 * User: uu103087
 * Date: 2018/02/16
 * Time: 13:38
 */

namespace viewmodels;


use zen\gateways\db\DBGatewayInterface;

class ColumnSettingView
{
    private $db;
    private $idColumn;

    public function __construct(DBGatewayInterface $db, int $id)
    {
        $this->db = $db;
        $this->idColumn = $id;
    }

    public function settings(): ?array
    {
        $settings = $this->db->select("column_settings", [], ["id_column" => $this->idColumn]);
        return array_shift($settings);
    }
    public function id()
    {
        return $this->idColumn;
    }

    public function columnType()
    {
        $columns = $this->db->select("table_columns", [], ["id" => $this->idColumn]);
        $column = array_shift($columns);
        return $column["type"];
    }

}