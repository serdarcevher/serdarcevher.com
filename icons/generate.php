<?php
require_once('init.php');

use Sahtepetrucci\SpritesGenerator\SpritesHandler;
$handler = new SpritesHandler();

$collection = [
    (object)[
        'id' => 'github',
        'name' => 'Github',
        'icon' => 'github.png'
    ],
    (object)[
        'id' => 'linkedin',
        'name' => 'LinkedIn',
        'icon' => 'linkedin.png'
    ],
    (object)[
        'id' => 'medium',
        'name' => 'Medium',
        'icon' => 'medium.png'
    ],
    (object)[
        'id' => 'twitter',
        'name' => 'Twitter',
        'icon' => 'twitter.png'
    ],
    (object)[
        'id' => 'soundcloud',
        'name' => 'SoundCloud',
        'icon' => 'soundcloud.png'
    ],
    (object)[
        'id' => 'youtube',
        'name' => 'YouTube',
        'icon' => 'youtube.png'
    ],


    (object)[
        'id' => 'off2class',
        'name' => 'Off2Class',
        'icon' => 'off2class.png'
    ],
    (object)[
        'id' => 'valizim',
        'name' => 'Valizim',
        'icon' => 'valizim.png'
    ],
    (object)[
        'id' => 'suslu-sozluk',
        'name' => 'Süslü Sözlük',
        'icon' => 'suslu.png'
    ],
    (object)[
        'id' => 'pcnet',
        'name' => 'PCNet',
        'icon' => 'pcnet.png'
    ],
    (object)[
        'id' => 'santral-sozluk',
        'name' => 'Santral Sozluk',
        'icon' => 'santral-logo.png'
    ],
    (object)[
        'id' => 'smardish',
        'name' => 'SmarDish',
        'icon' => 'smardish.png'
    ],

    (object)[
        'id' => 'bilgi',
        'name' => 'Istanbul Bilgi University',
        'icon' => 'bilgi.png'
    ],
    (object)[
        'id' => 'gsl',
        'name' => 'Galatasaray High School',
        'icon' => 'gsl.png'
    ],
];



$handler = new SpritesHandler();
$handler->name = 'items';
$handler->inputDir = 'files/individual-icons';
$handler->outputDir = 'files/sprites';
$handler->iconWidth = 32;
$handler->iconHeight = 32;
$handler->generate($collection);
?>