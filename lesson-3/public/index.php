<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(dirname(__DIR__) . '/templates');

$twig = new Environment($loader, []);

$gallery = [
    [
        'src' =>  '/public/img/1.jpg'
    ],
    [
        'src' =>  '/public/img/2.jpg'
    ],
    [
        'src' =>  '/public/img/3.jpg'
    ],
];

try {
    echo $twig->render('index.twig', [
        'title' => '3-th homework is done',
        'gallery' => $gallery
    ]);
}
catch (Exception $exception){
    var_dump($exception);
}

