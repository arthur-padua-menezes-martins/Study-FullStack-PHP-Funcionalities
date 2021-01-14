<?php

namespace lib\data\usecases\widget\element\form;

use lib\data\protocols\widget\element\form\FormElementInterface;
use lib\data\protocols\widget\action\ActionInterface;
use lib\data\protocols\widget\attribute\name\NameAttributeInterface;
use lib\data\usecases\widget\proxy\validate\ErrorValidateProxy;
use lib\data\usecases\widget\proxy\validate\ContentValidateProxy;

final class FormElement {
  /** @var ErrorValidateProxy $error_validate_proxy proxy de validação de erro */
  protected ErrorValidateProxy $error_validate_proxy;

  /** @var ContentValidateProxy $content_validate_proxy proxy de validação de conteúdo */
  protected ContentValidateProxy $content_validate_proxy;

  /** @var array<FormElementInterface> $fields campos do formulário */
  protected string $fields;

  protected $data;

  /** @var array<ActionInterface> $actions ações dos campos */
  protected string $actions;

  /** @var string $name nome do formulário */
  protected string $name;

  /** construtor público */
  public function __construct() {}

  public function set_name(string $name): void {
    $this->error_validate_proxy->validate(
      $this->name,
      $this->content_validate_proxy->validate(fn () => [$name, NameAttributeInterface::name($name)])
    );
  }

  public function get_name(): string {
    return $this->name;
  }

  public function add_field(string $label, FormElementInterface $object): void {
    $object->set_label($label);

    $this->fields[$object->get_name()] = $object;
  }

  /** @return array<FormElementInterface> */
  public function get_fields(): array {
    return $this->fields;
  }

  public function set_data($object) {
    foreach ($this->fields as $name => $field) {

    }
  }

  public function get_data() {
    return $this->data;
  }

  public function add_action(string $label, ActionInterface $action): void {
    $this->actions[$label] = $action;
  }

  /** @return array<ActionInterface> */
  public function get_actions(): array {
    return $this->actions;
  }
}

?>
