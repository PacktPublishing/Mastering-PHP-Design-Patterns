<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 21/06/2016
 * Time: 13:45
 */
interface Purchaser
{
    public function setNextPurchaser(Purchaser $nextPurchaser): bool;

    public function buy($price): bool;
}