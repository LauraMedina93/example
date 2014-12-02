<?php
namespace Graphics;

class Circle extends Figure
{
    public function draw() {
        $color = imagecolorallocate(self::$canvas,135,132,28);
        
        imagearc(self::$canvas, 100, 100, 200, 200, 0, 360, $color);
    }
}
?>
