<?php

final class FormElement {
  public string $print = 'value';

  public function __construct(string $text) {
    print $text;
  }
}

final class FormElements extends BasicElementInterface {
  /** @var ValidateProxyInterface $content_validate_proxy proxy de validação de conteúdo */
  private ValidateProxyInterface $content_validate_proxy;

  /** @var array<FormElementInterface> campos do formulário */
  protected array $fields;

  /** @var array<ActionInterface> $actions ações dos campos */
  protected string $actions;

  public function __construct(string $name, ValidateProxyInterface $content_validate_proxy) {
    $this->set_name($name);
    $this->content_validate_proxy = $content_validate_proxy;
  }

  public function get_data() {
    return $this->data;
  }

  /** @return array<FormElementInterface> */
  public function get_fields(): array {
    return $this->fields;
  }

  /** @return array<ActionInterface> */
  public function get_actions(): array {
    return $this->actions;
  }

  public function set_title(string $title) {

  }

  public function set_name(string $name): void {
    $this->content_validate_proxy->validate(
      $this->name, fn (string $content) => NameAttribute::insert($content)
    );
  }

  public function set_label(string $label) {

  }

  public function set_data(FormElementInterface $element) {
    foreach ($this->fields as $key => $field) {
      if (isset($key) && isset($element->key)) {
        $field->set_value($element->key);
      }
    }
  }

  public function add_field(string $label, FormElementInterface $element): void {
    $element->set_label($label);

    $this->fields[$element->get_name()] = $element;
  }

  public function add_action(string $label, ActionInterface $action): void {
    $this->actions[$label] = $action;
  }
}

?>
