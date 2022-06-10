<?php
interface iTag {
	public function getName();
	public function getText();
	public function getAttrs();
	public function getAttr($name);
	public function setAttr($name, $value = true);
	public function setAttrs($attrs);
	public function removeAttr($name);
	public function open();
	public function close();
	public function addClass($className);
	public function removeClass($className);
}
?>