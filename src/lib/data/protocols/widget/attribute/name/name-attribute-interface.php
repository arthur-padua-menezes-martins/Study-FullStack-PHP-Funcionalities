<?php

namespace lib\data\protocols\widget\attribute\name;

use ValueError;

abstract class NameAttributeInterface {
  /**
  * autenticação de nome
  * @param string $name name
  * @return mixed
  */
  static public function name (string $name) {
    if (defined("NameAttributeEnumerate::{$name}")) {
      return $name;
    } else {
      throw new ValueError();
    }
  }
}

?>
