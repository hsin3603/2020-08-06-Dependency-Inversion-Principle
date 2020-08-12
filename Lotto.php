<?php

class Lotto
{
	public function sell(type $type)
	{
	    $type->bet();
	}
}

interface type
{
	public function bet();
}

class superLotto implements type
{
	public function bet()
	{
		echo '賣出威力彩。';
	}
}

class dailyCash implements type
{
	public function bet()
	{
		echo '賣出今彩539。';
	}
}


$superLotto = new superLotto();
$dailyCash = new dailyCash();
$Lotto    = new Lotto();
$Lotto->sell($superLotto);
$Lotto->sell($dailyCash);