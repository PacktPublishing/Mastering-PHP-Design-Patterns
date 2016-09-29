<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 20/06/2016
 * Time: 22:43
 */
class MeatballPasta extends Pasta
{

	public function addSauce(): bool
	{
		var_dump("Added tomato sauce");

		return true;
	}

	public function addMeat(): bool
	{
		var_dump("Added meatballs.");

		return true;

	}

	public function addCheese(): bool
	{
		var_dump("Added cheese.");

		return true;
	}

}