<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dice
{

    function simpleroll($min, $max)
	{
		return mt_rand($min, $max);
	}
	
	function roll($config)
	{
		return mt_rand($config->min(), $config->max());
	}
	
}

class DiceConfig
{
	private $min, $max;
	
	function __construct($min, $max)
	{
		$this->min = $min;
		$this->max = $max;
	}
	
	function min()
	{
		return $this->min;
	}
	function max()
	{
		return $this->max;
	}
	
}

class Roll
{
	
}

?>