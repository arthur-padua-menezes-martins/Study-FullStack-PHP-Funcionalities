<?php

namespace lib\data\protocols\widget\attribute\method;

use ValueError;

abstract class MethodAttributeInterface {
  /**
  * autenticação de tipo de método
  * @param string $method tipo de método
  * @return mixed
  */
  static public function method(string $method) {
    if (defined("MethodAttributeEnumerate::{$method}")) {
      return $method;
    } else {
      throw new ValueError();
    }
  }
}

?>
