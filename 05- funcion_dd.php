<?php

require_once("vendor/autoload.php");

$baseDeDatos = [
    [
        "id" => 1,
        "nombre" => "Juan Pérez",
        "edad" => 30,
        "direccion" => [
            "calle" => "123 Calle Principal",
            "ciudad" => "Ciudad A",
            "codigo_postal" => "12345"
        ],
        "pedidos" => [
            [
                "producto" => "Camiseta",
                "precio" => 20.99
            ],
            [
                "producto" => "Zapatos",
                "precio" => 79.99
            ]
        ]
    ],
    [
        "id" => 2,
        "nombre" => "María González",
        "edad" => 25,
        "direccion" => [
            "calle" => "456 Avenida Secundaria",
            "ciudad" => "Ciudad B",
            [
                "id" => 1,
                "nombre" => "Juan Pérez",
                "edad" => 30,
                "direccion" => [
                    "calle" => "123 Calle Principal",
                    "ciudad" => "Ciudad A",
                    "codigo_postal" => "12345"
                ],
                "pedidos" => [
                    [
                        "producto" => "Camiseta",
                        "precio" => 20.99
                    ],
                    [
                        "producto" => "Zapatos",
                        "precio" => 79.99
                    ]
                ]
            ],
            "codigo_postal" => "54321"
        ],
        "pedidos" => [
            [
                "producto" => "Pantalones",
                "precio" => 34.99
            ],
            [
                "producto" => "Zapatos",
                "precio" => 79.99
            ]
        ]
    ]
];

dd($baseDeDatos);
