<?php

final class Element extends PrimordialElementInterface {

  public function __construct(string $name) {
    $this->tagname = $name;
  }

  public function __set(string $name, mixed $value) {
    $this->properties[$name] = $value;
  }

  public function __get(string $name) {
    isset($this->property[$name]) ? $this->property[$name] : NUll;
  }

  public function add(mixed $child) {
    $this->children[] = $child;
  }

  public function open() {
    $html_properties = '';

    if (isset($this->properties)) {
      foreach ($this->properties as $name => $value) {
        if (is_scalar($value)) {
          $html_properties .= " {$name} = '{$value}'";
        }
      }
    }

    return "<{$this->tagname} {$html_properties}>";
  }

  public function content() {
    if ($this->children) {
      foreach ($this->children as $child) {
        if (is_object($child)) {
            $html_child = $child->show();
        } else if ((is_string($child)) or (is_numeric($child))) {
            $html_child = $child;
        }
      }
    }

    return $html_child;
  }

  public function close() {
    $html = "</{$this->tagname}>";

    return $html;
  }

  public function show() {
    return $this->open() . $this->content() . $this->close();
  }
}

?>
