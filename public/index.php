<?php

require_once '../vendor/autoload.php';

use LabApp\Repository\SampleRepositoryImpl;
use LabApp\Service\SampleService;

$sampleRepository = new SampleRepositoryImpl();
$sampleService = new SampleService($sampleRepository);

// cria amostra
$sample1 = $sampleService->createSample(1, "Cliente A", "Análise X");
$sample2 = $sampleService->createSample(2, "Cliente B", "Análise Y");
$sample2 = $sampleService->createSample(3, "Cliente C", "Análise Z");

// enriquece informações financeiras -- adiciona informaçao financeira a amostra de x id
$sampleService->enrichSampleFinancialInfo(1, "Boleto");
//$sampleService->enrichSampleFinancialInfo(1, "Cartão");

$samples = $sampleService->getAllSamples(); // lista todas amostras

foreach ($samples as $sample) {
    echo "ID: " . $sample->getId() . "<br>";
    echo "Cliente: " . $sample->getClientName() . "<br>";
    echo "Tipo de Análise: " . $sample->getAnalysisType() . "<br>";
    echo "Informações Financeiras: " . ($sample->getFinancialInfo() ?? "Nenhuma informação disponível") . "<br>";
    echo "<br>";
}
