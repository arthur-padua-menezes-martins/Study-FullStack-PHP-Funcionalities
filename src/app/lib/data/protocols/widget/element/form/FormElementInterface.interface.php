<?php

abstract class FormElementInterface {
  /** @var string $name nome do elemento */
  protected string $name;

  /** @var string $label rótulo do elemento */
  protected string $label;

  /** @var mixed $value valor do elemento */
  protected $value;

  /**
  * retorna o nome do elemento
  * @return string
  */
  public function get_name() {
    return $this->name;
  }

  /**
  * retorna o valor do elemento
  * @return mixed
  */
  public function get_value() {
    return $this->value;
  }

  /**
  * define o nome do elemento
  * @param string $name nome do elemento
  */
  public function set_name(string $name) {
    $this->name = $name;
  }

  public function set_label(string $label) {
    $this->label = $label;
  }

  /**
  * define o valor do elemento
  * @param string $value valor do elemento
  */
  public function set_value(mixed $value) {
    $this->value = $value;
  }

  abstract public function show();
}

?>
