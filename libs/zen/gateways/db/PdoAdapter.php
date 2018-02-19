<?php
/**
 * Created by PhpStorm.
 * User: uu103087
 * Date: 2018/02/15
 * Time: 17:13
 */
declare(strict_types = 1);

namespace zen\gateways\db;
use \PDO;
use \PDOException;
use \RunTimeException;

abstract class PdoAdapter
{

    private $dsn;
    private $userName;
    private $password;
    private $options;
    private $statement;

    private $connection;

    public function __construct(
        string $host,
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
        $this->dsn = "mysql:host=$host;dbname=$databaseName;port=$port;charset=$charset";
        $this->userName = $user;
        $this->password = $password;

        $this->options = [
            PDO::ATTR_ERRMODE            => $errorMode,
            PDO::ATTR_DEFAULT_FETCH_MODE => $fetchMode,
            PDO::ATTR_EMULATE_PREPARES   => $emulatePrepares,
        ];
    }

    private function getStatement() {
        if ($this->statement === null) {
            throw new PDOException(
                "There is no PDOStatement object for use.");
        }
        return $this->statement;
    }

    private function checkConnection()
    {
        if (!isset($this->connection)) {
            $this->connection = $this->connect();
        }
    }

    private function connect(): PDO
    {
        $con = new PDO(
                    $this->dsn,
                    $this->userName,
                    $this->password,
                    []);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $con;

    }

    private function disconnect()
    {

    }

    protected function prepare($sql, array $options = [])
    {
        $this->checkConnection();
        try {
            $this->statement = $this->connection->prepare($sql,
                $options);
            return $this;
        }
        catch (PDOException $e) {
            throw new RunTimeException($e->getMessage());
        }
    }

    protected function execute(array $parameters = array()) {
        try {
            $this->getStatement()->execute($parameters);
            return $this;
        }
        catch (PDOException $e) {
            throw new RunTimeException($e->getMessage());
        }
    }

    protected function getLastInsertId($name = null) {
        $this->checkConnection();
        return $this->connection->lastInsertId($name);
    }

    public function fetchAll($fetchStyle = null, $column = 0) {

        $rows = [];

        if ($fetchStyle === null) {
            $fetchStyle = PDO::FETCH_ASSOC; //$this->fetchMode;
        }

        if($fetchStyle === PDO::FETCH_COLUMN)
        {
            $rows = $this->getStatement()->fetchAll($fetchStyle, $column);
        } elseif ($fetchStyle === PDO::FETCH_ASSOC) {
            $rows = $this->getStatement()->fetchAll($fetchStyle);
        }
        return $rows;

    }

    public function countAffectedRows() {
        try {
            return $this->getStatement()->rowCount();
        }
        catch (PDOException $e) {
            throw new RunTimeException($e->getMessage());
        }
    }
}