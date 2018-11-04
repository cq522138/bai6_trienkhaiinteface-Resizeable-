<?php
/**
 * Created by PhpStorm.
 * User: vutuanlinh
 * Date: 11/2/18
 * Time: 1:36 PM
 */
interface Resizeable
{
    public function resize($percent);
}
class Rectangle implements Resizeable
{
    private $x;
    private $y;

    public function __construct($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function resize($percent)
    {
        // TODO: Implement resize() method.
        $this->x=$this->x*$percent/100;
        $this->y=$this->y*$percent/100;

    }
}

