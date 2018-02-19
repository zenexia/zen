<?php
/**
 * Created by PhpStorm.
 * User: uu103087
 * Date: 2018/02/16
 * Time: 13:38
 */

namespace viewmodels;


use zen\gateways\db\DBGatewayInterface;

class Columns
{
    private $db;
    private $idTable;

    public function __construct(DBGatewayInterface $db, int $id)
    {
        $this->db = $db;
        $this->idTable = $id;
    }

    public function columns():array
    {
        $columns = $this->db->select("table_columns", [], ["id_table" => $this->idTable]);
        return $columns;
    }

    public function tableID()
    {
        return $this->idTable;
    }

}