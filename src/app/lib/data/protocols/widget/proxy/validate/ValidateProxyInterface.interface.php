<?php

interface ValidateProxyInterface {
  /**
  * valida determinada propriedade
  * @param mixed $property propriedade da validação
  * @param mixed $dependencies dependências para a validação
  * @return mixed
  */
  public function validate($property, $dependencies);
}

?>
