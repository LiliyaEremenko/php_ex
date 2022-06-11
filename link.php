<?php
require_once 'tag.php';

class Link extends Tag {
    public function __construct() {
        $this->setAttr('href', '');
        parent::__construct('a');
    }

    protected function activateSelf($className) {
        if ($this->getAttr('href') == $_SERVER['REQUEST_URI']) {
            $this->addClass($className);
        }
    }

    public function open() {
        $this->activateSelf('active');
        return parent::open();
    }
}
?>