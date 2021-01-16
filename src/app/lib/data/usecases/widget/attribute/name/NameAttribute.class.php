<?php

class NameAttribute implements VerifyAttributeValueInterface {
  /**
  * autenticação de nome
  * @param string $name name
  * @return mixed
  */
  static public function verify ($name) {
    if (defined("NameAttributeEnumerate::{$name}")) {
      return true;
    } else {
      return function() {
        throw new TypeError();
      };
    }
  }
}

?>
