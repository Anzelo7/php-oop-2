<?php


class CreditCard
{
    protected $number;
    protected $pin;
    protected $data;
    // protected $saldo = rand(10,  20000);

    function __construct($_number, $_pin, $_data)
    {
        $this->number = $_number;
        $this->pin = $_pin;
        $this->data = date($_data);
    }

    public function get_data()
    {
        return $this->data;
    }
}
