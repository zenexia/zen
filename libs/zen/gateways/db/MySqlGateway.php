<?php
/**
 * Created by PhpStorm.
 * User: uu103087
 * Date: 2018/02/15
 * Time: 15:31
 */
declare(strict_types = 1);
namespace zen\gateways\db;

use \PDO;

class MySqlGateway extends PdoAdapter implements DBGatewayInterface
{

    private $dsn;
    private $userName;
    private $password;
    private $options;

    private $connection;

    public function __construct(string $host,
                                string $databaseName,
                                string $user,
                                string $password,
                                int $port = 3306,
                                string $charset = "utf8mb4",
                                int $errorMode = PDO::ERRMODE_EXCEPTION,
                                int $fetchMode = PDO::FETCH_ASSOC,
                                bool $emulatePrepares = false

    )
    {
        parent::__construct($host, $databaseName, $user, $password, $port, $charset, $errorMode, $fetchMode, $emulatePrepares);

    }

    public function mKali(

        string $host,
        string $databaseName,
        string $user,
        string $password,
        int $port = 3306,
        string $charset = "utf8mb4",
        string $errorMode = PDO::ERRMODE_EXCEPTION,
        string $fetchMode = PDO::FETCH_ASSOC,
        bool $emulatePrepares = false

    )
    {
        $this->dsn = "mysql:host=$host;dbname=$databaseName;port=$port;charset=$charset";
        $this->userName = $user;
        $this->password = $password;

        $this->options = [
            PDO::ATTR_ERRMODE            => $errorMode,
            PDO::ATTR_DEFAULT_FETCH_MODE => $fetchMode,
            PDO::ATTR_EMULATE_PREPARES   => $emulatePrepares,
        ];
    }


    private function connect(){

        // Create a new connection only if a connection does not exit already
        if (!isset($this->connection)) {

            try {
                $this->connection = new PDO(
                    $this->dsn,
                    $this->username,
                    $this->password,
                    $this->config["driverOptions"]);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
                $this->connection->setAttribute(
                    PDO::ATTR_EMULATE_PREPARES, false);
            } catch (PDOException $e) {
                throw new RunTimeException($e->getMessage());
            }
        }

    }

    private function disconnect()
    {

    }


    public function select(string $tableName, array $columns = [], array $params = [], int $limit = 0, array $orderBy = [], $boolOperator= "AND")
    {
        $where = [];
        if (!empty($params)) {
            foreach ($params as $col => $value) {
                unset($params[$col]);
                $params[":" . $col] = $value;
                $where[] = $col . " = :" . $col;
            }
        }

        if(empty($columns))
        {
            $columns = "*";
        } else {
            $columns = implode(",", $columns);
        }

        $sql = "SELECT $columns FROM " . $tableName;
        if(!empty($where))
        {
            $sql .= " WHERE ";
            $sql .= implode(" " . $boolOperator . " ", $where);
        }

        $this->prepare($sql)
            ->execute($params);
        return $this->fetchAll();

    }

    public function insert(string $tableName, array $data)
    {
        $cols = implode(", ", array_keys($data));
        $values = implode(", :", array_keys($data));
        foreach ($data as $col => $value) {
            unset($data[$col]);
            $data[":" . $col] = $value;
        }

        $sql = "INSERT INTO " . $tableName;
        $sql .=  " (" . $cols . ")  VALUES (:" . $values . ")";
        return (int) $this->prepare($sql)
            ->execute($data)
            ->getLastInsertId();

    }

    public function delete(string $tableName, array $params)
    {

    }

    public function update(string $tableName, array $params, array $data)
    {

    }

}