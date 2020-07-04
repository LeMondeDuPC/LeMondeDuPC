<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$map = [
    71 => 62,
    69 => 61,
    68 => 60,
    67 => 59,
    66 => 58,
    65 => 57,
    64 => 56,
    62 => 54,
    61 => 53,
    60 => 52,
    59 => 51,
    58 => 50,
    57 => 47,
    56 => 48,
    54 => 49,
    52 => 20,
    51 => 36,
    50 => 46,
    49 => 45,
    47 => 43,
    48 => 44,
    45 => 41,
    46 => 42,
    44 => 40,
    42 => 37,
    41 => 39,
    40 => 38,
    38 => 35,
    37 => 34,
    36 => 32,
    35 => 33,
    33 => 31,
    32 => 29,
    31 => 30,
    29 => 28,
    27 => 26,
    25 => 25,
    24 => 24,
    23 => 23,
    22 => 22,
    21 => 21,
    20 => 19,
    19 => 18,
    18 => 17,
    17 => 16,
    16 => 14,
    15 => 15,
    13 => 13,
    12 => 12,
    11 => 11,
    10 => 10,
    9 => 9,
    8 => 8,
    7 => 7,
    6 => 6,
    5 => 5,
    4 => 4,
    3 => 3,
    2 => 2,
    1 => 1,
];

$routes = new RouteCollection();

foreach ($map as $old => $new) {
    $routes->add('product_' . $new, new Route('/article/' . $old . '/{slug}', [
        '_controller' => 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction',
        'path' => '/article/' . $new . '-{slug}',
        'permanent' => true,
    ]));
}


$routes->add('about', new Route('/divers/a-propos', [
    '_controller' => 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController::redirectAction',
    'route' => 'page_about',
    'permanent' => true,
    'keepQueryParams' => false,
]));

$routes->add('contact', new Route('/divers/contact', [
    '_controller' => 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController::redirectAction',
    'route' => 'page_contact',
    'permanent' => true,
    'keepQueryParams' => false,
]));

return $routes;