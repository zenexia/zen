<?php
/**
 * Created by PhpStorm.
 * User: uu103087
 * Date: 2018/02/16
 * Time: 11:52
 */

namespace nucleus;


use zen\gateways\google\BigQueryGatewayInterface;

class Project implements ProjectInterface
{
    private $bqGateway;

    public function __construct(BigQueryGatewayInterface $bigQueryGateway)
    {
        $this->bqGateway = $bigQueryGateway;
    }

}