<?php

class Painter
{
	public function draw(tool $tool)
	{
	    $tool->painting();
	}
}

interface tool
{
	public function painting();
}

class watercolor implements tool
{
	public function painting()
	{
		echo '水彩。';
	}
}

class pastel implements tool
{
	public function painting()
	{
		echo '油畫。';
	}
}


$watercolor = new watercolor();
$pastel  	= new pastel();
$Painter	= new Painter();
$Painter->draw($watercolor);
$Painter->draw($pastel);