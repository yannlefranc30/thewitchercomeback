<?php
class thewitcher {
    public $ciri;
    public $thewitcher;

    function __construct($ciri, $thewitcher) {
        $this->ciri = $ciri;
        $this->thewitcher = $thewitcher;
    }
    function __destruct() {
        echo "le persso {$this->ciri} and  {$this->thewitcher}.";
    }
}

$ciri = new thewitcher("yennefer", "ciri");
?>














