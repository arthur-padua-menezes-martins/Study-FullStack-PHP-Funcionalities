<?php

final class FormElement extends BasicElementInterface {
  /** @var ValidateProxyInterface $content_validate_proxy proxy de validação de conteúdo */
  protected ValidateProxyInterface $content_validate_proxy;

  /** @var FormElementInterface[] $fields campos do formulário */
  protected array $fields;

  /** @var ActionInterface[] $actions ações dos campos do formulário */
  protected string $actions;

  public function __construct(ValidateProxyInterface $content_validate_proxy) {
    $this->content_validate_proxy = $content_validate_proxy;
  }

  /** retorna o conteúdo do formulário */
  public function get_data() {
    return $this->data;
  }

  /** @return array<FormElementInterface> */
  public function get_fields(): array {
    return $this->fields;
  }

  /**
  * retorna as ações
  * @return ActionInterface[]
  */
  public function get_actions(): array {
    return $this->actions;
  }

  public function set_title(string $title) {
    $this->title = $title;
  }

  public function set_name(string $name): void {
    $validate = fn (string $content) => call_user_func_array(array('NameAttribute', 'verify'), array($content));

    if (is_bool($this->content_validate_proxy->validate($name, $validate))) {
      $this->name = $name;
    }
  }

  public function set_label(string $label) {
    $this->label = $label;
  }

  /** define o conteúdo do formulário */
  public function set_data(FormElementInterface $element) {
    foreach ($this->fields as $key => $field) {
      if (isset($key) && isset($element->key)) {
        $field->set_value($element->key);
      }
    }
  }

  /** define um campo */
  public function add_field(string $label, FormElementInterface $element): void {
    $element->set_label($label);

    $this->fields[$element->get_name()] = $element;
  }

  /** define uma ação */
  public function add_action(string $label, ActionInterface $action): void {
    $this->actions[$label] = $action;
  }
}

?>
