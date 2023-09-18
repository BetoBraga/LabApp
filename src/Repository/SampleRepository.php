<?php

namespace LabApp\Repository;

use LabApp\Domain\Sample\Sample;

interface SampleRepository
{

    // Camada do repository
    public function getById($id): ?Sample;
    public function save(Sample $sample);
    public function getAll(): array;
}
