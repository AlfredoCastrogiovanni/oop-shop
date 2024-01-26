<?php

    require_once __DIR__ . '/../models/Product.php';
    require_once __DIR__ . '/../models/Category.php';
    require_once __DIR__ . '/../models/Food.php';
    require_once __DIR__ . '/../models/Toy.php';
    require_once __DIR__ . '/../models/Kennel.php';

    $categories = [
        new Category('Fruit'),
        new Category('Toys'),
        new Category('Pet Product')
    ];

    $products = [
        new Food('Red Apple', 'A juicy red apple', 'https://media.istockphoto.com/id/184276818/it/foto/mela-rossa.jpg?s=612x612&w=0&k=20&c=q2UpVCD6mW7efFwQb1OKgFX3OyX46HMBGOB7Pf3UprQ=', 5, $categories[0], 52, 3),
        new Toy('Bear Peluche', 'A giant bear peluche', 'https://media.istockphoto.com/id/909772478/it/foto/orsacchiotto-marrone-isolato-di-fronte-a-uno-sfondo-bianco.jpg?s=612x612&w=0&k=20&c=27Y8oqLRFAxk4_W4WJgJ29MBUYCWG3ooZvVsk-eD3GU=', 50, $categories[1], 'Polyester'),
        new Kennel('Red Kennel', 'A comfy red kennel', 'https://media.istockphoto.com/id/859828982/it/foto/fronte-casa-per-cani.jpg?s=612x612&w=0&k=20&c=-pAVf7K0sD3e6sJIkfnXWxZlkGj6UNyIklbo9mBmbOY=', 60, $categories[2], 'Big')
    ];