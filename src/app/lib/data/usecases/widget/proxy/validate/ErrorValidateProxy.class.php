<?php

abstract class ErrorValidateProxy implements ValidateProxyInterface {
  /**
  * verifica se determinada resposta é instância de um erro
  * @param mixed $property propriedade a ser preenchida
  * @param mixed $dependencies resposta a ser analisada
  * @return mixed
  */
  public function validate(&$property, $dependencies) {
    if (!($dependencies instanceof Exception)) {
      $property = $dependencies;
    } else {
      return $dependencies;
    }
  }
}

?>
