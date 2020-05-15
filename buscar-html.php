<?php
    require 'vendor/autoload.php';

    use GuzzleHttp\Client;
    use Symfony\Component\DomCrawler\Crawler;
    use GabrielVieira\BuscadorDeHTML\Buscador;
    
    $client = new Client(['base_uri' => 'https://www.alura.com.br']);
    $crawler = new Crawler();

    $buscador = new Buscador($client, $crawler);
    $corpo = $buscador->buscador('/cursos-online-programacao/php');

    foreach($corpo as $value)
    {
        exibeMensagem($value);
    }