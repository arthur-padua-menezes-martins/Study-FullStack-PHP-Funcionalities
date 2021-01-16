<?php

abstract class BasicElementInterface {
  /** @var string $title título do elemento */
  protected string $title;

  /** @var string $name nome do elemento */
  protected string $name;

  /** @var string $label rótulo do elemento */
  protected string $label;

  /** @var array $fields campos do elemento */
  protected array $fields;

  /** @var array $data dados do elemento */
  protected array $data;

  /**
  * retorna o título do elemento
  * @return string
  */
  public function get_title() {
    return $this->title;
  }

  /**
  * retorna o nome do elemento
  * @return string
  */
  public function get_name() {
    return $this->name;
  }

  /**
  * retorna o rótulo do elemento
  * @return string
  */
  public function get_label() {
    return $this->label;
  }

  /**
  * define o título do elemento
  * @param string $title título do elemento
  */
  public function set_title(string $title) {
    $this->title = $title;
  }

  /**
  * define o nome do elemento
  * @param string $name nome do elemento
  */
  public function set_name(string $name) {
    $this->name = $name;
  }

  /**
  * define o rótulo do elemento
  * @param string $label rótulo do elemento
  */
  public function set_label(string $label) {
    $this->label = $label;
  }
}

?>
