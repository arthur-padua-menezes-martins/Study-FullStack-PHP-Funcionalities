<?php

namespace lib\data\protocols\widget\element;

abstract class ElementInterface {
  /**
  * define o nome do elemento
  * @param string $name nome do elemento
  */
  abstract public function set_name(string $name);

  /**
  * retorna o nome do elemento
  * @return string
  */
  abstract public function get_name();

  /**
  * define o rótulo do elemento
  * @param string $label rótulo do elemento
  */
  abstract public function set_label(string $label);

  /**
  * retorna o rótulo do elemento
  * @return string
  */
  abstract public function get_label();
}

?>
