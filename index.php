<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Food.php';
require_once __DIR__ . '/Toy.php';
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Registered.php';
require_once __DIR__ . '/CreditCard.php';




$crocchette_total = new Food('b-wild', 12, 10);
$crocchette_total->deadline_year = 2025;
$crocchette_total->type = 'secco';
$crocchette_total->quantity = 10 . ' kg';

echo ($crocchette_total->name . '<br>');
var_dump($crocchette_total);

$dragon_ball = new Toy('dragon_ball', 5, 30);
$dragon_ball->brand = 'goku';
$dragon_ball->size = 'L';

echo ($dragon_ball->name . '<br>');
var_dump($dragon_ball);

$pippo = new User('cirena', 'legna');

$pippo->add_card(102030, 1567, 2023);

$pippo->buy($dragon_ball->getPrice());

$paperino = new User('mario', 'bianchi');

$paperino->add_card(102030, 128, 2025);

$paperino->iscriviti('gianni56', 'ciao');

$paperino->buy($crocchette_total->getPrice());
