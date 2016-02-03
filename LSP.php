<?php
class Rectangle {

    protected $topLeft;
    protected $width;
    protected $height;

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getWidth() {
        return $this->width;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

class Square extends Rectangle {

    public function setHeight($value) {
        $this->width = $value;
        $this->height = $value;
    }

    public function setWidth($value) {
        $this->width = $value;
        $this->height = $value;
    }
}

class Client {

    function areaVerifier(Rectangle $r) {
        $r->setWidth(5);
        $r->setHeight(4);

        if($r->area() != 20) {
            return false;
        }

        return true;
    }

}

//$r = new Rectangle();
$r = new Square();
$c = new Client();
var_dump($c->areaVerifier($r));