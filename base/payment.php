<?php

require_once __DIR__ . './trait/CreditCard.php';


trait Payment
{


    public function Payed()
    {
        echo 'Il prodotto è stato pagato!';
    }
}
