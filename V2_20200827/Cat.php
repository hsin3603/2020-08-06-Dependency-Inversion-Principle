<?php

class Cat
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
    //棲息地
    public function liveIn(Area $area)
    {
        echo '棲息在';
        $area->mark();
    }
    //餵食
    public function feedKid(Food $food)
    {
        $food->eaten();
    }
    //毛色
    public function hairColor(Color $color)
    {
        echo '毛色是';
        $color->show();
    }
    //體型
    public function body(Size $size)
    {
        $size->weight();
        $size->height();
    }
    //斑點
    public function spots(Sharp $sharp, Color $color = null)
    {
        $sharp->forming($color);
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
//體型
interface Size
{
    public function weight();
    public function height();
}
//形狀
interface Sharp
{
    public function forming(Color $color = null);
}
/* INTERFACE AREA END */

class buffalo implements Prey
{
    public function catched()
    {
        echo '水牛被抓住了。<br>';
    }
    public function escaped()
    {
        echo '水牛逃脫了！<br>';
    }
}

class giraffe implements Prey
{
    public function catched()
    {
        echo '長頸鹿被抓住了。<br>';
    }
    public function escaped()
    {
        echo '長頸鹿逃脫了！<br>';
    }
}

class porcupine implements Prey
{
    public function catched()
    {
        echo '豪豬被抓住了。<br>';
    }
    public function escaped()
    {
        echo '豪豬逃脫了！<br>';
    }
}

class mouse implements Prey
{
    public function catched()
    {
        echo '老鼠被抓住了。<br>';
    }
    public function escaped()
    {
        echo '老鼠逃脫了！<br>';
    }
}

class savanna implements Area
{
    public function mark()
    {
        echo '疏林草原。<br>';
    }
}

class forest implements Area
{
    public function mark()
    {
        echo '森林。<br>';
    }
}

class hill implements Area
{
    public function mark()
    {
        echo '山丘。<br>';
    }
}

class home implements Area
{
    public function mark()
    {
        echo '貓奴的家<br>';
    }
}

Class dark implements Color
{
    public function show()
    {
        echo '黑色的<br>';
    }
}

Class yellow implements Color
{
    public function show()
    {
        echo '金黃色的<br>';
    }
}

Class darkYellow implements Color
{
    public function show()
    {
        echo '暗金色<br>';
    }
}

Class meat implements Food
{
    public function eaten()
    {
        echo '給幼崽吃肉！<br>';
    }
}

Class fish implements Food
{
    public function eaten()
    {
        echo '給幼崽吃魚！<br>';
    }
}

Class bigOne implements Size
{
    public function weight()
    {
        echo '體型介於53-310kg<br>';
    }
    public function height()
    {
        echo '身長介於240-390cm<br>';
    }
}

Class middleOne implements Size
{
    public function weight()
    {
        echo '體型介於31-96kg<br>';
    }
    public function height()
    {
        echo '身長介於90-160cm<br>';
    }
}

Class smallOne implements Size
{
    public function weight()
    {
        echo '體型介於3-10kg<br>';
    }
    public function height()
    {
        echo '身長介於30-55cm<br>';
    }
}

class roseSharp implements Sharp
{
    public function forming(Color $color = null)
    {
        echo '斑點是玫瑰紋！<br>';
        if($color){
            $color->show();
        }
    }
}

class circleSharp implements Sharp
{
    public function forming(Color $color = null)
    {
        echo '斑點是圓圈的！<br>';
        if($color){
            $color->show();
        }
    }
}

class noneSharp implements Sharp
{
    public function forming(Color $color = null)
    {
        echo '沒有斑點！<br>';
    }
}


/*花豹*/
$Leopard = new Cat();
$savanna = new savanna();
$middleOne = new middleOne();
$darkYellow = new darkYellow();
$dark = new dark();
$rose = new roseSharp();
$buffalo = new buffalo();
$porcupine = new porcupine();
$meat = new meat();
$Leopard->liveIn($savanna);
$Leopard->body($middleOne);
$Leopard->hairColor($darkYellow);
$Leopard->spots($rose, $dark);
$Leopard->huntFail($buffalo);
$Leopard->huntSuccess($porcupine);
$Leopard->feedKid($meat);

/*家貓*/
$tinyCat = new Cat();
$home = new home();
$smallOne = new smallOne();
$dark = new dark();
$none = new noneSharp();
$mouse = new mouse();
$fish = new fish();
$tinyCat->liveIn($home);
$tinyCat->body($smallOne);
$tinyCat->hairColor($dark);
$tinyCat->spots($none);
$tinyCat->huntFail($mouse);
