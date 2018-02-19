<?php
/**
 * Created by PhpStorm.
 * User: uu103087
 * Date: 2018/02/16
 * Time: 11:55
 */
declare(strict_types = 1);

namespace zen\gateways\google;

use Google\Cloud\BigQuery\BigQueryClient;

class BigQueryGateway
{
    private $bqClient;

    public function __construct(BigQueryClient $bqClient)
    {
        $this->bqClient = $bqClient;
    }

    public function createDataSet(string $name)
    {
        return $this->bqClient->createDataset($name);
    }

    public function removeDataSet(string $name)
    {

    }

    public function query(string $q)
    {
        $bQuery = $this->bqClient->query($q);
        return $this->bqClient->runQuery($bQuery);
    }

    /*
     * get only list of data set names
     */
    public function dataSets():array
    {
        $dataSetNamesList = [];
        $dSets = $this->infoDataSets();
        foreach ($dSets as $dSet)
        {
            $dataSetNamesList[] = $dSet["datasetReference"]["datasetId"];
        }
        return $dataSetNamesList;
    }

    /*
     * get full info of data sets
     */
    public function infoDataSets(): array
    {
        $dataSets = [];
        $dSets = $this->bqClient->datasets();
        $dSets->rewind();
        while ($dSets->valid()){
            $dSet = $dSets->current();
            $dataSets[] = $dSet->info();
            $dSets->next();
        }
        return $dataSets;
    }

    public function countDataSets(): int
    {
        return sizeof($this->infoDataSets());
    }


    public function tables(string $dataSet):array
    {
        $tableNamesList = [];
        $tables = $this->infoTables($dataSet);
        foreach ($tables as $table)
        {
            $tableNamesList[] = $table["tableReference"]["tableId"];
        }
        return $tableNamesList;

    }


    public function infoTables(string $dataSet): array
    {
        $tables = [];
        $dTables = $this->bqClient->dataset($dataSet)->tables();
        $dTables->rewind();
        while ($dTables->valid()){
            $table = $dTables->current();
            $tables[] = $table->info();
            $dTables->next();
        }
        return $tables;
    }

    public function countTables(string $dataSet): int
    {
        return sizeof($this->infoTables($dataSet));
    }



    public function columns(string $dataSet, string $tableName):array
    {
        $columnNamesList = [];
        $tableInfo = $this->infoColumns($dataSet, $tableName);
        $columns = $tableInfo["schema"]["fields"];
        foreach ($columns as $column)
        {
            $columnNamesList[] = $column["name"];
        }
        return $columnNamesList;

    }


    public function infoColumns(string $dataSet, string $tableName): array
    {
        return $this->bqClient->dataset($dataSet)->table($tableName)->info();
    }

    public function countColumns(string $dataSet, string $tableName): int
    {
        return sizeof($this->infoColumns($dataSet, $tableName));
    }



}