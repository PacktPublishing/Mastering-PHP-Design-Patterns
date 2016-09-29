<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/07/2016
 * Time: 01:49
 */
class LegacyDice
{
    public function roll(): string
    {
        $rand = rand(1, 6);

        // Switch statement to convert a number between 1 and 6 to a Roman Numeral.
        switch ($rand) {
            case 5:
                $randString = "V";
                break;
            case 6:
                $randString = "VI";
                break;
            default:
                $randString = str_repeat("I", $rand);
                break;
        }

        return $randString;
    }
}