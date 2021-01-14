<?php

namespace lib\data\usecases\widget\proxy\validate;

use Exception;

abstract class ErrorValidateProxy {
  /**
  * verifica se determinada resposta é instância de um erro
  * @param mixed $property propriedade a ser preenchida
  * @param mixed $response resposta a ser analisada
  * @return mixed
  */
  public function validate(&$property, $response) {
    if (!($response instanceof Exception)) {
      $property = $response;
    } else {
      return $response;
    }
  }
}

?>
