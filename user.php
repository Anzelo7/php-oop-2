<?php
require_once __DIR__ . '/CreditCard.php';

class User
{
    public $name;
    public $surname;
    public $registered = false;
    public $card;
    public $iscritto;

    function __construct($_name, $_surname)
    {
        $this->name = $_name;
        $this->surname = $_surname;
    }

    public function iscriviti($_user, $_password)
    {
        $this->iscritto = new Registered($_user, $_password);
        $this->registered = true;
    }
    public function add_card($_number, $_pin, $_expire)

    {
        $this->card = new CreditCard($_number, $_pin, $_expire);
    }

    public function buy($_price)
    {

        if ($this->card->get_data() < 2022) {
            echo 'carta scaduta'();
        } else {
            if ($this->registered)
                echo 'sei registrato il prezzo è ' . $_price * 0.2 . '<br>';
            else
                echo 'non sei registrato il prezzo è ' . $_price . '<br>';
        }
    }
}
