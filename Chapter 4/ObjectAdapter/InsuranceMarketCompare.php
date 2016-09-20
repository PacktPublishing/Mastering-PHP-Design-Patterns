<?php

/**
 * User: Junade Ali
 * Date: 10/04/2016
 * Time: 10:06
 */
class InsuranceMarketCompare implements MarketCompare
{
    private $premium;

    public function __construct(float $limit, float $excess)
    {
        $this->premium = new Insurance($limit, $excess);
    }

    public function getAnnualPremium(): float
    {
        return $this->premium->annualPremium();
    }

    public function getMonthlyPremium(): float
    {
        return $this->premium->monthlyPremium();
    }
}