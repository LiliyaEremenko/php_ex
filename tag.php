<?php
class Tag {
    protected $name;
    protected $attrs = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function setAttr($name, $value) {
        $this->attrs[$name] = $value;
        return $this;
    }

    public function setAttrs($attrs) {
        foreach ($attrs as $name => $value) {
            $this->setAttr($name, $value);
        }
        return $this;
    }

    public function removeAttr($name) {
        unset($this->attrs[$name]);
        return $this;
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
                if ($value === true) {
                    $result .= " $name";
                }
                else {
                    $result .= " $name=\"$value\"";
                }    
            }
            return $result;
        }
        else {
            return '';
        }
    }
}
?>