<?php

class ErrorValidateProxy implements ValidateProxyInterface {
  /**
  * verifica se determinada resposta é instância de um erro
  * @param mixed $property propriedade a ser analisada
  * @param mixed $dependencies resposta a ser analisada
  * @return mixed
  */
  public function validate($property, $dependencies) {
    if (is_bool($dependencies)) {
      return true;
    }

    try {
      $dependencies();
    } catch (Exception $e) {
      /** error log */
    } finally {

    }
  }
}

?>
