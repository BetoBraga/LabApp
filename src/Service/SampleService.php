<?php

namespace LabApp\Service;

use LabApp\Domain\Sample\Sample;
use LabApp\Repository\SampleRepository;

class SampleService
{
    private $sampleRepository;

    public function __construct(SampleRepository $sampleRepository)
    {
        $this->sampleRepository = $sampleRepository;
    }

    public function createSample($id, $clientName, $analysisType)
    {
        $sample = new Sample($id, $clientName, $analysisType);
        $this->sampleRepository->save($sample);
        return $sample;
    }

    public function enrichSampleFinancialInfo($sampleId, $financialInfo)
    {
        $sample = $this->sampleRepository->getById($sampleId);
        if ($sample) {
            $sample->enrichFinancialInfo($financialInfo);
            $this->sampleRepository->save($sample);
        }
    }

    public function getAllSamples()
    {
        return $this->sampleRepository->getAll();
    }
}
