<?php
/**
 * User: Junade Ali
 * Date: 09/04/2016
 * Time: 19:02
 */

require_once('Insurance.php');

$quote = new Insurance(10000, 250);
echo $quote->monthlyPremium();
echo "\n";

require_once('MarketCompare.php');
require_once('InsuranceMarketCompare.php');

$quote = new InsuranceMarketCompare(10000, 250);
echo $quote->getMonthlyPremium();
echo "\n";
echo $quote->getAnnualPremium();