<?php
require_once __DIR__ . '/CreditCard.php';

class Registered extends User
{
    public $user;
    protected $password;



    function __construct($_user, $_password)
    {
        $this->user = $_user;
        $this->password = $_password;
    }

    public function Pay()
    {
        $Card = new CreditCard("Pippo", "pippo@email.it", 80);
    }
}
