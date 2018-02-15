<?php
/**
 * Created by PhpStorm.
 * User: uu103087
 * Date: 2018/02/15
 * Time: 15:30
 */

namespace zen\gateways\db;


interface DBGatewayInterface
{
    public function select(string $tableName, array $columns, array $params, int $limit, array $orderBy);

    public function insert(string $tableName, array $data);

    public function delete(string $tableName, array $params);

    public function update(string $tableName, array $params, array $data);
}