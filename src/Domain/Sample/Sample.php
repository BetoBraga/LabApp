<?php

namespace LabApp\Domain\Sample;

class Sample
{
    private $id;
    private $clientName;
    private $analysisType;
    private $financialInfo;

    public function __construct($id, $clientName, $analysisType)
    {
        $this->id = $id;
        $this->clientName = $clientName;
        $this->analysisType = $analysisType;
        $this->financialInfo = null;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getClientName()
    {
        return $this->clientName;
    }

    public function getAnalysisType()
    {
        return $this->analysisType;
    }

    public function getFinancialInfo()
    {
        return $this->financialInfo;
    }

    public function enrichFinancialInfo($financialInfo)
    {
        $this->financialInfo = $financialInfo;
    }
}
