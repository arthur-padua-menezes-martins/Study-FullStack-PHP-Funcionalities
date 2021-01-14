<?php

namespace lib\data\protocols\widget\attribute\classes;

abstract class ClassesAttributeInterface {
  /**
  * autenticação de classes de identificação
  * @param array $classes classes de identificação
  * @return void
  */
  static public function classes(array $classes) {
    return $classes;
  }
}

?>
