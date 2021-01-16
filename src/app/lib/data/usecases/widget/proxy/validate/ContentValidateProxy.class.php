<?php

class ContentValidateProxy implements ValidateProxyInterface {
  /** @var ValidateProxyInterface $validate_proxy proxy de validação */
  protected ValidateProxyInterface $validate_proxy;

  public function __construct(ValidateProxyInterface $validate_proxy) {
    $this->validate_proxy = $validate_proxy;
  }

  /**
  * comanda a verificação de conteúdo
  * @param mixed $property propriedade da validação
  * @param callable $dependencies dependências para a validação
  * @return mixed
  */
  public function validate($property, $dependencies) {
    $properties = is_array($property) ? $property : [$property];

    $valid = array_every($properties, function($item) {
      return !empty($item);
    });

    $response = ($valid) ? true : function() { throw new Exception(); };
    $response = (is_bool($dependencies($property))) ? $response : $dependencies($property);

    return $this->validate_proxy->validate($property, $response);
  }
}

?>
