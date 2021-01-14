<?php

namespace lib\data\protocols\widget\attribute\id;

use ValueError;

abstract class IdAttributeInterface {
  /**
  * autenticação de identificação única
  * @param string $id identificação única
  * @return mixed
  */
  static public function id (string $id) {
    if (defined("IdAttributeEnumerate::{$id}")) {
      return $id;
    } else {
      throw new ValueError();
    }
  }
}

?>
