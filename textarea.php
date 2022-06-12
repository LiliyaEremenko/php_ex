<?php
class Textarea extends Tag {
    public function __construct() {
        parent::__construct('textarea');
    }

    public function show() {
        $message = $this->getAttr('name');
        if ($message) {
            if (isset($_REQUEST[$message])) {
                $value = $_REQUEST[$message];
                $this->setAttr('value', $value);
            }
        }
        return parent::show();
    }

    public function __toString() {
        return $this->show();
    }
}
?>