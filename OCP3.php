<?php

abstract class Measurable {
    abstract function getLength();
    abstract function getSent();
}

class File extends Measurable {

    private $length;
    private $sent;

    public $filename;
    public $owner;

    function setLength($length) {
        $this->length = $length;
    }

    function getLength() {
        return $this->length;
    }

    function setSent($sent) {
        $this->sent = $sent;
    }

    function getSent() {
        return $this->sent;
    }

    function getRelativePath() {
        return dirname($this->filename);
    }

    function getFullPath() {
        return realpath($this->getRelativePath());
    }

}

class Progress {

    private $measurableContent;

    function __construct(Measurable $measurableContent) {
        $this->measurableContent = $measurableContent;
    }

    function getAsPercent() {
        return $this->measurableContent->getSent() * 100 / $this->measurableContent->getLength();
    }

}

$file = new File();
$file->setLength(200);
$file->setSent(100);

$progress = new Progress($file);
echo $progress->getAsPercent();