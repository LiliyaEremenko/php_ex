<?php
class Tag {
    protected $name;

    public function __construct($name, $attrs = []) {
        $this->name = $name;
        $this->attrs = $attrs;
    }

    public function open() {
        $name = $this->name;
        $attrsStr = $this->getAttrsStr($this->attrs);
        return "<$name$attrsStr>";
    }

    public function close() {
        $name = $this->name;
        return "</$name>";
    }

    protected function getAttrsStr($attrs) {
        if (!empty($attrs)) {
            $result = '';
            foreach ($attrs as $name => $value) {
                $result = " $name=\"$value\"";
            }
            return $result;
        }
        else {
            return '';
        }
    }
}
?>