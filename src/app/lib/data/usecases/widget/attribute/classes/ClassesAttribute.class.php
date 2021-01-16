<?php

class ClassesAttribute implements VerifyAttributeValueInterface {
  /**
  * autenticação de classes de identificação
  * @param array $classes classes de identificação
  * @return void
  */
  static public function verify($classes) {
    return $classes;
  }
}

?>
