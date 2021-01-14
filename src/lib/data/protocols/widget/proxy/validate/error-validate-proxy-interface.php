<?php

namespace lib\data\protocols\widget\proxy\validate;

interface ErrorValidadeProxyInterface {
  /**
  * verifica erros na resposta
  * @param mixed $property propriedade a ser modificada
  * @param mixed $response resposta a ser analisada
  * @return mixed
  */
  public function validate(&$property, $response): mixed;
}

?>
