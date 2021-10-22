<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

const BR = '<br> <br> <br>';

$bike = new Bicycle('red',1);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo BR;


// Car
var_dump(Car::ALLOWED_ENERGIES);

$bugatti = new Car('blue', 1, 'pedals');

echo BR;

var_dump($bugatti);

echo BR;

echo $bugatti->forward();
echo '<br> Vitesse de la voiture : ' . $bugatti->getcurrentSpeed() . ' km/h' . '<br>';
echo $bugatti->brake();
echo '<br> Vitesse de la voiture : ' . $bugatti->getcurrentSpeed() . ' km/h' . '<br>';
echo $bugatti->brake();
echo '<br>' . $bugatti->start();
echo '<br>' . $bugatti->brake();

echo BR;

// Truck // https://www.youtube.com/watch?v=NLPyySN9Czw&ab_channel=UltraVomit //

$kammthaar = new Truck('white', 3, 'fuel', 10);

var_dump($kammthaar);

echo BR;

echo $kammthaar->isItFull();
echo BR;
echo $kammthaar->setLoad(8);
echo BR;
var_dump($kammthaar);
echo BR;
echo $kammthaar->isItFull();
echo BR;
echo $kammthaar->setLoad(12);
echo BR;
var_dump($kammthaar);
echo BR;

$marcel = new Truck('France3', 5, 'fuel', 2);
echo $marcel->forward();
echo '<br> Vitesse du camion : ' . $marcel->getcurrentSpeed() . ' km/h' . '<br>';
echo $marcel->brake();
echo '<br> Vitesse du camion : ' . $marcel->getcurrentSpeed() . ' km/h' . '<br>';
echo $marcel->brake();