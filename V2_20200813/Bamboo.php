<?php

class Bamboo
{
	public function become(thing $thing)
	{
	    $thing->name();
	}
}

interface thing
{
	public function name();
}

class desk implements thing
{
	public function name()
	{
		echo '變成桌子。';
	}
}

class cup implements thing
{
	public function name()
	{
		echo '變成杯子。';
	}
}


$desk 	= new desk();
$cup  	= new cup();
$Bamboo	= new Bamboo();
$Bamboo->become($desk);
$Bamboo->become($cup);