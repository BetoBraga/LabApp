<?php

namespace LabApp\Repository;

use LabApp\Domain\Sample\Sample;

class SampleRepositoryImpl implements SampleRepository
{
    // Repository
    private $samples = [];

    public function getById($id): ?Sample
    {
        return $this->samples[$id] ?? null;
    }

    public function save(Sample $sample)
    {
        $this->samples[$sample->getId()] = $sample;
    }

    public function getAll(): array
    {
        return $this->samples;
    }
}
