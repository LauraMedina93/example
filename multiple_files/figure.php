<?php
namespace Graphics;

abstract class Figure{
    public static $canvas;
    public abstract function draw();
    
    public static function createCanvas($width, $height){
        self::$canvas=  imagecreatetruecolor($width, $height);
    }
    public static function renderCanvas()
    {
        imagepng(self::$canvas);
        imagedestroy(self::$canvas);
    }
}


?>
