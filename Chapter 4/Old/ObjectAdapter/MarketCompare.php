<?php

/**
 * User: Junade Ali
 * Date: 10/04/2016
 * Time: 09:56
 */
interface MarketCompare
{
    public function __construct(float $limit, float $excess);
    public function getAnnualPremium();
    public function getMonthlyPremium();
}