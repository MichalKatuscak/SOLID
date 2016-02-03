<?php
class Progress {

    private $measurableContent;

    function __construct($measurableContent) {
        $this->measurableContent = $measurableContent;
    }

    function getAsPercent() {
        return $this->measurableContent->sent * 100 / $this->measurableContent->length;
    }

}

class Music {

    public $length;
    public $sent;

    public $artist;
    public $album;
    public $releaseDate;

    function getAlbumCoverFile() {
        return 'Images/Covers/' . $this->artist . '/' . $this->album . '.png';
    }
}

$music = new Music();
$music->length = 200;
$music->sent = 100;

$progress = new Progress($music);

echo $progress->getAsPercent();