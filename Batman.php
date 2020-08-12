<?php

class Batman
{
	public function drive(transportation $transportation)
	{
	    $transportation->rollOut();
	}
}

interface transportation
{
	public function rollOut();
}

class batmobile implements transportation
{
	public function rollOut()
	{
		echo '開蝙蝠車。';
	}
}

class batcycle implements transportation
{
	public function rollOut()
	{
		echo '騎蝙蝠機車。';
	}
}

class batplane implements transportation
{
	public function rollOut()
	{
		echo '開蝙蝠飛機。';
	}
}


$batmobile = new batmobile();
$batcycle = new batcycle();
$batplane = new batplane();
$Batman   = new Batman();
$Batman->drive($batmobile);
$Batman->drive($batcycle);
$Batman->drive($batplane);