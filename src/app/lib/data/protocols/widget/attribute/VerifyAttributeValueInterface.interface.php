<?php

interface VerifyAttributeValueInterface {
  /**
  * verifica se o valor passado encontra-se em uma lista de valores
  * @param mixed $attribute_value valor do atributo
  * @return mixed;
  */
  static public function verify (mixed $attribute_value);
}
