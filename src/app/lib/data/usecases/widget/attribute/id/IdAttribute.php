<?php

class IdAttribute implements VerifyAttributeValueInterface {
  /**
  * autenticação de identificação única
  * @param string $id identificação única
  * @return mixed
  */
  static public function verify ($id) {
    if (defined("VerifyAttributeValueInterface::{$id}")) {
      return $id;
    } else {
      throw new ValueError();
    }
  }
}

?>
