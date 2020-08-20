<?php

class Lion
{
    //獵食
    public function huntSuccess(Prey $prey)
    {
        $prey->catched();
    }
    public function huntFail(Prey $prey)
    {
        $prey->escaped();
    }
    //領地
    public function kingdom(Area $area)
    {
        $area->mark();
    }
    public function loseKingdom(Area $area)
    {
        $area->cancel();
    }
    //餵食
    public function feedKid(Food $food)
    {
        $food->eaten();
    }
    //鬃毛
    public function hairColor(Color $color)
    {
        $color->show();
    }
}


/* INTERFACE AREA START */
//獵物
interface Prey
{
    public function catched();
    public function escaped();
}
//地區
interface Area
{
    public function mark();
    public function cancel();
}
//食物
interface Food
{
    public function eaten();
}
//髮色
interface Color
{
    public function show();
}
/* INTERFACE AREA END */

class buffalo implements Prey, Food
{
    public function catched()
    {
        echo '水牛被獅子抓住了。<br>';
    }
    public function escaped()
    {
        echo '水牛逃脫了！<br>';
    }
    public function eaten()
    {
        echo '水牛被小獅子吃了。<br>';
    }
}

class giraffe implements Prey
{
    public function catched()
    {
        echo '長頸鹿被獅子抓住了。<br>';
    }
    public function escaped()
    {
        echo '長頸鹿逃脫了！<br>';
    }
    public function eaten()
    {
        echo '長頸鹿被小獅子吃了。<br>';
    }
}

class hill implements Area
{
    public function mark()
    {
        echo '山丘被獅子標記了。<br>';
    }
    public function cancel()
    {
        echo '山丘被奪走了！<br>';
    }
}

class cliff implements Area
{
    public function mark()
    {
        echo '懸崖被獅子標記了。<br>';
    }
    public function cancel()
    {
        echo '懸崖被奪走了！<br>';
    }
}

Class dark implements Color
{
    public function show()
    {
        echo '鬃毛是黑色的！<br>';
    }
}

Class yellow implements Color
{
    public function show()
    {
        echo '鬃毛是金黃色的！<br>';
    }
}

Class darkYellow implements Color
{
    public function show()
    {
        echo '鬃毛是暗金色的！<br>';
    }
}


$Lion = new Lion();
$buffalo = new buffalo();
$giraffe = new giraffe();
$hill = new hill();
$cliff = new cliff();
$dark = new dark();
$yellow = new yellow();
$darkYellow = new darkYellow();

// store is on !
$Lion->hairColor($yellow);
$Lion->huntSuccess($buffalo);
$Lion->feedKid($buffalo);
$Lion->huntFail($giraffe);
$Lion->kingdom($hill);
$Lion->kingdom($cliff);
$Lion->loseKingdom($hill);

