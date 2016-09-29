<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 21/06/2016
 * Time: 14:07
 */
class AssociatePurchaser implements Purchaser
{
    public function setNextPurchaser(Purchaser $nextPurchaser): bool
    {
        $this->nextPurchaser = $nextPurchaser;
        return true;
    }

    public function buy($price): bool
    {
        if ($price < 100) {
            var_dump("Associate purchased");
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