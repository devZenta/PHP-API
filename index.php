<?php 

    require 'vendor/autoload.php';
    use Symfony\Component\HttpClient\HttpClient;

    $client = HttpClient::create();

    $response = $client->request('GET', "https://api.nasa.gov/planetary/apod?api_key=eSmx20HngcRpsw5jBfdVU3jQcvePfnXObw86dhUf");
    $content = $response->getContent();

    # Avec une Class Object
    $arrayDataClass = json_decode($content);
    echo $arrayDataClass->title;

    echo "<br><br>";

    # Avec un tableau
    $arrayDataArray = json_decode($content, NULL, 512, JSON_OBJECT_AS_ARRAY);
    echo $arrayDataArray['copyright'];

?>