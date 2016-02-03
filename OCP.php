<?php
class File {
    public $length;
    public $sent;
}

class Progress {

    private $file;

    function __construct(File $file) {
        $this->file = $file;
    }

    function getAsPercent() {
        return $this->file->sent * 100 / $this->file->length;
    }

}

$music = new File();
$music->length = 200;
$music->sent = 100;

$progress = new Progress($music);

echo $progress->getAsPercent();