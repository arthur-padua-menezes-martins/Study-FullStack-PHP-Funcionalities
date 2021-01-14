<?php

namespace lib\data\usecases\widget\proxy\validate;

use ValueError;
use lib\data\protoocls\widget\proxy\validate\ContentValidateProxyInterface;

abstract class ContentValidateProxy implements ContentValidateProxyInterface {
  /**
  * @overhide
  * valida se há conteúdo em determinados argumentos
  * @param array $arguments argumentos a serem validados
  * @return bool
  */
  public function validateContent (array $arguments) {
    $count = 0;

    foreach ($arguments as $argument) {
      if (!empty($argument)) {
        ++$count;
      }
    }

    return (count($argument) === $count);
  }

  /**
  * executa a ação do método
  * @param mixed $method método a ser executado
  * @return mixed
  */
  public function validateMethod ($method) {
    return $method;
  }

  /**
  * comanda a verificação de conteúdo
  * @param callable $closure função a ser chamada
  * @return mixed
  */
  public function validate (callable $closure) {
    [$content, $method] = $closure();

    if ($this->validateContent($content)) {
      return $this->validateMethod($method);
    } else {
      throw new ValueError();
    }
  }
}

?>
