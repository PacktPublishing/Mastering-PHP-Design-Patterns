<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/07/2016
 * Time: 01:49
 */
class Dice
{
    /**
     * Roll the dice.
     * @return string
     */
    public function roll(): string
    {
        $rand = rand(1, 6);

        return $this->numberToRomanNumeral($rand);
    }

    /**
     * Convert a number between 1 and 6 to a Roman Numeral.
     *
     * @param int $number
     *
     * @return string
     * @throws Exception
     */
    public function numberToRomanNumeral(int $number): string
    {
        if (($number < 1) || ($number > 6)) {
            throw new Exception('Number out of range.');
        }

        switch ($number) {
            case 5:
                $randString = "V";
                break;
            case 6:
                $randString = "VI";
                break;
            default:
                $randString = str_repeat("I", $number);
                break;
        }

        return $randString;
    }
}