<?php

/**
 * User: Junade Ali
 * Date: 26/03/2016
 * Time: 20:34
 */
class ATM
{
    private $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }

    public function withdraw(float $amount): float
    {
        if ($this->reduceBalance($amount) === true) {
            return $amount;
        } else {
            throw new Exception("Couldn't withdraw money.");
        }
    }

    protected function reduceBalance(float $amount): bool
    {
        if ($amount >= $this->balance) {
            return false;
        }

        $this->balance = ($this->balance - $amount);
        return true;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}