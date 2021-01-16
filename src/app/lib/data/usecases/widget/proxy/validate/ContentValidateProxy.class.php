<?php

abstract class ContentValidateProxy implements ValidateProxyInterface {
  /**
  * comanda a verificação de conteúdo
  * @param mixed $property propriedade a ser validada
  * @param callable $dependencies dependências para a validação
  * @return mixed
  */
  public function validate (mixed $property, $dependencies) {
    $arguments = $dependencies($property);
    $count = 0;

    foreach ($arguments as $argument) {
      if (!empty($argument)) {
        ++$count;
      }
    }

    if (count($argument) === $count) {
      return true;
    } else {
      throw new ValueError();
    }
  }
}

?>
