<?php

interface InsertAttributeInterface {
  /**
  * inserção de atributo
  * @param string $attribute_value valor do atributo
  * @return mixed;
  */
  static public function insert (string $attribute_value);
}
