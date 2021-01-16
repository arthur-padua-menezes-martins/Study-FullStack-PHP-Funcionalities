<?php

class MethodAttribute implements InsertAttributeInterface {
  /**
  * autenticação de tipo de método
  * @param string $method tipo de método
  * @return mixed
  */
  static public function insert(string $method) {
    if (defined("MethodAttributeEnumerate::{$method}")) {
      return $method;
    } else {
      throw new ValueError();
    }
  }
}

?>
