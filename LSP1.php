<?php
interface Polygonal {
    public function setHeight($height);
    public function setWidth($width);
}
class Rectangle implements Polygonal{

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

class Square implements Polygonal {

    public function setHeight($value) {
        $this->width = $value;
        $this->height = $value;
    }

    public function setWidth($value) {
        $this->width = $value;
        $this->height = $value;
    }

    public function area() {
            return $this->width * $this->width;
    }
}

class Client {

    function areaVerifier(Polygonal $r) {
        $r->setWidth(5);
        $r->setHeight(4);
        echo $r->area();
    }

}

$r = new Rectangle();
//$r = new Square();
$c = new Client();
$c->areaVerifier($r);