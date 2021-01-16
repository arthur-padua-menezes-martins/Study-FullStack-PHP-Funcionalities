<?php

interface ValidateProxyInterface {
  /**
  * valida determinada propriedade
  * @param mixed $property propriedade a ser validada
  * @param mixed $dependencies dependências para a validação
  * @return mixed
  */
  public function validate (mixed &$property, mixed $dependencies);
}

?>
