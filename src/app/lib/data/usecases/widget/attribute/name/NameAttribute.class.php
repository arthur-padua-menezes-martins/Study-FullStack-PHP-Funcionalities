<?php

class NameAttribute implements InsertAttributeInterface {
  /**
  * autenticação de nome
  * @param string $name name
  * @return mixed
  */
  static public function insert (string $name) {
    if (defined("NameAttributeEnumerate::{$name}")) {
      return $name;
    } else {
      throw new ValueError();
    }
  }
}

?>
