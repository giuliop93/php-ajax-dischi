<?php

$arrayDiscs = [
    [
        'title' => "Viva la vida or Death and All His Friends",
        'author' => "Coldplay",
        'album' => "./img/Coldplay.jpg",
        'year' => "2008"
    ],
    [
        'title' => "Lost on You",
        'author' => "Laura Pergolizzi",
        'album' => "./img/lp.jpg",
        'year' => "2016"
    ],    [
        'title' => "In Time: The Best of R.E.M.",
        'author' => "R.E.M.",
        'album' => "./img/REM.jpg",
        'year' => "2003"
    ],    [
        'title' => "Tutto L'amore Che Conta Davvero",
        'author' => "Mango",
        'album' => "./img/mango.jpg",
        'year' => "2019"
    ],    [
        'title' => "Greatest Hits",
        'author' => "Robbie Williams",
        'album' => "./img/robbie.jpg",
        'year' => "2004"
    ],    [
        'title' => "Vasco Modena Park",
        'author' => "Vasco Rossi",
        'album' => "https://images-na.ssl-images-amazon.com/images/I/61MYqNeYw5L._AC_SX425_.jpg",
        'year' => "2017"
    ],    [
        'title' => "Bohemian Rhapsody: The Original Soundtrack",
        'author' => "Queen",
        'album' => "./img/queen.jpg",
        'year' => "2018"
    ],    [
        'title' => "Se L'amore è Amore",
        'author' => "Antonello Venditti",
        'album' => "./img/venditti.jpg",
        'year' => "2000"
    ],    [
        'title' => "The Best of Depeche Mode",
        'author' => "Depeche Mode",
        'album' => "./img/depeche.jpg",
        'year' => "2006"
    ],    [
        'title' => "TuttoMax",
        'author' => "Max Pezzali",
        'album' => "./img/tuttomax.jpg",
        'year' => "2005"
    ],    [
        'title' => "The Platinum Collection",
        'author' => "Matia Bazar",
        'album' => "./img/matia.jpg",
        'year' => "2007"
    ],
    
];

header("Content-Type: application/json");

echo json_encode($arrayDiscs);