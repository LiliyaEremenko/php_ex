<?php
require_once 'tag.php';

class Select extends Tag {
    private $opts = [];

    public function __construct() {
        parent::__construct('select');
    }

    public function add(Option $opt) {
        $this->opts[] = $opt; 
        return $this;
    }

    public function show() {
        $res = '';
        foreach ($this->opts as $opt) {
            $opt->is_sel();
            $res .=  $opt->show();
        }
        return $this->open() . $res . $this->close();
    }
}


class Option extends Tag {
    public function __construct() {
        parent::__construct('option');
    }
    public function __toString() {
        return $this->show();
    }

    public function is_sel(){
		if(isset($_REQUEST['list'])){
			if ($this->getText()==$_REQUEST['list']){
				$this->setSelected();
			}else{
				$this->removeAttr('selected');
			}
		}
	}

    public function setSelected() {
        $this->setAttr('selected');
        return $this;
    }
}
?>