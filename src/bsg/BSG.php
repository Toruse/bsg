<?php

namespace Toruse\bsg;

use Exception;
use InvalidArgumentException;

class BSG
{
    protected $apiUrl = 'https://api.bsg.world/v1.0/';

    protected $singleParameters = [];

    protected $availableParameters = [
        'Body' => 'Body',
        'Destination' => 'Destination',
        'Originator' => 'Originator',
        'Phone' => 'Phone',
        'Reference' => 'Reference',
        'Tariff' => 'Tariff',
        'TwoWay' => 'TwoWay',
        'Validity' => 'Validity'
    ];

    protected function getFullParameterClass($parameterClass, $methodName)
    {
        if (empty($this->availableParameters[$parameterClass])) {
            throw new Exception('Method ' . $methodName . ' not defined for Analytics class');
        }

        return '\\Toruse\\bsg\\Parameters\\' . $this->availableParameters[$parameterClass];
    }

    protected function setParameter($methodName, array $methodArguments)
    {
        $parameterClass = substr($methodName, 3);

        $fullParameterClass = $this->getFullParameterClass($parameterClass, $methodName);

        $parameterObject = new $fullParameterClass($methodArguments[0]);

        if (!isset($methodArguments[0])) {
            throw new InvalidArgumentException(
                'For Analytics object, you must specify a value to be set for ' . $methodName
            );
        } else {
            $parameterObject->setValue($methodArguments[0]);
        }

        if (!isset($this->singleParameters[$parameterObject->getName()])) {
            $this->singleParameters[$parameterObject->getName()] = [];
        }

        $this->singleParameters[$parameterObject->getName()][] = $parameterObject;

        return $this;
    }

    public function __call($methodName, array $methodArguments)
    {

        if (preg_match('/^(set)(\w+)/', $methodName, $matches)) {
            return $this->setParameter($methodName, $methodArguments);
        }

        throw new Exception('Method ' . $methodName . ' not defined for Analytics class');
    }

}