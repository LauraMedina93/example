<?php
namespace Graphics;

class Rectangle extends Figure
{
    public function draw() {
        $color = imagecolorallocate(self::$canvas, 135, 132, 28);
        imagerectangle(self::$canvas, 50, 50, 100, 100, $color);
    }
}
?>
