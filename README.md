# LabApp
Repositório dedicado ao desenvolvimento de atividade prática do curso "PHP e Clean Architecture: descomplicando arquitetura de software" 

README INFO

Anotações sobre curso da Alura - PHP e Clean Architecture: descomplicando arquitetura de software

PHP e Clean Architecture

Proposta - Resumo do sistema do 3RLab

Dominio - Regra de negócios

Repositório - ponte entre os dados e a lógica

Camadas - separa as partes do sistema, modularizando-o, por exemplo camada de entidades, camada de banco de dados, camada de services…

services - parte lógica do dominio/das regras de negocio

—-

labapp - furthermore:

Camadas (aqui é o repositório em si) - Repository/SampleRepository.php

camada de repositório, que lida com a persistência de amostras em um bdd.

Repositorios (aqui é a implementação do repositório) - Repository/SampleRepositoryImpl.php

implementa amostras usando um bdd fictício/falso - faz a interação da amostra com o bdd/sistema

Dominio - Domain/Sample.php 

entidade Sample (amostra) com informações relacionadas às amostras dos clientes.

Serviços - Services/SampleService.php
lógica/regra de negócio relacionada às amostras — interaçao entre domínio e repositório

add-ons
public/index.php - INTERFACE (implementado para visualização/como teste)

