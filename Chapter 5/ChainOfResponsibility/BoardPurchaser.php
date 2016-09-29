<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 21/06/2016
 * Time: 15:11
 */
class BoardPurchaser implements Purchaser
{
    public function setNextPurchaser(Purchaser $nextPurchaser): bool
    {
        $this->nextPurchaser = $nextPurchaser;
        return true;
    }

    public function buy($price): bool
    {
        if ($price < 100000) {
            var_dump("Board purchased");
            return true;
        } else {
            if (isset($this->nextPurchaser)) {
                return $this->nextPurchaser->buy($price);
            } else {
                var_dump("Could not buy");
                return false;
            }
        }
    }
}