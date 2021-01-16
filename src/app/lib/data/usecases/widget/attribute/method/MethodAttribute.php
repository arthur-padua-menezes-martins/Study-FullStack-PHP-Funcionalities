<?php

class MethodAttribute implements VerifyAttributeValueInterface {
  /**
  * autenticação de tipo de método
  * @param string $method tipo de método
  * @return mixed
  */
  static public function verify($method) {
    if (defined("MethodAttributeEnumerate::{$method}")) {
      return $method;
    } else {
      throw new ValueError();
    }
  }
}

?>
