<?php

class IdAttribute implements InsertAttributeInterface {
  /**
  * autenticação de identificação única
  * @param string $id identificação única
  * @return mixed
  */
  static public function insert (string $id) {
    if (defined("IdAttributeEnumerate::{$id}")) {
      return $id;
    } else {
      throw new ValueError();
    }
  }
}

?>
